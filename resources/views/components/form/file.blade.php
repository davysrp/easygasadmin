<div class="form-group {{ $errors->has($name) ? 'has-error' : '' }}">
    {{ Form::label($name, \Illuminate\Support\Str::headline(str_replace(['[',']'],'',$name)), ['class' => 'control-label']) }}
    {{ Form::file($name, ['class' => 'filepond form-control',$multiple,'accept'=>$accept]) }}
    {!! $errors->first($name, '<p class="help-block">:message</p>') !!}
</div>
