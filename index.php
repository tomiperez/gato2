<?php

require_once 'Tablero.php';
require_once 'Jugador.php';
require_once 'Tateti.php';

$tateti = new Tateti('minerva', 'o', 'bettina', 'x', 3, 3,0);
$tateti->jugar(1,1);//o
$tateti->jugar(2,2);
$tateti->jugar(0,2);//o
$tateti->jugar(0,1);
$tateti->jugar(2,0);//o
$tateti->jugar(1,2);
$tateti->jugar(2,2);//o
$tateti->jugar(2,2);


//var_dump($tateti);
