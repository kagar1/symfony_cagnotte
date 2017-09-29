<?php

namespace Core\CagnotteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CoreCagnotteBundle:Default:index.html.twig');
    }
}
