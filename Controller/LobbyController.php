<?php

namespace NEvil\FrontLobbyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class LobbyController extends Controller
{
    /**
     * @Route("/lobby", name="front_lobby")
     */
    public function lobbyAction(Request $request)
    {
        return new Response('yes');
    }
}