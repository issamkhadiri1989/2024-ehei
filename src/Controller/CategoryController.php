<?php

namespace App\Controller;

use App\Entity\Category;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CategoryController extends AbstractController
{
    #[Route('/browse/{slug}', name: 'app_category')]
    public function index(
        Category $category,
    ): Response {
        return $this->render('category/index.html.twig', [
            'category' =>  $category,
        ]);
    }

    #[Route('/browse/all', name: 'app_browse_all', priority: 2)]
    public function all(EntityManagerInterface $manager): Response
    {
        $repository = $manager->getRepository(Category::class);

        $categories = $repository->findAll();

        return $this->render('category/all.html.twig', [
            'categories' => $categories,
        ]);
    }
}
