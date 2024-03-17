<?php

namespace App\Controller;

use App\Entity\Offer;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PageController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function index(EntityManagerInterface $manager): Response
    {
        $repository = $manager->getRepository(Offer::class);

        $offers = $repository->findBy([], orderBy: ['id' => 'DESC'], limit: 4);

        return $this->render('page/home.html.twig', [
            'offers' => $offers,
        ]);
    }
}
