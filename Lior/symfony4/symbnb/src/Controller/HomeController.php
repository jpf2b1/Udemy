<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class HomeController extends Controller{

    /**
     * Montre la page qui dit bonjour
     * 
     * @Route("/hello/{prenom}/{age}", name="hello")
     * @Route("/salut", name="hello_base")
     * @Route("bonjour/{prenom}", name="hello_prenom")
     * 
     * @return void
     */
    public function hello($prenom="anonyme", $age=0){
        
        return new Response("Bonjour ".$prenom. " vous avez ". $age. " ans");

    }

    /**
     * @Route("/", name="homepage")
     * Montre la home page
     * 
     * * @return void
     */
    public function home(){

        $prenom = ["lior" => 11, "kevin" => 20, "Brian" => 18, "Natacha" => 14];

        return $this->render('home.html.twig',
        [
            'title' =>'Bonjour à tous',
            'name'  =>'jpf2b1',
            'age'   =>10,
            'tableau' => $prenom
        ]);
    }

    /**
     * Montre le tableau liste de nom
     * 
     * @Route("/liste", name="liste_name")
     *
     * @return void
     */
    public function listeNom(){
        return $this->render("liste.html.twig");
    }
}
