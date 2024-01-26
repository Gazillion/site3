<?php

namespace App\Controller;

use App\Entity\Policy1;
use App\Entity\User;
use App\Repository\Policy1Repository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class Policy1Controller extends AbstractController
{
    #[Route('api/policy-v1', name: 'app_policy1')]
        
    public function List( Policy1Repository $policy1Repository ): Response
    {
        $policy1s = $policy1Repository->findAll();

        $data = [];
        foreach ($policy1s as $policy1) {
            $data[] = [
                'ID'                   => $policy1->getId(),
                'PolicyNo'             => $policy1->getPolicyNo(),
                'IDUser'               => $policy1->getIDUser(),
                'PolicyStatus'         => $policy1->getPolicyStatus(),
                'PolicyType'           => $policy1->getPolicyType(),
                'PolicyEffectiveDate'  => $policy1->getPolicyEffectiveDate(),
                'PolicyExpirationDate' => $policy1->getPolicyExpirationDate(),
                'PolicyHolder'         => $policy1->getPolicyHolder(),
                'Drivers'              => $policy1->getDrivers(),
                'Vehicles'             => $policy1->getVehicles(),
            ];
        }

        return new JsonResponse($data, Response::HTTP_OK);
    }
    
    #[Route('/policy1/{id}', name: 'policy1_show', methods: ['GET'])]
    
    public function show(Policy1 $policy1): JsonResponse
    {
        $data = [
            'ID'                   => $policy1->getId(),
            'PolicyNo'             => $policy1->getPolicyNo(),
            'IDUser'               => $policy1->getIDUser(),
            'PolicyStatus'         => $policy1->getPolicyStatus(),
            'PolicyType'           => $policy1->getPolicyType(),
            'PolicyEffectiveDate'  => $policy1->getPolicyEffectiveDate(),
            'PolicyExpirationDate' => $policy1->getPolicyExpirationDate(),
            'PolicyHolder'         => $policy1->getPolicyHolder(),
            'Drivers'              => $policy1->getDrivers(),
            'Vehicles'             => $policy1->getVehicles(),
        ];

        return new JsonResponse($data, Response::HTTP_OK);
    }
    
    
    #[Route('api/policy-v1/create', name: 'policy1_create', methods: ['POST'])]
    
    public function create(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {

        
        $data = json_decode($request->getContent(), true);
        
        
        //$data = json_decode($test, true);
        
        $policy = new Policy1();
        $policy->setIDUser($data['IDUser']);
        $policy->setPolicyNo($data['policyNo']);
        $policy->setPolicyStatus($data['policyStatus']);
        $policy->setPolicyType($data['policyType']);
        $policy->setPolicyEffectiveDate('2024-01-01');
        $policy->setPolicyExpirationDate('2024-01-01');
        $policy->setPolicyHolder($data['policyHolder']);
        $policy->setDrivers($data['drivers']);
        $policy->setVehicles($data['vehicles']);
       
        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($policy);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new JsonResponse(['status' => 'Task created!'], Response::HTTP_CREATED);
    }
    
    
    #[Route('/policy1/update/{id}', name: 'policy1_update', methods: ['PUT'])]
    
    public function update(Request $request,policy1 $policy, EntityManagerInterface $entityManager): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $policy->setPolicyNo($data['PolicyNo']);
        $policy->setPolicyStatus($data['PolicyStatus']);
        $policy->setPolicyType($data['PolicyType']);
        $policy->setPolicyEffectiveDate($data['PolicyEffectiveDate']);

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($policy);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new JsonResponse(['status' => 'Task updated!'], Response::HTTP_OK);
    }

    
    #[Route('/policy1/{id}', name: 'policy1_delete', methods: ['DELETE'])]
    
    public function delete(Policy1 $policy1, EntityManagerInterface $entityManager): JsonResponse
    {
        $entityManager->remove($policy1);
        $entityManager->flush();

        return new JsonResponse(['status' => 'Task deleted!'], Response::HTTP_NO_CONTENT);
    }
    
    #[Route('/api/policy-v1/user/{id}', name: 'policy1_user_details', methods: ['GET'])]
    
    public function showUserPolicy(Request $request,EntityManagerInterface $entityManager): JsonResponse
    {
        
        // Get all route parameters
            $routeParams = $request->attributes->get('_route_params');

            // Get the last variable in the URL
            $lastVariable = (int) end($routeParams);
        
        $tableName = 'policy1';
        $USERID = (int)  $lastVariable;
        //var_dump($USERID);
              
        $conn = $entityManager->getConnection();

        $sql = "SELECT * FROM $tableName p WHERE p.ID_user = :ID_user";

        $resultSet = $conn->executeQuery($sql, ['ID_user' => $USERID]);
        $data = $resultSet->fetchAssociative() ;
        
        return new JsonResponse($data, Response::HTTP_OK);
    }
    

    
    
}
