<?php

/* @var $this yii\web\View */
$this->registerJsFile('@web/js/calendario.js');
$this->registerJsFile('@web/js/calendario2.js');
$this->registerCssFile('@web/css/calendario.css');
use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php $this->registerJs("
    jQuery(function($){
    
		 $(document).ready(function(e){
		    alert('s');
		  });

		  

    });");
?>

<div>
  
   <h1>Diseño</h1>
    <p>
    
        1.­ Si usted estuviera resolviendo el problema del colegio con programación orientada a objetos, defina que clases usaría, métodos y las variables de estas clases. Puede utilizar el lenguaje que más le acomode o bien pseudos código. <br/><br/>
         
        R="Una vez analizado el todo el proyecto, construyo la BD con sus respectivas tablas: Ej: Profesor, Cursos, Notas, Horarios, Matriculas, Asistencia. Estas tablas definidas serian mis modelos en los cuales trabajaria. Y apartir de alli prodria tener determinas funciones que me calculen por ejemplo: Promedio general del curso, promedio de un alumnos." 
        <br/><br/>

        2.­ Diseñe un maz de cartas (orientado a objetos) con propiedades y métodos básicos que considere para ser utilizado en distintas aplicaciones que utilicen cartas. <br/>

        3. Diseño código frontend
        <pre>
              <code>

                          var citas = {

                          lunes: [

                          {nombre: 'Daniel', hora_inicio: '08:00', hora_termino: '09:00'},

                          {nombre: 'Daniel', hora_inicio: '09:30', hora_termino: '11:00'},

                          {nombre: 'Daniel', hora_inicio: '15:00', hora_termino: '16:00'},

                          {nombre: 'Daniel', hora_inicio: '17:00', hora_termino: '19:30'}

                          ],

                          martes: [

                          {nombre: 'Daniel', hora_inicio: '08:00', hora_termino: '09:00'},

                          {nombre: 'Daniel', hora_inicio: '11:30', hora_termino: '12:00'},

                          {nombre: 'Daniel', hora_inicio: '15:00', hora_termino: '16:00'},

                          {nombre: 'Daniel', hora_inicio: '17:00', hora_termino: '19:30'}

                          ],

                          miercoles: [

                          {nombre: 'Daniel', hora_inicio: '08:00', hora_termino: '09:00'},

                          {nombre: 'Daniel', hora_inicio: '10:30', hora_termino: '12:00'},

                          {nombre: 'Daniel', hora_inicio: '15:00', hora_termino: '16:00'},

                          {nombre: 'Daniel', hora_inicio: '17:00', hora_termino: '19:30'}

                          ],

                          jueves: [

                          {nombre: 'Daniel', hora_inicio: '08:00', hora_termino: '09:00'},

                          {nombre: 'Daniel', hora_inicio: '09:30', hora_termino: '12:00'},

                          {nombre: 'Daniel', hora_inicio: '15:00', hora_termino: '16:00'},

                          {nombre: 'Daniel', hora_inicio: '17:00', hora_termino: '19:30'}

                          ],

                          viernes: [

                          {nombre: 'Daniel', hora_inicio: '08:00', hora_termino: '09:00'},

                          {nombre: 'Daniel', hora_inicio: '09:30', hora_termino: '12:00'},

                          {nombre: 'Daniel', hora_inicio: '15:00', hora_termino: '16:00'},

                          {nombre: 'Daniel', hora_inicio: '17:00', hora_termino: '19:30'}

                          ],

                          }
               </code>
          </pre>
     </p>
</div>

<body>
  
  <h1 class="title title__heading">Calendar Test</h1>
  
  <!-- Calendar -->
  <div class="calendar calendar__wrapper">

    <div id="hours-left" class="calendar__col calendar__col--hours"></div>

    <div id="col-lunes" class="calendar__col"></div>
    <div id="col-martes" class="calendar__col"></div>
    <div id="col-miercoles" class="calendar__col"></div>
    <div id="col-jueves" class="calendar__col"></div>
    <div id="col-viernes" class="calendar__col"></div>
 

    <div id="hours-right" class="calendar__col calendar__col--hours"></div>

    <div style="clear:both"></div>

  </div>

</body>


