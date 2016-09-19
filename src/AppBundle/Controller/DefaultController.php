<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {
  /**
   * @Route("/", name="homepage")
   */
  public function indexAction(Request $request) {

    $query = $this->getDoctrine()->getEntityManager()->createQuery(
      'SELECT p, pc FROM AppBundle:PersonContact pc LEFT JOIN pc.person p'
    );

//    print_r($query->getResult()[0]->getPerson() );die();
    $contacts = array();
    foreach($query->getResult() as $contact) {
      $contacts[$contact->getPerson()->getName()][] = $contact;
    }

    return $this->render('default/index.html.twig', array(
      'contacts' => $contacts
    ));
  }
}
