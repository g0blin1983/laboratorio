<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('numero_archivo') }}
            {{ Form::text('numero_archivo', $archivo->numero_archivo, ['class' => 'form-control' . ($errors->has('numero_archivo') ? ' is-invalid' : ''), 'placeholder' => 'Numero Archivo']) }}
            {!! $errors->first('numero_archivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_ingreso') }}
            {{ Form::date('fecha_ingreso', $archivo->fecha_ingreso, ['class' => 'form-control' . ($errors->has('fecha_ingreso') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Ingreso']) }}
            {!! $errors->first('fecha_ingreso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
{{--         <div class="form-group">
            {{ Form::label('Caratulas') }}
            {{ Form::select('caratulas_id', $caratulas , ['class' => 'form-control'/*  . ($errors->has('caratulas_id') ? ' is-invalid' : ''), 'placeholder' => 'Caratulas Id' */]) }}
            {!! $errors->first('caratulas_id', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        <div class="form-group">
        <label for="caratulas_id" class="form-label">Caratula</label>
            <select class="form-control form-control-sm|form-control-lg" name="caratulas_id" id="caratulas_id">
                @foreach ($caratulas as $caratula)
                    <option value="{{ $caratula->id }}">{{ $caratula->caratulas }}</option>    
                @endforeach
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('calles') }}
            {{ Form::text('calles', $archivo->calles, ['class' => 'form-control' . ($errors->has('calles') ? ' is-invalid' : ''), 'placeholder' => 'Calles']) }}
            {!! $errors->first('calles', '<div class="invalid-feedback">:message</div>') !!}
        </div>
{{--         <div class="form-group">
            {{ Form::label('depedencias_id') }}
            {{ Form::select('depedencias_id', $dependencias , ['class' => 'form-control' . ($errors->has('depedencias_id') ? ' is-invalid' : ''), 'placeholder' => 'Depedencias Id']) }}
            {!! $errors->first('depedencias_id', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        <div class="form-group">
          <label for="dependencias_id" class="form-label">Dependencias</label>
          <select class="form-control form-control-sm|form-control-lg" name="dependencias_id" id="dependencias_id">
            @foreach ($dependencias as $dependencia)
            <option value="{{ $dependencia->id }}">{{ $dependencia->dependencias }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
            {{ Form::label('respuesta') }}
            {{ Form::text('respuesta', $archivo->respuesta, ['class' => 'form-control' . ($errors->has('respuesta') ? ' is-invalid' : ''), 'placeholder' => 'Respuesta']) }}
            {!! $errors->first('respuesta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_salida') }}
            {{ Form::date('fecha_salida', $archivo->fecha_salida, ['class' => 'form-control' . ($errors->has('fecha_salida') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Salida']) }}
            {!! $errors->first('fecha_salida', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Description') }}
            {{ Form::text('Description', $archivo->Description, ['class' => 'form-control' . ($errors->has('Description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('Description', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>