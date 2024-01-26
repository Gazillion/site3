<?php

// src/Controller/AjaxServiceController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\Policies;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class AjaxServiceController extends AbstractController
{
    public function __construct(
        private HttpClientInterface $client,
    ) {
    }
    
    #[Route('service/policy/create', name: 'service_policy_create', methods: ['POST'])]
        public function saveData(Request $request, Policies $apiPolicies, UserInterface $user)
    {
        // Get data from the AJAX request
        $data2 = json_decode($request->getContent(), true);
        
        
        $responsee = json_encode([
            'IDUser' => $user->getID(),
            'policyNo' => '',
            'policyStatus' => '',
            'policyType' => $data2['policyType'],
            'policyEffectiveDate' => '',
            'policyExpirationDate' => '',
            'policyHolder' => json_encode($data2['policyHolder']),
            'drivers' => json_encode($data2['drivers']),
            'vehicles' => json_encode($data2['vehicles']),
        ]);
        

        
       try {
            $response = $this->client->request('POST', 'https://127.0.0.1:8000/api/policy-v1/create', [
                'verify_peer' => false,
                'headers' => [
                    'Content-Type' => 'application/json; charset=utf-8',
                    'Accept' => 'application/json'
                ],
                'body' => $responsee ,
            ]);
        } catch (TransportException) {
            $response = '127.0.0.1';
        }
        
        $content = $response->getContent();
        

        // Return a JSON response
        return new JsonResponse(['status' => $content]);
    }
}
