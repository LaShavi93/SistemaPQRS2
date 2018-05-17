<!--<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>-->
<h2 align="center">Sistema PQRS</h2>

<p align="center">
<!-- <a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p> -->

## Acerca de Sistema PQRS
Un sistema PQRS permite fácilmente que clientes o afiliados a una empresa puedan presentar preguntas, quejas, reclamos y sugerencias.

Un Sistema de Peticiones, Quejas, Reclamos y Sugerencias (PQRS) es una herramienta que permite a una organización, conocer las inquietudes y manifestaciones que tienen sus clientes o afiliados. De esta forma se pueden realizar estrategias que permitan ofrecer un mejor servicio a los clientes.

El proyecto se encuentra configurado con una empresa por defecto (LaShaviCorp) con una base de usuarios o clientes por defecto. El sistema recibe las solicitudes PQRS y de forma automática asigna a un usuario a dicha solicitud y enviá la información pertinente por correo electrónico al cliente. El cliente podra hacer seguimiento de los cambios en su solicitud.

## Usuarios
El sistema cuenta con 4 tipos de usuarios.

1. Administrador: Todos los privilegios.
User: admin@example.com
Pass: 123456

2. Gerente: Puede revisar datos y crear usuarios.
User: gerente@example.com
Pass: 123456

3. Parametrizador: Solo pede acceder al CRUD del sistema.
User: parametrizador@example.com
Pass: 123456

4. Funcionario: Solo puede gestionar los PQRS.
User: funcionario@example.com
Pass: 123456

Los Clientes o Afiliados no necesitan tener cuenta para iniciar sesión, solo deben ingresar su cedula y si esta registrada el sistema permitirá hacer la solicitud.
<!-- 5. Cliente/Afiliado: Solo puede crear solicitudes, recibir respuestas y replicar la respuesta.
User: cliente@example.com
Pass: 123456 -->

        

<!-- ## Instrucciones
1. Clonar el proyecto.
2. Composer install.
2. Crear Base de datos.
3. Configurar en el archivo .env las bases de datos.
4. Genenar "Aplication Key" 
5. Correr migraciones.
6. Corres seed.
-->

<!-- ## Objetivos
1. Crear una plataforma que permita la facil gestión de las solicitudes PQRS a una organización por parte de sus clientes.


## License -->
