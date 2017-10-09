<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*googlechrome");
    $this->setBrowserUrl("http://localhost:8080/");
  }

  public function testMyTestCase()
  {
    $this->open("/ClinicaActualizada/index.php");
    $this->type("name=mail", "admin");
    $this->type("name=password", "admin");
    $this->click("//input[@value='Iniciar Sesion']");
    $this->pause("2000");
    $this->waitForPageToLoad("30000");
    $this->click("//li[4]/a/p");
    $this->pause("2000");
    $this->waitForPageToLoad("30000");
    $this->click("link=Registrar Medico");
    $this->waitForPageToLoad("30000");
    $this->pause("2000");
    $this->select("name=category_id", "label=-- SELECCIONE --");
    $this->type("id=name", "");
    $this->type("id=lastname", "");
    $this->type("id=address", "");
    $this->type("id=email", "");
    $this->type("id=phone", "");
    $this->click("css=button.btn.btn-primary");
    $this->pause("2000");
    $this->waitForPageToLoad("3000");
  }
}
?>