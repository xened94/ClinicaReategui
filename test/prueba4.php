<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://localhost/ClinicaActualizada");
  }

  public function testMyTestCase()
  {
    $this->open("/ClinicaActualizada/index.php");
    $this->type("name=mail", "admin");
    $this->type("name=password", "admin");
    $this->click("//input[@value='Iniciar Sesion']");
    $this->waitForPageToLoad("30000");
    $this->click("link=Downloads - Selenium");
    $this->waitForPageToLoad("30000");
  }
}
?>