<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('caratulas') }}
            {{ Form::text('caratulas', $caratula->caratulas, ['class' => 'form-control' . ($errors->has('caratulas') ? ' is-invalid' : ''), 'placeholder' => 'Caratulas']) }}
            {!! $errors->first('caratulas', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20 my-2">
        <button type="submit" class="btn btn-success">Aceptar</button>
    </div>
</div>