**********************************************************************************************************
**																										**
**																										**
**										IDNETWORKING.CO SAS												**
**																										**
**********************************************************************************************************
* Crear una base de datos con el script del archivo scriptBd 
* Configurar la conexion a esa base de datos en el archivo config.php 
* Usando el ejemplo del archivo index, crear un formulario en una pagina llamada datosusuario.php usando la libreria de bootstrap con los campos de la tabla usuarios:
 	- idtipo (una lista/combo/select html que se obtiene de una consulta a la bd de la tabla tipos )
 	- identificacion (campo text alfanumerico de maximo 10 digitos)
 	- nombres (campo text alfanumerico de maximo 50 digitos)
 	- apellidos (campo text alfanumerico de maximo 50 digitos)
 	- telefono (campo text alfanumerico de maximo 20 digitos)
 	- direccion (campo text alfanumerico de maximo 100 digitos)
 	- email  (campo text alfanumerico de maximo 100 digitos)
* Se debe validar con una funcion de javascript que ningun campo quede vacio al momento de hacer el envio de los datos a una pagina llamada validardatos.php con el metodo POST
* Hacer el insert a la tabla usuarios validando previamente con una funcion php que ningun campo obligatorio este vacio 
* la pagina validardatos.php debe responder en pantalla si la insert fue o no exitoso
* crear una pagina consultar.php que se liste en una tabla con los datos de la tabla usuarios 

*********************************************************************************************************
la clase DataBase del archivo classConexion.php contiene la siguiente funcion/metodo :

* fEjecutarSentenciaPDO: Ejecuta una sentencia sql (select, update, insert o delete ) y recibe como parametro un array con los siguientes valores 
	- sentenciaSql (obligatorio): cadena de texto que contiene la sentencia a ejecutar 
	- arrayParametros (opcional): array (no asociativo) de variables en caso de que la sentencia a ejecutar lo requira 
	- debug (opcional): variable numerica con tres posibles valores:
																	0 (o nulo): No hace nada 
																	1: Imprime en pantalla la consulta a ejecutar 
																	2: Imprime en pantalla la consulta y detiene la ejecucion del programa 
	esta funcion devuelve un array de respuesta con los siguientes valores
	- retornoLogico: boleano con dos posibles valores true o false, que indica si se realizo o no la sentencia 
	- retornoError: en caso de errores devuelve una cadena de texto con el detalle del error ocurrido 
	- recordSet: variable tipo recordset con la piscina de datos resultado de una consulta select 
	- numeroRegistros: variable numerica entero que contiene la cantidad de registros afectados por la sentencia 



