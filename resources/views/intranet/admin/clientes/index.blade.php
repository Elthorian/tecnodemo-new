@extends('intranet.layouts.admin')
@section('intranet-section')
    <div class="clientes-index">
        <div class="title">Clientes</div>
        <div class="description">Visualiza, crea, edita y borra los datos de tus clientes</div>
        <div class="header-menu">
            <a class="button-search" href=""><i class="bi bi-search"></i></a>
            <input id="buscadorClientes" class="buscador" type="text" name="search" placeholder="Busca un cliente...">
            <a class="button-create" href="{{ route('intranet.clientes.create') }}"><i class="bi bi-plus-lg"></i></a>
        </div>
        <div class="content-index">
            <div class="resultados-encontrados"><div id="encontrados">{{ count($clientes) }}</div> resultados encontrados</div>
            <table id="tablaClientes" class="table-data">
                <tr class="table-data-header">
                    <th class="nombre">Cliente</th>
                    <th class="direccion">Dirección</th>
                    <th class="poblacion">Población</th>
                    <th class="asignaciones">Asignado a</th>
                </tr>
                @foreach($clientes as $cliente)
                    <tr class="clickable-row" data-href="{{ route('intranet.clientes.edit', $cliente->id) }}">
                    <td class="nombre"><i class="bi bi-briefcase"></i><b>{{ $cliente->codigo }}. {{ $cliente->nombre }}</b></td>
                    <td class="direccion">{{ $cliente->direccion }}</td>
                    <td class="poblacion">{{ $cliente->poblacion }}</td>
                    <td class="asignaciones">
                        @if(count($cliente->asignaciones->where('activo', 1)) > 0)
                            <div>
                            @foreach($cliente->asignaciones->where('activo', 1) as $asignacion)
                                @if(!$loop->index > 0)
                                    {{ $asignacion->operario->nombre }}
                                @else
                                    y más...
                                    @break;
                                @endif
                            @endforeach
                            </div>
                        @else
                            <div>Sin asignar</div>
                        @endif
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <script src="{{ asset('js/intranet/clientes/clientes.js') }}"></script>
@endsection