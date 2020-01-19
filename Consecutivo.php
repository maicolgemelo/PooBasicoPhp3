<?php

class Consecutivo{
    private $valornum;

    public function _construct(){

        $this->valornum = 1;
    }

    public function getValornum(){
        return $this->valornum;

    }

    public function setValornum($valor){
        $this->valornum = $valor;
    }

    public function sumaNumConse(){

        $a = 0;
        for($i = 1; $i <= $this->getValornum();$i++){
           echo $i . " ";
            $a = $a + $i;
            
           
           

           



           
        } 
        echo "<br>";
       


       

        echo "el resultado es ". $a;


    }
}




?>