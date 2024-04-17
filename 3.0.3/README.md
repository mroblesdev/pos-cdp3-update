# Versión 3.0.3

En la versión 3.0.3 se han realizado las siguientes correcciones para garantizar la compatibilidad con PHP 8.2:

- Se ha solucionado el mensaje de advertencia "Deprecate dynamic properties".
- Se ha abordado la función obsoleta `utf8_decode`.

Estas correcciones aseguran un funcionamiento sin problemas con PHP 8.2 y mejoran la estabilidad general del sistema.

## Creación de propiedades

Reemplazar el archivo [MiConfig.php](MiConfig.php) en la ubicación `app/Config/`

Reemplazar el archivo [BaseController.php](BaseController.php) en la ubicación `app/Controllers/`

## Reemplazar utf8_decode

A partir de PHP 8.2.0 las funciones `utf8_decode` y `utf8_encode` han quedado obsoletas y proximamente será eliminadas, por lo cual se deben remplazar con la función `mb_convert_encoding`.

Utiliza un editor de texto o una herramienta de búsqueda dentro de tu IDE para encontrar todas las instancias de la función `utf8_decode` principlamente en los controladores y en la plantillas de FPDF. Esto te ayudará a identificar dónde necesitas hacer los cambios.

Una vez que hayas identificado todas las instancias de `utf8_decode`, reemplázalas con la función `mb_convert_encoding`. La sintaxis para `mb_convert_encoding` es la siguiente:

`$nueva_cadena = mb_convert_encoding($cadena, 'ISO-8859-1', "UTF-8");`
