<?php 
include_once('class/classConexion.php');//libreria de conexion
$objetoBd=new DataBase();//instanciando la bd
//armando la variable html con el contenido de la tabla 
$html="<div class='table-responsive'>
    		<table border='1' class='table table-bordered table-hover table-condensed'>
          <thead>
            <tr class='danger' align='center'>
              <td>Idtipo</td>
              <td>Tipo</td>
            </tr>
          </thead>
          <tbody>";

$sentenciaSql="SELECT idtipo,tipo FROM tipos WHERE idestado=? ORDER BY tipo ";//variable con la consulta/sentencia a la bd
$arrayParametros=array(1);//pasametros el parametro 1=activo para  que se listen solo estos registros con esta conexion
$arrayDatosSentencia = array('sentenciaSql'=>$sentenciaSql,'arrayParametros'=>$arrayParametros,'debug'=>0);//se arma la variable array con los parametros para la consulta pdo
$arrayRetorno = $objetoBd->fEjecutarSentenciaPDO($arrayDatosSentencia);//se envia la consulta a la funcion que la ejecuta y devuelve un array de respuesta
$retornoLogico = $arrayRetorno['retornoLogico'];//respuesta logica de la funcion (true/false) confirmando el estado de la ejecucion de la consulta 
if ($retornoLogico) {//validamos si la respuesta fue true 
  $numeroRegistros = $arrayRetorno['numeroRegistros'];//obtenemos el numero de registros afectados por la consulta 
  if ($numeroRegistros > 0) {//validando que la consulta haya traido registros
    $arrayData = $arrayRetorno['arrayData'];//obtenemos el array de datos 
    foreach ($arrayData as $llaveDato => $valorDato) {//recorremos el array de datos
      	$idTipo = $valorDato['idtipo'];//obtenemos la variable idtipo desde el array de resultado de datos 
      	$tipo = $valorDato['tipo'];
    	  $html.="<tr>
    				        <td>$idTipo</td>
    				        <td>$tipo</td>
            			</tr>";
    }
  }else{
  	$html.="<tr><td colspan='2'>No hay registros para esta consulta</td></tr>";
  }
}else{
	echo  "Error: ".$arrayRetorno['retornoError']; 
}
$html.="</tbody>
		<tfoot><tr><td colspan='2'>$numeroRegistros registros</td></tr></tfoot>
	  </table>
	</div>";
//se imprime en pantalla la variable html 
echo $html;