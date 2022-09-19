<?php

class Calculadora{
    

    public function Subtracao($numero1, $numero2){
        $total=0;
        if($numero1>$numero2){
            $total = $numero1 - $numero2;
        echo nl2br($numero1." - ".$numero2." = ".$total."\n");
        }else{
             $total = $numero2 - $numero1;
        echo nl2br($numero2." - ".$numero1." = ".$total."\n");
        };
    }
    public function Soma($numero1, $numero2){
        $total=0;
        $total = $numero1 + $numero2;
        echo nl2br($numero1." + ".$numero2." = ".$total."\n");
    }
    public function Multiplicacao($numero1, $numero2){
        $total=0;
            $total = $numero1 * $numero2;
        echo nl2br($numero1." x ".$numero2." = ".$total."\n");
    }
    public function Divisao($numero1, $numero2){
        $total=0;
        if($numero1>$numero2){
            $total = $numero1 / $numero2;
        echo nl2br($numero1." / ".$numero2." = ".$total."\n");
        }else{
             $total = $numero2 / $numero1;
        echo nl2br($numero2." / ".$numero1." = ".$total."\n");
        };
    }
}

$calculo1 = new calculadora();
$calculo1 -> Subtracao(110,10);
$calculo1 -> Soma(110,10);
$calculo1 -> Divisao(110,10);
$calculo1 -> Multiplicacao(110,10);

