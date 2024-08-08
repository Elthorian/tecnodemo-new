@extends('intranet.layouts.admin')
@section('intranet-section')
    <div class="operarios-index">
        <div class="title">Operarios</div>
        <div class="description">Visualiza, crea, edita y borra los datos de tus trabajadores</div>
        <div class="header-menu">
            <a class="button-search" href=""><i class="bi bi-search"></i></a>
            <input id="buscadorOperarios" class="buscador" type="text" name="search" placeholder="Busca un operario...">
            <a class="button-create" href="{{ route('intranet.operarios.create') }}"><i class="bi bi-plus-lg"></i></a>
        </div>
        <div class="content-index">
            <div class="resultados-encontrados"><div id="encontrados">{{ count($operarios) }}</div> resultados encontrados</div>
            <table id="tablaOperarios" class="table-data">
                <tr class="table-data-header">
                    <th class="nombre">Nombre</th>
                    <th class="telefono">Teléfono</th>
                    <th class="email">Email</th>
                    <th class="asignados center">Clientes asignados</th>
                </tr>
                @foreach($operarios as $operario)
                    <tr class="clickable-row" data-href="{{ route('intranet.operarios.edit', $operario->id) }}">
                    <td class="nombre"><i class="bi bi-person"></i>{{ $operario->nombre }}</td>
                    <td class="telefono">{{ $operario->telefono }}</td>
                    <td class="email">{{ $operario->email }}</td>
                    <td class="asignados center">
                        @if ($operario->asignaciones)
                            {{ count($operario->asignaciones) }}
                        @endif
                    </td>
                </tr>
                @endforeach
            </table>
    </div>
    <script src="{{ asset('js/intranet/operarios/operarios.js') }}"></script>
@endsection