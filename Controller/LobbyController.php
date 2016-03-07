<?php

namespace NEvil\FrontLobbyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class LobbyController extends Controller
{
    /**
     * @Route("/lobby", name="front_lobby")
     */
    public function lobbyAction(Request $request)
    {
        return $this->render('base.html.twig');
    }

    /**
     * @Route("/getLobbyList", name="front_lobby_list")
     */
    public function getLobbyListAction(Request $request)
    {
        return new JsonResponse(array(
            array(
                'name' => 'test lobby',
                'created' => new \DateTime(),
                'players' => 4,
                'size' => 'big',
            ),
            array(
                'name' => 'test lobby2',
                'created' => new \DateTime(),
                'players' => 2,
                'size' => 'small',
            ),
        ));
    }

    public function getLobbyService()
    {
        $this->container->get('');
    }
}