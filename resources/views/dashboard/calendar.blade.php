{{-- In resources/views/dashboard/sessions/calendar.blade.php --}}
@extends('dashboard.layouts.app')
@section('header')
<link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css' rel='stylesheet' />
    <style>
        #calendar {
            max-width: 1100px;
            margin: 0 auto;
        }
    </style>
@endsection
@section('content')
   
    <div id='calendar'></div>
@endsection
@section('footer')
    <!-- FullCalendar JS -->
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var sessions = @json($sessions);

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: sessions
            });
            
            calendar.render();
        });
    </script>
@endsection
