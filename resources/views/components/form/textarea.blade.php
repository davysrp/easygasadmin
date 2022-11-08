<div class="form-group {{ $errors->has($name) ? 'has-error' : '' }}">
    {{ Form::label($name, \Illuminate\Support\Str::headline(str_replace(['[',']'],'',$name)), ['class' => 'control-label']) }}
    {{ Form::textarea($name, $defaultValue, ['class' => 'form-control' ,'placeholder'=>'Enter '.\Illuminate\Support\Str::headline(str_replace(['[',']'],'',$name)),'rows'=>$rows]) }}
    {!! $errors->first($name, '<p class="error invalid-feedback">:message</p>') !!}
</div>
