<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Entity\Produits;
class TestController extends Controller
{
    public function ajoutAction()
    {
        $em = $this->getDoctrine()->getManager();

        /*$produit = new Produits();
        $produit->setCategorie('haut');
        $produit->setDescription('une chemise');
        $produit->setDisponible('1');
        $produit->setImage('https://img2.seidensticker.fr/4937-product_zoom_default/chemise-droite-grise-col-semi-italien.jpg');
        $produit->setNom('Chemise');
        $produit->setPrix('29.90');
        $produit->setTva('19.6');

        $em->persist($produit);
        $em->flush();
*/
        $produits = $em->getRepository('EcommerceBundle:Produits')->findAll();
        return $this->render('EcommerceBundle:Default:test.html.twig', array('produits' => $produits ));
    }
    
}
