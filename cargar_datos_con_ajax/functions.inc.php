<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * 
 * @package: tutoriales2014/cargar_datos_con_ajax/
 * @author: Luis Fernando Cázares <luis.f.cazares@gmail.com>
 * @version Id: functions.inc.ph 2014-03-16 12:32 _CazaresLuis_ ;
 * @descripción: Funciones necesarias para la implemntación y ejecución del tutorial
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

// extraer de la base de datos la lista de funciones
function getListaFunciones($dbLink){
	$response = array();

	$consulta = "SELECT id_lista, lista_lenguaje, lista_funcion, lista_descripcion, lista_tips
				FROM funciones_lenguajes
				ORDER BY lista_lenguaje ASC, lista_funcion ASC";

	// Ejecutamos la cosnulta
	$respuesta = $dbLink -> query($consulta);

	if($respuesta -> num_rows != 0){
		while($registro = $respuesta -> fetch_array())
		$response [] = $registro;
	}

	return $response ;
}
?>