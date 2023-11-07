<?php

    class MY_Controller extends CI_Controller{
        protected $datos = array();

        public function __construct(){
            parent::__construct();
            $datos['titulo'] = TITULO;
        }

        public function mostrar($vista="", $parametros=array()){
            $this->load->view("plantillas/cabecera", $this->datos);
            $this->load->view((($vista == "") ? "plantillas/cuerpo" : $vista), $this->datos);
            $this->load->view("plantillas/pie", $this->datos);
        }
    }

?>