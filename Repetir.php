<?php

/**
 *  Test.
 */

 class Repetir {
     var $repeticiones = 0;

     public function __construct()
     {

     }


     public function setRepeticiones($repeticiones = 0)
     {
         $this->repeticiones = $repeticiones;
     }

     public function mostrar()
     {
         for ($i = 0; $i < $this->repeticiones; $i++) {
             echo str_repeat("*", $i) . $i . "<br>";
         }
     }
 }
