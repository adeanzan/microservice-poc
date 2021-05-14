<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DebugController
{
    /**
     * @Route("/debug/random-number")
     */
    public function randomNumber()
    {
        return new JsonResponse([
            'success' => true,
            'value' => rand(1, 100)
        ]);
    }
}