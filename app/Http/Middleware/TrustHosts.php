<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustHosts as Middleware;
use Symfony\Component\HttpFoundation\Request;

class TrustHosts extends Middleware
{
    protected string $proxies = '**';
    protected int $headers = Request::HEADER_X_FORWARDED_AWS_ELB;
    /**
     * @return array<int, string|null>
     */
    public function hosts(): array
    {
        return [
            $this->allSubdomainsOfApplicationUrl(),
        ];
    }
}
