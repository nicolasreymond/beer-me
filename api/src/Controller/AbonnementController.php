<?php


namespace App\Controller;

use Doctrine\ORM\Mapping\Entity;
use http\Client\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class AbonnementController
 * @package App\Controller
 */
class AbonnementController extends Controller{

  /**
   * @Route("/abonnements", methods={"POST","HEAD"}})
   * @param Request $request
   */
//    public function createAbonnement(Request $request){
//      $data = $request->getRequestMethod();
//      $abonnement = $this->get('serializer')
//        ->deserialize($data, 'App\Entity\Abonnement', 'json');
//
//      dump($abonnement); die;
//    }
}
