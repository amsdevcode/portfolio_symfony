<?php

namespace App\Controller;

use App\Repository\SkillRepository;
use App\Repository\ProjetRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(ProjetRepository $projetRepository, SkillRepository $skillRepository): Response
    {
        $projets = $projetRepository->findAll();
        $skills = $skillRepository->findAll();

        return $this->render('home/index.html.twig', [
            'projets' => $projets,
            'skills' => $skills,
        ]);
    }
}
