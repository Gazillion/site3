<?php

// src/Service/Policies.php
namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class Policies
{

    public function __construct(
        private HttpClientInterface $client,
    ) {
    }

    public function get(string $endpoint)
    {
        
        try {
            $response = $this->client->request('GET', 'https://127.0.0.1:8000/'.$endpoint, [
                'verify_peer' => false,
            ]);
        } catch (TransportException) {
            $response = '127.0.0.1';
        }
        
        //$statusCode = $response->getStatusCode();
        // $statusCode = 200
        //$contentType = $response->getHeaders()['content-type'][0];
        // $contentType = 'application/json'
        $content = $response->getContent();
        // $content = '{"id":521583, "name":"symfony-docs", ...}'
        //$content = $response->toArray();
        // $content = ['id' => 521583, 'name' => 'symfony-docs', ...]

        
        return $content;
    }
    
    public function getAllPolicies(string $endpoint)
    {
        
        try {
            $response = $this->client->request('GET', 'https://127.0.0.1:8000/api/policy-v1', [
                'verify_peer' => false,
            ]);
        } catch (TransportException) {
            $response = '127.0.0.1';
        }
        
        $content = $response->getContent();

        
        return $content;
    }
    
    
    
    public function set(string $endpoint,$data)
    {
        
        try {
            $response = $this->client->request('POST', 'https://127.0.0.1:8000/'.$endpoint, [
                'verify_peer' => false,
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
                'body' => json_encode($data),
            ]);
        } catch (TransportException) {
            $response = '127.0.0.1';
        }
        
       
        
        //$statusCode = $response->getStatusCode();
        // $statusCode = 200
        //$contentType = $response->getHeaders()['content-type'][0];
        // $contentType = 'application/json'
        $content = $response->getContent();
        // $content = '{"id":521583, "name":"symfony-docs", ...}'
        //$content = $response->toArray();
        // $content = ['id' => 521583, 'name' => 'symfony-docs', ...]

        
        return $content;
    }
    

    // Add other methods as needed, e.g., post(), put(), delete()...
}

