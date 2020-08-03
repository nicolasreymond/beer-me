<?php


namespace App\Controller;

use Doctrine\ORM\Mapping\Entity;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\AnnotationsasRest;
use http\Client\Request;
use App\Entity\Abonnement;
use App\Form\AbonnementType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class AbonnementController
 * @package App\Controller
 * @Route("/api", name="api_")
 */
class AbonnementController extends Controller{

  /**
   * Create Abonnement
   * @Rest\Post("/abonnement")
   *
   * @return Response
   */
  public function createAbonnement(Request $request){
    $abonnement = new Abonnement();
    $form = $this->createForm(AbonnementType::class, $abonnement);
    $data = json_decode($request->getContent(), true);
    $form->submit($data);

    if ($form->isSubmitted() && $form->isValid()){
      $em = $this->getDoctrine()->getManager();
      $em->persist($abonnement);
      $em->flush();
    }

    return $this->handleView($this->view(['status'=>'ok'],Response::HTTP_CREATED));

  }
}
