<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends AbstractController
{
    public function dropdown(CategoryRepository $categoryRepository): Response
    {
        return $this->render('category/_dropdown.html.twig', [
            'categories' => $categoryRepository->findAll(),
        ]);
    }
}
