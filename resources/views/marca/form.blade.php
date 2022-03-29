<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombreMarca') }}
            {{ Form::text('nombreMarca', $marca->nombreMarca, ['class' => 'form-control' . ($errors->has('nombreMarca') ? ' is-invalid' : ''), 'placeholder' => 'Nombremarca']) }}
            {!! $errors->first('nombreMarca', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>