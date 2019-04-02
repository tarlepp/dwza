<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SubscriptionController extends AbstractController
{
    /**
     * @Route("/api/subscription/bill", name="api_subscription_bill", methods={"GET"})
     */
    public function list(): \Symfony\Component\HttpFoundation\JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller LOGhhhhhhhhhhIN!',
            'path' => 'src/Controller/ApiSalesController.php',
        ]);
    }
}
