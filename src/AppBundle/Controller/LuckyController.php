<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;


/**
 * LuckyController
 *
 * @uses Controller
 * @author Marian Stanchuk <markstanchuk@gmail.com>
 */
class LuckyController extends Controller
{
    /**
     * numberAction
     *
     * @Route("/lucky/number/{count}", name="number")
     * @param mixed $count
     * @access public
     * @return void
     */
    public function numberAction($count)
    {
        $numbers = array();
        for ($i=0; $i < $count; $i++) {
            $numbers[] = rand(0, 100);
        }

        $numberList = implode(', ', $numbers);

        $html = $this->container->get('templating')->render(
            'lucky/number.html.twig',
            array('luckyNumberList' => $numberList)
        );

        return new Response($html);
    }
    /**
     * apiNumberAction
     *
     * @Route("api/lucky/number")
     * @access public
     * @return Response obj
     */
    public function apiNumberAction()
    {
        $data = array(
            'lucky_number' => rand(0, 100),
        );

        return new JsonResponse($data);
    }
}
