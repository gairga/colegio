<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1>MODELO DE DATOS</h1>

    <p>
        
1.­ Un colegio necesita un sistema para administrar sus cursos. El sistema tiene que suportar que se le ingresen varios cursos. Cada curso tendrá un profesor a cargo y una serie de alumnos inscritos. Cada profesor, así como cada alumno puede estar en más de un curso. Además cada curso tendrá una cantidad no determinada de pruebas, y el sistema debe permitir ingresar la nota para cada alumno en cada prueba. Todas las
pruebas valen lo mismo.

    </p>

    <pre>
        <a href="#">
             <img src="imagenes/1.png" class="thumbnail img-responsive">
        </a>

    </pre>

    <p>
        2.­ Escriba un Query que entregue la lista de alumnos para el curso “programación”.
    </p>

    <pre>
        <a href="#">
             <img src="imagenes/2.png" class="thumbnail img-responsive">
        </a>
    </pre>

    <p>
        3.­ Escriba un Query que calcule el promedio de notas de un alumno en un curso.
    </p>

    <pre>
        <a href="#">
             <img src="imagenes/3.png" class="thumbnail img-responsive">
        </a>
    </pre>

    <p>
        4.­ Escriba una Query que entregue a los alumnos y el promedio que tiene en cada ramo.
    </p>

    <pre>
        <a href="#">
             <img src="imagenes/4.png" class="thumbnail img-responsive">
        </a>
    </pre>
   <p>
        5.­Escriba una Query que liste a todos los alumnos con más de un ramo con promedio rojo.
    </p>
    <p>
    <pre>
      <a href="#">
             <img src="imagenes/5.png" class="thumbnail img-responsive">
        </a>
    </pre>    
    </p>

    <p>
    6.­ Se tiene una tabla con información de jugadores de tenis: PLAYERS(Nombre, Pais, Ranking). Suponga que Ranking es un número de 1 a 100 que es distinto para cada jugador. Si la tabla en un momento dado tiene solo 20 tuplas, indique cuantas tuplas tiene la tabla que resulta de la siguiente consulta:<br/>
        <pre>
           <a href="#">
             <img src="imagenes/duplas.png" class="thumbnail img-responsive">
        </a>
        </pre><br/>    
            a) 400 <br/>
            b) 190 (**)<br/> ​Pues consulto la misma tabla y por ende trae mas registros....​
            c) 20 <br/>
            d) imposible saberlo <br/>
    </p>
    <a href="#">
             <img src="imagenes/duplas2.png" class="thumbnail img-responsive">
    </a>
    
    <h1>Diseño</h1>
    <p>
    
        1.­ Si usted estuviera resolviendo el problema del colegio con programación orientada a objetos, defina que clases usaría, métodos y las variables de estas clases. Puede utilizar el lenguaje que más le acomode o bien pseudos código.

        <p>
            Una vez analizado el todo el proyecto, construyo la BD con sus respectivas tablas: Ej: Profesor, Cursos, Notas, Horarios, Matriculas, Asistencia. 

            Estas tablas definidas serian mis modelos en los cuales trabajaria. Y apartir de alli prodria tener determinas funciones que me calculen por ejemplo: Promedio general del curso, promedio de un alumnos. 
        </p>
    </p>    
        2.­ Diseñe un mazo de cartas (orientado a objetos) con propiedades y métodos básicos que considere para ser utilizado en distintas aplicaciones que utilicen cartas.
    </p>
</div>
