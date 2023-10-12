<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\DashboardItem;
use Doctrine\ORM\EntityManagerInterface; // Import EntityManagerInterface

class DashboardController extends AbstractController
{
    private $entityManager; // Declare the private property

    // Inject EntityManagerInterface through constructor
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/dashboard", name="app_dashboard")
     */
    public function dashboard(): Response
    {
        // Fetch dashboard items from the database using EntityManager
        $dashboardItems = $this->entityManager->getRepository(DashboardItem::class)->findAll();

        return $this->render('dashboard/index.html.twig', [
            'dashboardItems' => $dashboardItems,
        ]);
    }
}
