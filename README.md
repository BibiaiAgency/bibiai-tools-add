# Bibiai Tools Add

### The files needed to create a plugin for Bibiai Tools.

Crea un plugin para Bibiai Tools añadiendo la fuente necesaria y creando el menú de Bibiai Tools si no existe, añadiendo tu plugin como una subpestaña. Solo debes añadir el contenido y justo después de tu comentario en el archivo principal añadir la siguiente linea:

```
require_once plugin_dir_path(__FILE__) . 'bt-main.php';
```
