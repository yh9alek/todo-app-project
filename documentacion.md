# Arquitectura backend para proyectos MVC con PHP Nativo

Flujo de trabajo: 🔄

    index.php -> Router -> Controlador -> Lógica de Modelos y renderizado de Vistas, etc.
------------------------------------------------------------------------


1.- index.php

Punto de entrada de todo el servidor

🔽

2.- Router

El Router cacha y valida la petición que hace el usuario hacia el servidor (Ejem. dominio/MIRUTA).
Si esa ruta se encuentra definida por el programador, el router manda a llamar al controlador
que corresponda con la ruta solicitada.

🔽

3.- Controlador

Conocido como el chambeador 💪, es quien se encarga de ejecutar lógica del lado del servidor con
base en la petición que el usuario realizó en el frontend (una operación CRUD, una petición de un recurso, etc.)

Lógica del Controlador:

    - Crear el estado del fronted (Datos a renderizar)

    - Ejecutar lógica GET o POST

    - Renderizar el frontend

🔽

4.- Modelos, Renderizar Vistas y lógica de Helpers

Dentro de la lógica de un controlador estan estas entidades.

Los Modelos representan las Entidades o Tablas de la base de datos (Ejem. Productos, Usuarios, etc.) y sus
propiedades son los campos de las mismas. Los Modelos ejecutan consultas CRUD a la bd.

Las Vistas se renderizan al final, despues de haber hecho la ejecución de lógica del backend.

------------------------------------------------------------------------


HELPERS (Clases de utilidad para realizar acciones específicas)

1.- Asset

Clase para importar dinámicamente recursos estáticos dependiendo del módulo renderizado (css, js, etc.)
Los assets tienen el mismo nombre de los módulos para así, asegurar su importación dinámica.

2.- View

Clase para manejar la lógica de renderizado de vistas

------------------------------------------------------------------------

Manejo de plantillas o templates para reutilizar un mismo HTML.

Los archivos que inician con '_' al inicio del nombre son HTML que se va a reutilizar en muchos
casos (HEADER, FOOTER, Importación de estilos, cdns, dependencias y esas cosas) Es toda la estructura
en general de un HTML para varios módulos (Ejem. _layout.php)

Los archivos que no inician con el caracter antes mencionado y que se encuentran dentro de la carpeta
modules, son eso, módulos y estos son los que van adentro del contenido de un templeate (Ejem. modulo.php)
De este modo, al renderizar vistas estaremos viendo el mismo template y solo cambiando su contenido.

La clase o helper View es quien hace el trabajo de tomar el template correspondiente y el módulo a
renderizar. Recibe datos de los modelos y crea variables de uso para representar el estado de la vista.

Ejemplos:

    $productos => [...productos] 
    Son los productos que se obtuvieron de la db, renderizamos esta información en el frontend.
    
    $errores   => [...errores_obtenidos]
    Errores que querramos renderizar a modo de mensajes o algo similar.

En fín, View renderiza contenido y estado obtenido por el backend 👍
