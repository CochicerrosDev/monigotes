<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Player;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $em = $this->get('doctrine.orm.entity_manager');

        $repository_player = $em->getRepository('AppBundle:Player');
        $player = $repository_player->find(1);

        return $this->render('default/index.html.twig', array(
            'player' => $player
        ));
    }
}
