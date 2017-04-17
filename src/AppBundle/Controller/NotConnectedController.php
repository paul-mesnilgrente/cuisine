<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class NotConnectedController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('not_connected/index.html.twig');
    }

    /**
     * @Route("/project/the-project", name="the_project")
     */
    public function theProjectAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('not_connected/the_project.html.twig');
    }

    /**
     * @Route("/project/freeProject", name="free_project")
     */
    public function freeProjectAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('not_connected/free_project.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('not_connected/contact.html.twig');
    }
}
