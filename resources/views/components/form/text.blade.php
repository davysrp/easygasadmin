<div class="form-group {{ $errors->has($name) ? 'has-error' : '' }}">
    {{ Form::label($name, \Illuminate\Support\Str::headline(str_replace(['[',']'],'',$name)), ['class' => 'control-label']) }}
    {{ Form::text($name, $defaultValue, ['class' => 'form-control','placeholder'=>'Enter '.\Illuminate\Support\Str::headline(str_replace(['[',']'],'',$name))]) }}
    {!! $errors->first($name, '<p class="help-block">:message</p>') !!}
</div>
