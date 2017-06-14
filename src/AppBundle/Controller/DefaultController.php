<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Color;
use AppBundle\Entity\Product;
use AppBundle\Entity\QuantityUnit;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * Lists all product entities.
     *
     * @Route("/", name="homepage")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $products = $em->getRepository('AppBundle:Product')->findAll();

        return $this->render('product/index.html.twig', array(
            'products' => $products,
        ));
    }

    /**
     * @Route("/product_search")
     * @Method("GET")
     */
    public function searchProductAction(Request $request)
    {
        $q = $request->query->get('term');
        $results = $this->getDoctrine()->getRepository('AppBundle:Product')->findLikeName($q);

        return $this->render('default/product_search.html.twig', ['results' => $results]);
    }
}
