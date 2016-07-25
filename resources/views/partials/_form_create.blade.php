<div class="form-group">
    {{ Form::label('answer', 'Answer:', ['class' => 'control-label col-sm-2']) }}
    <div class="col-sm-8">
        {{ Form::text('answer', null, ['class' => 'form-control']) }}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-2 col-sm-offset-5">
        {{ Form::submit('submit', ['class' => 'btn btn-primary form-control']) }}
    </div>

</div>