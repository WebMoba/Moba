@extends('layouts.app')

@section('template_title')
    Event
@endsection

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Eventos'])
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-11">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Eventos') }}
                            </span>

                            <form action="{{ route('buscar') }}" method="GET" class="d-flex align-items-center">
                                <div class="col-auto mr-2">
                                    <input type="text" name="termino" class="form-control" placeholder="Buscar....">
                                </div>
                                <div class="col-auto mr-2">
                                    <button type="submit" class="btn btn-primary btn-sm"><i
                                            class="bi bi-search"></i>  <span class="tooltiptext">Buscar</span></button>
                                </div>
                            </form>
                            <div class="float-right" style="display:flex">
                                
                                <a href="{{ route('excel.events') }}" class="btn btn-success btn-sm float-right">
                                    <i class="bi bi-file-earmark-excel-fill"></i><span class="tooltiptext">Excel</span>
                                </a>
                                
                                <button type="button" class="btn btn-danger ms-2 rounded" tooltip="tooltip"
                                title="PDF" onclick="window.location.href='{{ route('event.pdf') }}'">
                                    <i class="bi bi-file-pdf-fill"></i><span class="tooltiptext">Pdf</span>
                                </button>

                                <a href="{{ route('events.create') }}" class="btn btn-success" data-placement="left">
                                    <i class="bi bi-plus-circle"></i><span class="tooltiptext">Crear</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        <th>Lugar</th>
                                        <th>Titulo</th>
                                        <th>Descripcion</th>
                                        <th>Fecha Inicio</th>
                                        <th>Fecha Final</th>
                                        <th>Rango Importancia</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($events as $event)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $event->place }}</td>
                                            <td>{{ $event->title }}</td>
                                            <td>{{ $event->description }}</td>
                                            <td>{{ $event->date_start }}</td>
                                            <td>{{ $event->date_end }}</td>
                                            <td>{{ $event->importance_range }}</td>

                                            <td>
                                                <form class="frData" action="{{ route('events.destroy', $event->id) }}"
                                                    method="POST" data-disable="{{ $event->disable }}">


                                                    <a class="btn btn-sm btn-primary {{ $event->disable ? 'disabled' : '' }}"
                                                        href="{{ route('events.show', $event->id) }}">
                                                        </i> <i class="bi bi-eye-fill"></i><span class="tooltiptext">Mostrar</span>
                                                    </a>
                                                    <a class="btn btn-sm btn-success {{ $event->disable ? 'disabled' : '' }}"
                                                        href="{{ route('events.edit', $event->id) }}">
                                                        <i class="bi bi-pencil-square"></i><span class="tooltiptext">Editar</span>
                                                    </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">

                                                        {!! $event->disable ? '<i class="bi bi-check-circle-fill"></i>' : '<i class="bi bi-x-circle"></i>' !!}
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $events->links() !!}
            </div>
        </div>
    </div>
    <style>
        th, td{
            text-align: center;
        }
    </style>
    @include('layouts.footers.auth.footer')
@endsection

@extends('layouts.alerts')
