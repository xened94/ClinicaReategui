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
    $this->open("/ClinicaActualizada/index.php?view=home");
    $this->click("//li[3]/a/p");
    $this->waitForPageToLoad("30000");
    $this->click("link=Registrar Paciente");
    $this->waitForPageToLoad("30000");
    $this->type("id=name", "jonathan");
    $this->type("id=lastname", "castro");
    $this->click("id=inlineCheckbox1");
    $this->type("id=address1", "asd");
    $this->type("id=phone1", "asd");
    $this->type("id=sick", "asd");
    $this->click("css=button.btn.btn-primary");
  }
}
?>