<?php

class Tablero
{
    private $tablero = [];

    public function __construct($x, $y)
    {
        $array = array();
        $columna = $x - 1;
        $y = $y - 1;
        $fila = array();

        for($i = 0; $i <= $y ; $i++){
            $fila[] = '-';
        }

        for($i= 0; $i <= $columna; $i++){
          $array[]= $fila;
        }
        $this->tablero = $array;
    }

    public function marcar($x, $y, $marca)
    {
            $this->tablero[$x][$y]= $marca;
    }

    public function damePosicion($x, $y)
    {
        return  $this->tablero[$x][$y];
    }

    public function mostrar()
    {
        foreach($this->tablero as $value){
            echo $value[0];
            echo $value[1];
            echo $value[2];
            echo "\n";
        }
    }

    public function lleno()
    {
        foreach($this->tablero as $value){
            foreach($value as $value1){
                if($value1 == '-'){
                    return false;
                }
            }
        }
        echo 'El tablero esta lleno' . "\n";
        return true;
    }
}
