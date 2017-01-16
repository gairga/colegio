/**
 * Init the calendar with dummy datas
 */
(function() {


  var appointments = {

    lunes: [
      {nombre: 'Daniel', hora_inicio: '08:00', hora_fin: '09:00'},
      {nombre: 'Daniel', hora_inicio: '08:00', hora_fin: '11:00'},
      {nombre: 'Daniel', hora_inicio: '08:00', hora_fin: '16:00'},
      {nombre: 'Daniel', hora_inicio: '08:00', hora_fin: '19:30'}
    ], 

    martes: [
      {nombre: 'Daniel', hora_inicio: '08:00', hora_fin: '09:00'},
      {nombre: 'Daniel', hora_inicio: '08:00', hora_fin: '11:00'},
      {nombre: 'Daniel', hora_inicio: '08:00', hora_fin: '16:00'},
      {nombre: 'Daniel', hora_inicio: '08:00', hora_fin: '19:30'}
    ],

    miercoles: [
      {nombre: 'Daniel', hora_inicio: '08:00', hora_fin: '09:00'},
      {nombre: 'Daniel', hora_inicio: '08:00', hora_fin: '11:00'},
      {nombre: 'Daniel', hora_inicio: '08:00', hora_fin: '16:00'},
      {nombre: 'Daniel', hora_inicio: '08:00', hora_fin: '19:30'}
    ],

    jueves: [
      {nombre: 'Daniel', hora_inicio: '08:00', hora_fin: '09:00'},
      {nombre: 'Daniel', hora_inicio: '08:00', hora_fin: '11:00'},
      {nombre: 'Daniel', hora_inicio: '08:00', hora_fin: '16:00'},
      {nombre: 'Daniel', hora_inicio: '08:00', hora_fin: '19:30'}
    ],   
    viernes: [
      {nombre: 'Daniel', hora_inicio: '08:00', hora_fin: '09:00'},
      {nombre: 'Daniel', hora_inicio: '08:00', hora_fin: '11:00'},
      {nombre: 'Daniel', hora_inicio: '08:00', hora_fin: '16:00'},
      {nombre: 'Daniel', hora_inicio: '08:00', hora_fin: '19:30'}
    ]


  }

  Calendar.create(appointments).draw();


})(Calendar);