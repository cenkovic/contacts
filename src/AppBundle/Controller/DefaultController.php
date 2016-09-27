<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Person;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {
  /**
   * @Route("/", name="homepage")
   */
  public function indexAction(Request $request) {

    $query = $this->getDoctrine()->getManager()->createQuery(
      'SELECT p, pc FROM AppBundle:PersonContact pc LEFT JOIN pc.person p'
    );

    $persons = array();
    foreach($query->getResult() as $contact) {
      /** @var Person $person */
      $person = $contact->getPerson();
      $persons[$person->getId()]['person'] = $person;
      $persons[$person->getId()]['contacts'][] = $contact;
    }

    return $this->render('default/index.html.twig', array(
      'persons' => $persons
    ));
  }
}
