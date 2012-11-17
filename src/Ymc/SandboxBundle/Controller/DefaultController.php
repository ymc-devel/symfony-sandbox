<?php

namespace Ymc\SandboxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        return $this->sandboxAction();
    }

    /**
     * @Route("/ymc/sandbox")
     * @Template()
     */
    public function sandboxAction()
    {
        return $this->render('YmcSandboxBundle:Default:index.html.twig');
    }
}
