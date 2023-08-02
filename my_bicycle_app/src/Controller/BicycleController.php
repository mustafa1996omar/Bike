<?php

namespace App\Controller;

use App\Entity\Bicycle;
use App\Entity\ElectricBicycle;
use App\Entity\RoadBicycle;
use App\Form\BicycleTypeForm;
use App\Form\ElectricBicycleType;
use App\Form\RoadBicycleType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class BicycleController extends AbstractController
{
    /**
     * @Route("/bicycle", name="bicycle")
     */
    public function index(Request $request, SessionInterface $session): Response
    {
        // The session now holds either an ElectricBicycle or a RoadBicycle
        $bicycle = $session->get('bicycle');

        // We will need to make sure that $bicycle is not null before using it
        if (!$bicycle) {
            // If there is no bicycle in the session, redirect to the home page
            return $this->redirectToRoute('home');
        }

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

    /**
     * @Route("/", name="home")
     */
    public function chooseType(Request $request): Response
    {
        $form = $this->createForm(BicycleTypeForm::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $type = $form->get('type')->getData();

            // Redirect to the form for the selected type
            return $this->redirectToRoute('initialize', ['type' => $type]);
        }

        // Render the form
        return $this->render('bicycle/choose_type.html.twig', [
            'form' => $form->createView(),
        ]);
    }



    /**
     * @Route("/initialize", name="initialize")
     */
    public function initialize(Request $request, SessionInterface $session): Response
    {
        // Based on the type of bike, we initialize the correct form
        if ($request->query->get('type') === 'electric') {
            $bicycle = new ElectricBicycle();
            $form = $this->createForm(ElectricBicycleType::class, $bicycle);
        } else {
            $bicycle = new RoadBicycle();
            $form = $this->createForm(RoadBicycleType::class, $bicycle);
        }

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Store the bicycle object in the session
            $session->set('bicycle', $bicycle);

            // Redirect to the bicycle page
            return $this->redirectToRoute('bicycle');
        }

        // Render the form
        return $this->render('bicycle/initialize.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
