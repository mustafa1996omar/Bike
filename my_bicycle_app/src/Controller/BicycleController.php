<?php

// src/Controller/BicycleController.php
namespace App\Controller;

use App\Entity\Bicycle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class BicycleController extends AbstractController
{
    /**
     * @Route("/bicycle", name="bicycle")
     */
    public function index(Request $request, SessionInterface $session): Response
    {
        $bicycle = $session->get('bicycle', function () {
            // Create a default bicycle instance (you can adjust the initial values)
            return new Bicycle('Default Color', 'Default Model', 30, 7, 15, 50);
        });

        $action = $request->query->get('action');
        $errorMessage = null;

        try {
            if ($action === 'accelerate') {
                $bicycle->accelerate();
            } elseif ($action === 'brake') {
                $bicycle->brake();
            }
        } catch (\Exception $e) {
            $errorMessage = $e->getMessage();
        }

        // Store the updated bicycle object in the session
        $session->set('bicycle', $bicycle);

        if ($request->isXmlHttpRequest()) {
            // If the request is AJAX, return JSON response
            return $this->json(['speed' => $bicycle->getSpeed()]);
        } else {
            // If it's a regular GET request, render the template
            return $this->render('bicycle/index.html.twig', [
                'bicycle' => $bicycle,
                'errorMessage' => $errorMessage,
            ]);
        }
    }
}
