<?php

namespace App\Http\Integrations\ApiPublisher\Auth;

use Sammyjo20\Saloon\Http\SaloonRequest;
use Sammyjo20\Saloon\Interfaces\AuthenticatorInterface;

class TokenBearer implements AuthenticatorInterface
{
    public function __construct()
    {
        //
    }

    /**
     * Apply the authentication to the request.
     *
     * @param SaloonRequest $request
     * @return void
     */
    public function set(SaloonRequest $request): void
    {
        $request->withTokenAuth(config('services.api-publisher.token'));
    }
}
