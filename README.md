# Bsale Back End

Esta API consiste en el retorno de productos ya sea en general o filtrados por categoría.

## Contenido  
Este proyecto cuenta con 1 sola rama en la cual, se encuentra el back-end de la aplicación.  

## Funcionalidad

<li> Retornar todos los productos
<li> Retornar todas las categorias
<li> Retornar productos según categoría
<li> Retornar productos por nombre 

## Tecnologías

<li> Vanilla PHP

## Demo

Si quieres ver una demo del proyecto, puedes acceder al deploy en el siguiente enlace: <a href="https://ccartes.000webhostapp.com/products.php/">Bsale API </a>

## Cómo clonar

Dado que la aplicación no cuenta con ningún requisito en especifico, para clonarla solo basta con ejecutar el comando: 
~~~ 
git clone https://github.com/CCARTES4/test-Bsale.git
~~~

## Instalación 

Necesitas correrlo en un servidor, ya sea un servidor local(por ej: XAMPP) o un servidor web.

## Autenticación 

La API no cuenta con sistema de autenticación, por lo tanto, podrás realizar las consultas sin necesidad de un API KEY.

## Endpoints 

Esta API cuenta con 4 endpoints dentro de los cuales podremos enviar una petición GET para obtener todos los productos, productos filtrados según categoría y productos filtrados según nombre.

### Endpoint General
El siguiente endpoint nos permitirá retornar todos los productos existentes en la base de datos.
~~~ 
https://ccartes.000webhostapp.com/products.php
~~~

## Respuesta

Si no hemos enviado ningún parámetro, nos retornará lo siguiente

~~~ 
{
    id: "5",
    name: "ENERGETICA MR BIG",
    url_image: "https://dojiw2m9tvv09.cloudfront.net/11132/product/misterbig3308256.jpg",
    price: "1490",
    discount: "20",
    category: "1"
},
{
    id: "6",
    name: "ENERGETICA RED BULL",
    url_image: "https://dojiw2m9tvv09.cloudfront.net/11132/product/redbull8381.jpg",
    price: "1490",
    discount: "0",
    category: "1"
},
~~~

### Endpoint categorias (retornar todas las categorias existentes)
Si le indicamos a la API que necesitamos todas las categorías, esta nos retornará su id y el nombre de esta.
~~~ 
https://ccartes.000webhostapp.com/categories.php?categorias
~~~

La API nos retornara algo como lo siguiente: 

~~~ 
{
    "id": "1",
    "name": "bebida energetica"
},
{
    "id": "2",
    "name": "pisco"
},
{
    "id": "3",
    "name": "ron"
},
~~~

### Endpoint Producto - categoria (Buscar productos según categoría)
Si agregamos el parámetro "categoria (INT)", obtendremos todos los productos con la categoría que hemos enviado
~~~ 
https://ccartes.000webhostapp.com/products.php?categoria=(categoria)
~~~

La API nos retornara algo como lo siguiente

~~~ 
{
    0: "8",
    1: "PISCO ALTO DEL CARMEN 35º",
    2: "https://dojiw2m9tvv09.cloudfront.net/11132/product/alto8532.jpg",
    3: "7990",
    4: "10",
    5: "2",
    id: "8",
    name: "PISCO ALTO DEL CARMEN 35º",
    url_image: "https://dojiw2m9tvv09.cloudfront.net/11132/product/alto8532.jpg",
    price: "7990",
    discount: "10",
    category: "2"
},
{
    0: "9",
    1: "PISCO ALTO DEL CARMEN 40º ",
    2: "https://dojiw2m9tvv09.cloudfront.net/11132/product/alto408581.jpg",
    3: "5990",
    4: "0",
    5: "2",
    id: "9",
    name: "PISCO ALTO DEL CARMEN 40º ",
    url_image: "https://dojiw2m9tvv09.cloudfront.net/11132/product/alto408581.jpg",
    price: "5990",
    discount: "0",
    category: "2"
},
~~~

### Endpoint nombre (buscar producto según nombre)
Si agregamos el parámetro "nombre (string)", obtendremos todos los productos en los cuales contengan el criterio de búsqueda que hemos enviado
~~~ 
https://ccartes.000webhostapp.com/products.php?nombre=(nombre)
~~~

En este ejemplo buscaremos un producto que coincida con el nombre "coca"  
La API nos retornara algo como lo siguiente: 

~~~ 
{
    id: "37",
    name: "COCA COLA ZERO DESECHABLE",
    url_image: "https://dojiw2m9tvv09.cloudfront.net/11132/product/cocazero9766.jpg",
    price: "1490",
    discount: "0",
    category: "4"
},
{
    id: "57",
    name: "COCA COLA NORMAL DESECHABLE 1500cc",
    url_image: null,
    price: "1500",
    discount: "0",
    category: "4"
},
{
    id: "58",
    name: "COCA COLA LIGHT DESECHABLE",
    url_image: null,
    price: "1500",
    discount: "0",
    category: "4"
}
~~~


## Autor

<a href="https://github.com/CCARTES4"> CCARTES4</a>