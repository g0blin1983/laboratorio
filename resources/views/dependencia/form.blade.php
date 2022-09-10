<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('dependencias') }}
            {{ Form::text('dependencias', $dependencia->dependencias, ['class' => 'form-control' . ($errors->has('dependencias') ? ' is-invalid' : ''), 'placeholder' => 'Dependencias']) }}
            {!! $errors->first('dependencias', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20 my-2">
        <button type="submit" class="btn btn-success">Aceptar</button>
    </div>
</div>