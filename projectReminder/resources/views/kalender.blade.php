<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('landing_page/css/templatemo-ebook-landing.css')}}" rel="stylesheet">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Calender - ReminderTA</title>
</head>
<body>
        <a href="{{ url('/') }}" class="btn custom-btn custom-border-btn btn-naira btn-inverted ">
            <!-- <i class="btn-icon bi-cloud-download"></i> -->
            <span>Home</span>
        </a>
  <div class="container">
      <div class="row">
          <div class="col-12 mt-3"></div>
              <div id='calendar'></div>
      </div>
  </div>

  <div id="modal-action" class="modal" tabindex="-1">
    
  </div>

  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>
  <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/bootstrap5@6.1.15/index.global.min.js'></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>

      const modal = $('#modal-action')
      const csrfToken = $('meta[name=csrf_token]').attr('content')

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          themeSystem: 'bootstrap5',
          events: `{{ route('kalender.list') }}`,
          editable: true,
          dateClick: function (info){
            console.log(info);

            $.ajax({
              url: `{{ route('kalender.create') }}`,
              data: {
                start_date: info.dateStr,
                end_date: info.dateStr
              },
              success: function (res) {
                modal.html(res).modal('show')

                $('#form-action').on('submit', function(e) {
                  e.preventDefault()

                  const form = this
                  const formData = new FormData(form)

                  $.ajax({
                    url: form.action,
                    method: form.method,
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (res){
                      modal.modal('hide')
                      calendar.refetchEvents()
                    },
                    error: function(res){

                    }
                  })
                })
              }
            })

            // $('#modal-action').modal('show')
          },

          eventClick: function ({event}){
            $.ajax({
              url: `{{ url('kalender') }}/${event.id}/edit`,
              success: function (res) {
                modal.html(res).modal('show')

                $('#form-action').on('submit', function(e) {
                  e.preventDefault()

                  const form = this
                  const formData = new FormData(form)

                  $.ajax({
                    url: form.action,
                    method: form.method,
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (res){
                      modal.modal('hide')
                      calendar.refetchEvents()
                    }
                  })
                })
              }
            })
          },

          eventDrop: function (info) {
            const event = info.event
            $.ajax({
              url : `{{url('kalender')}}/${event.id}`,
              method : 'put',
              data: {
                id: event.id,
                start_date: event.startStr,
                end_date: event.end.toISOString().substring(0, 10),
                title: event.title
              },
              headers: {
                'X-CSRF-TOKEN': csrfToken,
                accept : 'application/json' 
              },
              success: function(res){
                iziToast.success({
                    title: 'Success',
                    message: res.message,
                    position: 'topRight'
                });
              },
              error: function(res){
                const message = res.responseJSON.message
                info.revert()
                iziToast.error({
                    title: 'Error',
                    message: message ?? 'Something Wrong',
                    position: 'topRight'
                });
              }
            })
          }, 

          eventResize:function(info){
            const {event} = info
            $.ajax({
              url : `{{url('kalender')}}/${event.id}`,
              method : 'put',
              data: {
                id: event.id,
                start_date: event.startStr,
                end_date: event.end.toISOString().substring(0, 10),
                title: event.title
              },
              headers: {
                'X-CSRF-TOKEN': csrfToken,
                accept : 'application/json' 
              },
              success: function(res){
                iziToast.success({
                    title: 'Success',
                    message: res.message,
                    position: 'topRight'
                });
              },
              error: function(res){
                const message = res.responseJSON.message
                info.revert()
                iziToast.error({
                    title: 'Error',
                    message: message ?? 'Something Wrong',
                    position: 'topRight'
                });
              }
            })
          }
        });
        calendar.render();
      });

    </script>
</body>
</html>