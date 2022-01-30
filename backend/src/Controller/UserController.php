<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('api/users/', name: 'app_users')]
    public function index(UserRepository $userRepository): Response
    {
        $users = $userRepository->findAll();

        // J'initialise un tableau vide pour être sur qu'a l'appel de la route je n'ai pas de reliquat
        $datas = [];
        // Je boucle sur tous mes objets Users.
        foreach ($users as $key => $user) {
            $datas[$key]['id'] = $user->getId();
            $datas[$key]['prenom'] = $user->getFirstname();
            $datas[$key]['nom'] = $user->getLastname();
            $datas[$key]['pseudo'] = $user->getPseudo();
            $datas[$key]['adresse'] = $user->getAddress();
            $datas[$key]['code_postal'] = $user->getPostalCode();
            $datas[$key]['ville'] = $user->getCity();
            $datas[$key]['pays'] = $user->getCountry();
            $datas[$key]['email'] = $user->getEmail();
            $datas[$key]['roles'] = $user->getRoles();
            $datas[$key]['actif'] = $user->getIsActive();
            $datas[$key]['inscription'] = $user->getCreatedAt()->format('d/m/Y H:i');
        }

        // Je retourne le tableau de datas.
        return new JsonResponse($datas);
    }
}
