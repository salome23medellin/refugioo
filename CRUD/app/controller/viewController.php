<?php

	namespace app\controller;
	use app\model\viewsModel;

	class viewController extends viewsModel {

		
		public function obtenerVistasControlador($vista){
			if($vista!="home"){
				$respuesta=$this->obtenerVistasModelo($vista);
			}else{
				$respuesta="login";
			}
			return $respuesta;
			}
		}
