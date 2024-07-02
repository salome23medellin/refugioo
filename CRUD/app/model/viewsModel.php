<?php
	
	namespace app\model;

	class viewsModel{

	
		protected function obtenerVistasModelo($vista){

			$listaBlanca=["dashboard"];

			if(in_array($vista, $listaBlanca)){
				if(is_file("./app/view/content/".$vista."-view.php")){
					$contenido="./app/view/content/".$vista."-view.php";
				}else{
					$contenido="404";
				}
			}elseif($vista=="login" || $vista=="index"){
				$contenido="login";
			}else{
				$contenido="404";
			}
			return $contenido;
		}

	}