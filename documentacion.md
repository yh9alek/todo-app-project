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

🔽

4.- Modelos y Renderizar Vistas

Dentro de la lógica de un controlador estan estas entidades.

Los Modelos representan las Entidades o Tablas de la base de datos (Ejem. Productos, Usuarios, etc.) y sus
propiedades son los campos de las mismas. Los Modelos ejecutan consultas CRUD a la bd.

Las Vistas se renderizan al final, despues de haber hecho la ejecución de lógica del backend.