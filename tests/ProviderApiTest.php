<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProviderApiTest extends TestCase
{
    use MakeProviderTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateProvider()
    {
        $provider = $this->fakeProviderData();
        $this->json('POST', '/api/v1/providers', $provider);

        $this->assertApiResponse($provider);
    }

    /**
     * @test
     */
    public function testReadProvider()
    {
        $provider = $this->makeProvider();
        $this->json('GET', '/api/v1/providers/'.$provider->id);

        $this->assertApiResponse($provider->toArray());
    }

    /**
     * @test
     */
    public function testUpdateProvider()
    {
        $provider = $this->makeProvider();
        $editedProvider = $this->fakeProviderData();

        $this->json('PUT', '/api/v1/providers/'.$provider->id, $editedProvider);

        $this->assertApiResponse($editedProvider);
    }

    /**
     * @test
     */
    public function testDeleteProvider()
    {
        $provider = $this->makeProvider();
        $this->json('DELETE', '/api/v1/providers/'.$provider->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/providers/'.$provider->id);

        $this->assertResponseStatus(404);
    }
}
