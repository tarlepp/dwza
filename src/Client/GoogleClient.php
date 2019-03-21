<?php

namespace App\Client;

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

class GoogleClient extends Client
{
    public function search(string $searchTerm): ResponseInterface
    {
        return $this->get('/', ['query' => ['search' => $searchTerm]]);
    }
}
