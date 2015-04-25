
<form id="formulario" action="enviado.php" method="post">
    <fieldset>
        <legend>Formulario de Ejemplo</legend>
            <label>Nombre</label>
                <input id="campo1" name="nombre" type="text" />
            <label>Email</label>
                <input id="campo2" name="email" type="text" />
            <input id="campo3" name="enviar" type="submit" value="Enviar" />
    </fieldset>
</form>
{!! Form::open(array('url' => 'form')) !!}
{!! Form::text('email', null) !!} 
 <input id="campo3" name="enviar" type="submit" value="Enviar" />
{!! Form::close() !!}