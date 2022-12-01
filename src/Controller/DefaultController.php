<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class DefaultController extends AbstractController
{
    #[Route('/')]
    public function index()
    {

        // $user = [
        //     'name' => "Jean",
        //     'email'=> 'jean@gmail.com'
        // ];
        // // return $this->file('test.txt');
        // $product = [
        //    'name' => 'Voiture Tesla',
        //     'price' => 5000,
        //     'lastUpdate' => strtotime('yesterday'),
        // ];
        // return $this->render('test.html.twig',[
        //     'product' => $product,
        //     'user' => $user,
        // ]);
   
        return $this->render('page1.html.twig');

        // if(true) {
            // return $this->redirect('https://google.fr');
            // return $this->redirectToRoute('blog', ['title' => 'je suis un param']);

        // }

        // $emailProvider = $this->getParameter('app.email_provider');
        //     dd($emailProvider);
        /* Generer des URL à partir de notre système de routing */

        // $url = $this->generateUrl('blog', ['title' => 'bar'], UrlGeneratorInterface::ABSOLUTE_PATH);
            // dd($url);
        // $viewContent = $this->renderView('base.html.twig');
        // dd($viewContent);

        /* Methode pour créer des exceptions */
        // throw $this->createNotFoundException('Produit n\'existe pas');

    }
    #[Route(path: 'about/list', name: 'about')]
    public function aboutList($name) {
        dd($name);
        return $this->render('base.html.twig');
    }
}
