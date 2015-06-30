<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * DefaultController 
 *
 * @uses Controller
 * @author Marian Stanchuk <markstanchuk@gmail.com>
 */
class DefaultController extends Controller
{
    /**
     * indexAction
     *
     * @Route("/app/example", name="homepage")
     * @access public
     * @return void
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * showAction
     *
     * @param string $value
     * @access public
     * @return void
     */
    public function showAction($value='')
    {
        return $this->render('default/index.html.twig');
    }
}
