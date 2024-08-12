<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\ProgramRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/category', name: 'category_')]
class CategoryController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index( CategoryRepository $categoryRepository): Response
    {
    $categories = $categoryRepository->findAll();

        return $this->render('category/index.html.twig', ['categories' => $categories]);
    }

    #[Route("/{categoryName}", name: 'show')]
public function show(string  $categoryName, CategoryRepository $categoryRepository, ProgramRepository $programRepository): Response {

        $category = $categoryRepository ->findOneBy(['name' => $categoryName]);
        $categoryId = $category->getId();
        $programsByCategory = $programRepository->findByCategory(['category' => $categoryId]);

        if(!$categoryName) {
            throw $this->createNotFoundException("Category Not Found with name $categoryName");
        }
        return $this->render('category/show.html.twig', ['programs' => $programsByCategory, 'category' => $categoryName]);
    }
}