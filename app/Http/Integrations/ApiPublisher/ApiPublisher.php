<?php

namespace App\Http\Integrations\ApiPublisher;

use Sammyjo20\Saloon\Http\SaloonConnector;
use Sammyjo20\Saloon\Interfaces\AuthenticatorInterface;
use Sammyjo20\Saloon\Traits\Plugins\AcceptsJson;

class ApiPublisher extends SaloonConnector
{
    use AcceptsJson;

    /**
     * Default authenticator used.
     *
     * @return AuthenticatorInterface|null
     */
    public function defaultAuth(): ?AuthenticatorInterface
    {
        return new Auth\TokenBearer();
    }

    /**
     * The Base URL of the API.
     *
     * @return string
     */
    public function defineBaseUrl(): string
    {
        return config('services.api-publisher.base_url');
    }

    /**
     * The headers that will be applied to every request.
     *
     * @return string[]
     */
    public function defaultHeaders(): array
    {
        return [];
    }

    /**
     * The config options that will be applied to every request.
     *
     * @return string[]
     */
    public function defaultConfig(): array
    {
        return [];
    }
}
