<?php

namespace Ymc\HowTo\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/ymc/howto")
     */
    public function indexAction()
    {
        return $this->render('YmcHowToCommonBundle:Default:index.html.twig');
    }
}
