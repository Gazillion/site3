<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\Policies;
use Symfony\Component\Security\Core\User\UserInterface;

class ListController extends AbstractController
{
    
    #[Route('/policies', name: 'app_list')]
    public function index(Request $request, Policies $apiPolicies, UserInterface $user)
    {
        
        $role = $this->getUser()->getRoles()[0];
        
        if($role === 'ROLE_ADMIN'){
            
            $companies = $apiPolicies->getAllPolicies('api/policy-v1/user/');
            $companies = (array) json_decode($companies);
            //var_dump($companies);
            
            
            
            $companiesX = [
                'Apple' => '$1.16 trillion USD',
                'Samsung' => '$298.68 billion USD',
                'Microsoft' => '$1.10 trillion USD',
                'Alphabet' => '$878.48 billion USD',
                'Intel Corporation' => '$245.82 billion USD',
                'IBM' => '$120.03 billion USD',
                'Facebook' => '$552.39 billion USD',
                'Hon Hai Precision' => '$38.72 billion USD',
                'Tencent' => '$3.02 trillion USD',
                'Oracle' => '$180.54 billion USD',
            ];
            

            return $this->render('list/index.html.twig', [
                'companies' => $companies,
            ]);
            
        
        } else {
            
            
            $details = $apiPolicies->get('api/policy-v1/user/'.$user->getID());
            $true = json_decode($details);
            $data = [];
            
            $data['fname']  = (is_object($true) ? json_decode(json_decode($details)->policy_holder)->firstName : ''); 
            $data['lname']  = (is_object($true) ? json_decode(json_decode($details)->policy_holder)->lastName : ''); 
            $data['zip']    = (is_object($true) ? json_decode(json_decode($details)->policy_holder)->address->zip : '');
            $data['city']   = (is_object($true) ? json_decode(json_decode($details)->policy_holder)->address->city : '');
            $data['state']  = (is_object($true) ? json_decode(json_decode($details)->policy_holder)->address->state : '');
            $data['street'] = (is_object($true) ? json_decode(json_decode($details)->policy_holder)->address->street : '');
            
            return $this->render('list/individual.html.twig', [
                'details' => $details,
                'data' => $data,
            ]); 
        }
        
        
        
    }
}
