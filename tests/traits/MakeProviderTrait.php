<?php

use Faker\Factory as Faker;
use App\Models\Provider;
use App\Repositories\ProviderRepository;

trait MakeProviderTrait
{
    /**
     * Create fake instance of Provider and save it in database
     *
     * @param array $providerFields
     * @return Provider
     */
    public function makeProvider($providerFields = [])
    {
        /** @var ProviderRepository $providerRepo */
        $providerRepo = App::make(ProviderRepository::class);
        $theme = $this->fakeProviderData($providerFields);
        return $providerRepo->create($theme);
    }

    /**
     * Get fake instance of Provider
     *
     * @param array $providerFields
     * @return Provider
     */
    public function fakeProvider($providerFields = [])
    {
        return new Provider($this->fakeProviderData($providerFields));
    }

    /**
     * Get fake data of Provider
     *
     * @param array $postFields
     * @return array
     */
    public function fakeProviderData($providerFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'code' => $fake->word,
            'name' => $fake->word,
            'specialty' => $fake->word,
            'district' => $fake->word,
            'address' => $fake->text,
            'phone' => $fake->word,
            'movil1' => $fake->word,
            'movil2' => $fake->word,
            'contact' => $fake->word,
            'email' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word,
            'deleted_at' => $fake->word
        ], $providerFields);
    }
}
