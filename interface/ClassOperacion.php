<?php

    require_once("Operacion.php");
    require_once("operacionesBasicas.php");

    Class calcular implements Operacion, Operacion_basicas{

        public function raiCuadrada(float $numero):float{

            $total = sqrt($numero);
            return $total;
        }

        public function potencia(int $numero, int $potencia):int{
            $total = pow($numero, $potencia);
            return $total;
        }

        public function op_basicas(float $cant1, float $cant2, string $operacion){

            if($operacion == "*"){
                $result = $cant1 = $cant2;
            }else if ($operacion == "-"){
                $result = $cant1 - $cant2;
            }else if ($operacion == "*"){
                $result = $cant1 * $cant2;
            }else if ($operacion == "/"){
                $result = $cant1 / $cant2;
            }else{
                $result = "operacion no válida";
            }
            return $result;

        }
    }


?>