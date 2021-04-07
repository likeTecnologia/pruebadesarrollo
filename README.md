******************************************************************************************
**											**
**											**
**			IDNETWORKING.CO SAS						**
**											**
******************************************************************************************
*	Crear una base de datos con el script del archivo scriptBd
*	Configurar la conexión a esa base de datos en el archivo config.php
*	Usando el ejemplo del archivo index, crear un formulario en una pagina llamada datosusuario.php usando la librería de bootstrap con los campos de la tabla usuarios:
	-	idtipo (una lista/combo/select HTML que se obtiene de una consulta a la bd de la tabla tipos )
	-	identificación (campo text alfanumérico de máximo 10 dígitos)
	-	nombres (campo text alfanumérico de máximo 50 dígitos)
	-	apellidos (campo text alfanumérico de máximo 50 dígitos)
	-	teléfono (campo text alfanumérico de máximo 20 dígitos)
	-	dirección (campo text alfanumérico de máximo 100 dígitos)
	-	email (campo text alfanumérico de máximo 100 dígitos)
*	Se debe validar con una función de JavaScript que ningún campo quede vacío al momento de hacer el envió de los datos a una pagina llamada validardatos.php con el método POST
*	Hacer el insert a la tabla usuarios validando previamente con una función php que ningún campo obligatorio este vacío
*	la pagina validardatos.php debe responder en pantalla si la insert fue o no exitoso
*	crear una pagina consultar.php que se liste en una tabla con los datos de la tabla usuarios

*************************************************************************************************

la clase DataBase del archivo classConexion.php contiene la siguiente función/método :

*	fEjecutarSentenciaPDO: Ejecuta una sentencia SQL (select, update, insert o delete ) y recibe como parámetro un array con los siguientes valores
	-	sentenciaSql (obligatorio): cadena de texto que contiene la sentencia a ejecutar
	-	arrayParametros (opcional): array (no asociativo) de variables en caso de que la sentencia a ejecutar lo requiera
	-	debug (opcional): variable numérica con tres posibles valores: 
		0 (o nulo): No hace nada 
		1: Imprime en pantalla la consulta a ejecutar 
		2: Imprime en pantalla la consulta y detiene la ejecución del programa 
Esta función devuelve un array de respuesta con los siguientes valores	
	-	retornoLogico: booleano con dos posibles valores true o false, que indica si se realizo o no la sentencia
	-	retornoError: en caso de errores devuelve una cadena de texto con el detalle del error ocurrido
	-	recordSet: variable tipo recordset con la piscina de datos resultado de una consulta select
	-	numeroRegistros: variable numérica entero que contiene la cantidad de registros afectados por la sentencia
