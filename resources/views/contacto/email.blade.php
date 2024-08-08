<div class="email-body">
    Nuevo email de contacto vía web: <br><br>
    <strong>Nombre: </strong> {{ $data['name'] }}<br>
    <strong>Asunto: </strong> 
    @switch($data['subject'])
        @case("none")
            Sin asunto
            @break
        @case("services")
            Necesito vuestros servicios
            @break
        @case("work")
            Me interesa trabajar con vosotros
            @break
        @case("doubt")
            Tengo una duda
            @break
        @case("other")
            Otro
            @break
    @endswitch
    <br>
    <strong>Email: </strong> {{ $data['mail'] }}<br>
    <strong>Teléfono: </strong> {{ $data['phone'] }}<br>
    <strong>Mensaje: </strong> {{ $data['comment'] }}<br>
</div>