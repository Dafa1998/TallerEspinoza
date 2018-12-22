@extends('layouts.app')

@section('content')

@include('layouts.navbar')

<link rel="stylesheet" href="{{ asset('css/reporte.css') }}">

    <div class="row">
        <div class="col-md-8 col-md-offset-plus">
            
            <div class="module-reporte" id="module-reporte">

                <div class="header-reporte flexbox">
                    <div class="hash-report">
                        <h1>REPORTE <b>CLIENTE</b></h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="logo-reporte"></div>
                </div> 

                <div class="title-reporte">Información del Cliente</div>
                <div class="panel-reporte">
                    <div class="reporte-unity flex">
                        <div class="reporte-post">Nombre Completo:</div>
                        <div class="reporte-text">{{ $Clientes->nombres }} {{ $Clientes->apellidos }}</div>
                    </div>

                    <div class="reporte-unity flex">
                        <div class="reporte-post">Dirección:</div>
                        <div class="reporte-text">{{ $Clientes->direccion }}</div>
                    </div>

                    <div class="reporte-unity flex">
                        <div class="reporte-post">Teléfono:</div>
                        <div class="reporte-text">{{ $Clientes->telefono }}</div>
                    </div>

                    <div class="reporte-unity flex">
                        <div class="reporte-post">DUI:</div>
                        <div class="reporte-text">{{ $Clientes->dui }}</div>
                    </div>

                    <div class="reporte-unity flex">
                        <div class="reporte-post">NIT:</div>
                        <div class="reporte-text">{{ $Clientes->nit }}</div>
                    </div>
                </div>

            </div>

            <a href="#" onclick="javascript:genPDF();" class="btn btn-link"><i class="icon-cloud_download"></i> Descargar PDF</a>
      
        </div>
    </div>

<script type="text/javascript">

function genPDF() {
    html2canvas(document.getElementById('module-reporte'), {
        onrendered: function (canvas) {
            var img = canvas.toDataURL('image/png');
            var doc = new jsPDF();
            doc.addImage(img, 'JPEG',20,20);
            doc.save('Cliente{{ $Clientes->id }}.pdf');
        }
    });
}

</script>
@endsection