document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      locale:'pt-br'
    });
    calendar.render();
  });

  document.addEventListener('DOMContentLoaded', function() {
var calendarEl = document.getElementById('calendar');

var calendar = new FullCalendar.Calendar(calendarEl, {

    themeSystem:'bootstrap5',

  headerToolbar: {
    left: 'prev,next today',
    center: 'title',
    right: 'dayGridMonth,timeGridWeek,timeGridDay'
  },

  locale:'pt-br',

//   initialDate: '2023-01-12',

  initialDate: '2024-02-29',
  navLinks: true, // can click day/week names to navigate views
  selectable: true,
  selectMirror: true,

  
  editable: true,
  dayMaxEvents: true, // allow "more" link when too many events
  events: [
    
  ]
});

calendar.render();
});
