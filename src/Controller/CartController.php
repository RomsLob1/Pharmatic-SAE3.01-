<?php

namespace App\Controller;


use App\Repository\CartLineRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('IS_AUTHENTICATED_FULLY')]
class CartController extends AbstractController
{
    #[Route('/cart', name: 'app_cart_index', methods : ['GET'])]
    public function index(CartLineRepository $cartLineRepository): Response
    {
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
        $cartLines = $cartLineRepository->findByUser($user->getId());

        return $this->render('cart/index.html.twig', ['cartLines' => $cartLines]);
    }
}
