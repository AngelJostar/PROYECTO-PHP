<?php

    Class Producto{
        public $strDescripcion;
        public $fltPrecio;
        protected $intStrockMinimo = 10;
        protected $strStatus = "Activo";

        public function __construct(string $Descripcion, float $precio)
        {
            $this->strDescripcion = $Descripcion;
            $this->fltPrecio = $precio;
        }

        public function getInfoProducto(){
            $arrProducto = array('producto' => $this->strDescripcion,
                                'precio' => $this->fltPrecio,
                                'stok_minimo' => $this->intStrockMinimo,
                                'estado' => $this->strStatus
            );
            return $arrProducto;
        }
    }



?>