@extends('layouts.app')

@section('content')

@include('layouts.navbar')

    <div class="panel panel-default" style="min-width: 800px">
        <div class="panel-heading" style="background:#f9f9f9"><b>Listado de marcas vehiculos</b></div>
        <div class="panel-body">
            @if (Session::has('message'))
                <div class="alert alert-success">
                    <i class="icon-check_circle"></i> {{ Session::get('message') }}
                </div>
            @endif 

            <form  action="{{ route('vmarca') }}" class="navbar-form navbar-left pull-right" method="GET" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Buscar marca">
                </div>
                <button type="submit" class="btn btn-default">Buscar</button>
            </form>

            <a href="{{ route('vmarcaAdd') }}" class="btn btn-primary">Registrar nueva marca</a>

            <p>Hay {{ $Vmarcas->total() }} marcas</p>
            <hr>

            <table class="table table-striped">
            <thead>
                <th class="col-md-1">#</th>
                <th class="col-md-5">Marca</th>
                <th class="col-md-1">Acción</th>
            </thead>

            <tbody>
            @foreach($Vmarcas as $row)
                <tr data-id="{{ $row->id }}">
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->marca }}</td>
                    <td>
                        <a href="{{ route('vmarcaEdit', $row->id) }}" class="btn btn-warning"><span class="icon-mode_edit"></span></a>
                        <a href="#" class="btn btn-danger"><span class="icon-highlight_off"></span></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
            </table>
        </div>
    </div>

{{ $Vmarcas->render() }}

<form action="{{ route('vmarca') }}/id" method="POST" id="form-delete">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}                           
</form>

@section('scripts')
<script type="text/javascript">
        $(document).ready(function (){
            $('.btn-danger').click(function (e){
                e.preventDefault();

                var row = $(this).parents('tr');
                var id = row.data('id');
                var form = $('#form-delete');
                var url = form.attr('action').replace('id', id);
                var data = form.serialize();

                row.fadeOut();

                $.post(url, data, function(result){
                }).fail(function (){
                    alert('El registro no fue eliminado');
                    row.show();
                });
                
            });
        });
</script>
@endsection

@endsection