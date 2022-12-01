<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'blog')]
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/BlogController.php',
        ]);
    }

    public function lastBlogPost(): Response
    {
        $blogPost = [
            'title' => 'le sport et la santé'
        ];
        return $this->render('./partials/_last_blog_particle.html.twig', ['blogPost' => $blogPost]);
    }
}
