<div class="row ">
    <div class="col-md-4">
        <div class="form-group {{ $errors->has("name") ? "has-error" : "" }}">
            {!! Form::label("name") !!}
            {!! Form::text("name",null,["class"=>"form-control"]) !!}
            {!! $errors->first("name", '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group {{ $errors->has("name") ? "has-error" : "" }}">
            {!! Form::label("name") !!}
            {!! Form::select("category",['Category 1','Category 2','Category 3'],null,["class"=>"form-control"]) !!}
            {!! $errors->first("name", '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group {{ $errors->has("status") ? "has-error" : "" }}">
            {!! Form::label("status") !!}
            {!! Form::select("status",['active','inactive'],null,["class"=>"form-control"]) !!}
            {!! $errors->first("status", '<p class="help-block">:message</p>') !!}
        </div>
    </div>

</div>
<div class="row">
    <div class="col-md-12">
        <h4>Product Option</h4>
        <hr>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        {!! Form::label("name") !!}
    </div>
    <div class="col-md-3">
        {!! Form::label("price") !!}
    </div>
    <div class="col-md-3">
        {!! Form::label("special_price") !!}
    </div>
</div>
<div class="row ">


    <div class="col-md-3">
        <div class="form-group {{ $errors->has("name") ? "has-error" : "" }}">

            {!! Form::text("name",null,["class"=>"form-control"]) !!}
            {!! $errors->first("name", '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group {{ $errors->has("price") ? "has-error" : "" }}">

            {!! Form::number("price",null,["class"=>"form-control"]) !!}
            {!! $errors->first("price", '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group {{ $errors->has("special_price") ? "has-error" : "" }}">

            {!! Form::number("special_price",null,["class"=>"form-control"]) !!}
            {!! $errors->first("special_price", '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="col-md-3">
        <a class="btn btn-success">+</a>
    </div>
</div>
<div class="row ">


    <div class="col-md-3">
        <div class="form-group {{ $errors->has("name") ? "has-error" : "" }}">

            {!! Form::text("name",null,["class"=>"form-control"]) !!}
            {!! $errors->first("name", '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group {{ $errors->has("price") ? "has-error" : "" }}">

            {!! Form::number("price",null,["class"=>"form-control"]) !!}
            {!! $errors->first("price", '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group {{ $errors->has("special_price") ? "has-error" : "" }}">

            {!! Form::number("special_price",null,["class"=>"form-control"]) !!}
            {!! $errors->first("special_price", '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="col-md-3">
        <a class="btn btn-danger">-</a>
    </div>
</div>
@section('validation')
    <script>
        $(document).ready(function () {
            $('#_form').validate({
                rules: {
                    name: {
                        required: true,
                    }, status: {
                        required: true,
                    }
                },
                messages: {
                    name: {
                        required: "Please enter value in field  Name",
                    },
                    status: {
                        required: "Please enter value in field  Status",
                    },
                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
@endsection
