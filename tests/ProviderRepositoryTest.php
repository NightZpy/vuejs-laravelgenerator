<?php

use App\Models\Provider;
use App\Repositories\ProviderRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProviderRepositoryTest extends TestCase
{
    use MakeProviderTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var ProviderRepository
     */
    protected $providerRepo;

    public function setUp()
    {
        parent::setUp();
        $this->providerRepo = App::make(ProviderRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateProvider()
    {
        $provider = $this->fakeProviderData();
        $createdProvider = $this->providerRepo->create($provider);
        $createdProvider = $createdProvider->toArray();
        $this->assertArrayHasKey('id', $createdProvider);
        $this->assertNotNull($createdProvider['id'], 'Created Provider must have id specified');
        $this->assertNotNull(Provider::find($createdProvider['id']), 'Provider with given id must be in DB');
        $this->assertModelData($provider, $createdProvider);
    }

    /**
     * @test read
     */
    public function testReadProvider()
    {
        $provider = $this->makeProvider();
        $dbProvider = $this->providerRepo->find($provider->id);
        $dbProvider = $dbProvider->toArray();
        $this->assertModelData($provider->toArray(), $dbProvider);
    }

    /**
     * @test update
     */
    public function testUpdateProvider()
    {
        $provider = $this->makeProvider();
        $fakeProvider = $this->fakeProviderData();
        $updatedProvider = $this->providerRepo->update($fakeProvider, $provider->id);
        $this->assertModelData($fakeProvider, $updatedProvider->toArray());
        $dbProvider = $this->providerRepo->find($provider->id);
        $this->assertModelData($fakeProvider, $dbProvider->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteProvider()
    {
        $provider = $this->makeProvider();
        $resp = $this->providerRepo->delete($provider->id);
        $this->assertTrue($resp);
        $this->assertNull(Provider::find($provider->id), 'Provider should not exist in DB');
    }
}
