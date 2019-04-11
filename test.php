<?php

namespace Tateti;

include '../vendor/autoload.php';


use PHPUnit\Framework\TestCase;
 
final class TatetiTest extends TestCase
{
  public function testCanBeCreatedFromValidEmailAddress()
  {
    
    $tateti = new Tateti('laura','o', 'carmen','x',3,3,0); 
    $tateti->jugar(1,2);
    $tateti->jugar(1,1);//o
    $tateti->jugar(2,2);
    $tateti->jugar(0,2);//o
    $tateti->jugar(0,1);
    $tateti->jugar(2,0);
    $elemento =  $tateti->ganador();
    $this->assertEquals(true, $elemento);
  }
