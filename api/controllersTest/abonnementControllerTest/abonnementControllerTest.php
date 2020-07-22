<?php

namespace abonnementControllerTest;

use abonnementController;

class abonnementControllerTest extends \PHPUnit_Framework_TestCase
{

  public function testCreateAbonnement()
  {
    $this->assertInstanceOf('int', abonnementController::createAbonnement( "test", "test", 12, 13, 32));
  }

  public function testGetAbonnementById()
  {
    $this->assertInstanceOf('int', abonnementController::getAbonnementById(1));
  }

  public function testGetAllAbonnements()
  {
    abonnementController::getAllAbonnements();
  }
}
