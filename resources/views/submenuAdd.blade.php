@extends('layouts.app')

@section('content')

@include('layouts.navbar')

<link rel="stylesheet" href="{{ asset('css/menu.css') }}">

    <div class="menu-icons">

    <a href="{{ route('empleadoAdd') }}">
        <div class="panel-module" id="panel-module-1">
            <div class="module-icon">
                <i class="icon-work"></i>
            </div>

            <div class="module-title" id="module-title-1">Agregar un Empleado.</div>

            <div class="module-footer">
                Personalizado a tus necesidades.
            </div>
        </div>
    </a>

    <a href="{{ route('clienteAdd') }}">
        <div class="panel-module" id="panel-module-2">
            <div class="module-icon">
                <i class="icon-person"></i>
            </div>

            <div class="module-title" id="module-title-2">Agregar un Cliente.</div>

            <div class="module-footer">
                Personalizado a tus necesidades.
            </div>
        </div>
    </a>

    <a href="{{ route('productoAdd') }}">
        <div class="panel-module" id="panel-module-3">
            <div class="module-icon">
                <i class="icon-style"></i>
            </div>

            <div class="module-title" id="module-title-3">Agregar un Producto.</div>
            
            <div class="module-footer">
                Personalizado a tus necesidades.
            </div>
        </div>
    </a>

    <a href="{{ route('proveedorAdd') }}">
        <div class="panel-module" id="panel-module-4">
            <div class="module-icon">
                <i class="icon-people"></i>
            </div>

            <div class="module-title" id="module-title-4">Agregar un Proveedor.</div>
            
            <div class="module-footer">
                Personalizado a tus necesidades.
            </div>
        </div>
    </a>

    <a href="{{ route('vehiculoAdd') }}">
        <div class="panel-module" id="panel-module-5">
            <div class="module-icon">
                <i class="icon-time_to_leave"></i>
            </div>

            <div class="module-title" id="module-title-5">Agregar un Vehiculo.</div>
            
            <div class="module-footer">
                Personalizado a tus necesidades.
            </div>
        </div>
    </a>
    
    <a href="{{ route('transporteAdd') }}">
        <div class="panel-module" id="panel-module-6">
            <div class="module-icon">
                <i class="icon-local_shipping"></i>
            </div>

            <div class="module-title" id="module-title-6">Agregar un Transporte.</div>
            
            <div class="module-footer">
                Personalizado a tus necesidades.
            </div>
        </div>
    </a>

    <a href="{{ route('mecanicaAdd') }}">
        <div class="panel-module" id="panel-module-7">
            <div class="module-icon">
                <i class="icon-format_color_fill"></i>
            </div>

            <div class="module-title" id="module-title-7">Agregar una Mecanica.</div>
            
            <div class="module-footer">
                Personalizado a tus necesidades.
            </div>
        </div>
    </a>
</div>

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

        $(function() {
          $('#panel-module-5').hover(function() {
            $('#module-title-5').css('color', '#019ACF');
          }, function() {
            // vuelve a dejar el <div> como estaba al hacer el "mouseout"
            $('#module-title-5').css('color', '');
          });
        });

        $(function() {
          $('#panel-module-6').hover(function() {
            $('#module-title-6').css('color', '#019ACF');
          }, function() {
            // vuelve a dejar el <div> como estaba al hacer el "mouseout"
            $('#module-title-6').css('color', '');
          });
        });

        $(function() {
          $('#panel-module-7').hover(function() {
            $('#module-title-7').css('color', '#019ACF');
          }, function() {
            // vuelve a dejar el <div> como estaba al hacer el "mouseout"
            $('#module-title-7').css('color', '');
          });
        });
</script>

@endsection