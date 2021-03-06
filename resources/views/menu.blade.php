@extends('layouts.app')

@section('content')

@include('layouts.navbar')

<link rel="stylesheet" href="{{ asset('css/menu.css') }}">

    <div class="menu-icons">

    <a href="{{ route('submenu') }}">
        <div class="panel-module" id="panel-module-1">
            <div class="module-icon">
                <i class="icon-search"></i>
            </div>

            <div class="module-title" id="module-title-1">Buscar un Registro.</div>

            <div class="module-footer">
                Personalizado a tus necesidades.
            </div>
        </div>
    </a>

    <a href="{{ route('submenuAdd') }}">
        <div class="panel-module" id="panel-module-2">
            <div class="module-icon">
                <i class="icon-person_add"></i>
            </div>

            <div class="module-title" id="module-title-2">Agregar un Registro.</div>

            <div class="module-footer">
                Personalizado a tus necesidades.
            </div>
        </div>
    </a>

    <a href="{{ route('submenuRepo') }}">
        <div class="panel-module" id="panel-module-3">
            <div class="module-icon">
                <i class="icon-content_paste"></i>
            </div>

            <div class="module-title" id="module-title-3">Generar un Reporte.</div>
            
            <div class="module-footer">
                Personalizado a tus necesidades.
            </div>
        </div>
    </a>

    <form action="{{ route('logout') }}" method="POST" id="form">
        {{ csrf_field() }}

        <button type="submit" class="btn-none">
            <div class="panel-module" id="panel-module-4">
                <div class="module-icon">
                    <i class="icon-power_settings_new"></i>
                </div>
                
                <div class="module-title" id="module-title-4">Cerrar la Aplicación.</div>
                
                <div class="module-footer">
                    Personalizado a tus necesidades.
                </div>
            </div>
        </button>
        
    </form>
</div>

@section('scripts')
<script type="text/javascript">
        $(function() {
          $('#panel-module-1').hover(function() {
            $('#module-title-1').css('color', '#019ACF');
          }, function() {
            // vuelve a dejar el <div> como estaba al hacer el "mouseout"
            $('#module-title-1').css('color', '');
          });
        });

        $(function() {
          $('#panel-module-2').hover(function() {
            $('#module-title-2').css('color', '#019ACF');
          }, function() {
            // vuelve a dejar el <div> como estaba al hacer el "mouseout"
            $('#module-title-2').css('color', '');
          });
        });

        $(function() {
          $('#panel-module-3').hover(function() {
            $('#module-title-3').css('color', '#019ACF');
          }, function() {
            // vuelve a dejar el <div> como estaba al hacer el "mouseout"
            $('#module-title-3').css('color', '');
          });
        });

        $(function() {
          $('#panel-module-4').hover(function() {
            $('#module-title-4').css('color', '#019ACF');
          }, function() {
            // vuelve a dejar el <div> como estaba al hacer el "mouseout"
            $('#module-title-4').css('color', '');
          });
        });

    (function () {
        var form = document.getElementById('form');
        form.addEventListener('submit',SweetAlert);
        
        function SweetAlert(event) {
        // Evitando que el evento "Submit" ocurra
            event.preventDefault();

            swal({
                title: "¿Estas de acuerdo?",
                text: "Aceptar te direccionara al login.",
                icon: "warning",
                buttons: [
                    'Cancelar',
                    'Aceptar'
                ],
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal({
                        title: "Good bye!",
                        text: "Tu sessión ya ha sido cerrada.",
                        icon: "success",
                        buttons: false,
                    });
                
                // Realizando la redireccion "Logout"
                    form.submit();
                } 
                else {
                    swal("Cancelled", "Gracias por seguir interactuando :)", "error");
                }
            });
        }
    })();
</script>
@endsection

@endsection