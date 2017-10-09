<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*googlechrome");
    $this->setBrowserUrl("http://localhost/ClinicaActualizada");
  }

  public function testMyTestCase()
  {
    $this->open("/ClinicaActualizada/index.php");
    $this->type("name=mail", "admin");
    $this->type("name=password", "admin");
    $this->click("//input[@value='Iniciar Sesion']");
    $this->waitForPageToLoad("30000");
    $this->Pause("3000");
    $this->click("//li[4]/a/p");
    $this->waitForPageToLoad("30000");
    $this->click("link=Registrar Medico");
    $this->Pause("2000");
    $this->waitForPageToLoad("300000");
    $this->select("name=category_id", "label=Modulo 1");
    $this->type("id=name", "jonathan");
    $this->type("id=lastname", "castro");
    $this->type("id=address", "baca flor");
    $this->type("id=email", "");
    $this->type("id=phone", "555555");
    $this->click("css=button.btn.btn-primary");
    $this->waitForPageToLoad("5000");
  }
}
?>