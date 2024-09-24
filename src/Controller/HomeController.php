<?php

namespace App\Controller;

use PhpParser\Node\Expr\Cast\Object_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $names = ["jean luc", "Julien", "Maximilien", "tao"];
        $etudiants = [

            (object)[
                'prenom' => 'Alice',
                'nom' => 'Wonder',
                'age' => '20',
                'email' => 'alice@hole.com',
            ],

            (object)[
                'prenom' => 'Alice',
                'nom' => 'Wonder',
                'age' => '20',
                'email' => 'alice@hole.com',
            ]



        ];
        return $this->render(
            'home/index.html.twig',
            [
                'controller_name' => 'PageController',
                'name' => 'Azuko ',
                'nom' => $names,
                'etudiant' => $etudiants,
            ]
        );
    }



    #[Route('/post/{id}', name: 'app_post')]
    public function post($id)
    {
        dump($id);
        return $this->render('home/post.html.twig');
    }


    #[Route('/redirect', name: 'app_redirect')]
    public function redirection()
    {
        return $this->redirectToRoute('app_home');
    }
}
