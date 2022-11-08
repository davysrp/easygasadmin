<div class="row">
    <div class="col-md-6">
        <div class="form-group {{ $errors->has("name") ? "has-error" : "" }}">
            {!! Form::label("name") !!}
            {!! Form::text("name",null,["class"=>"form-control"]) !!}
            {!! $errors->first("name", '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group {{ $errors->has("email") ? "has-error" : "" }}">
            {!! Form::label("email") !!}
            {!! Form::text("email",null,["class"=>"form-control"]) !!}
            {!! $errors->first("email", '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group {{ $errors->has("role") ? "has-error" : "" }}">
            {!! Form::label("role") !!}
            {!! Form::select("role",['admin','account','cashier'],null,["class"=>"form-control"]) !!}
            {!! $errors->first("role", '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group {{ $errors->has("password") ? "has-error" : "" }}">
            {!! Form::label("password") !!}
            {!! Form::text("password",null,["class"=>"form-control"]) !!}
            {!! $errors->first("password", '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>

@section('validation')
    <script>
        $(document).ready(function () {
            $('#_form').validate({
                rules: {
                    name: {
                        required: true,
                    }, email: {
                        required: true,
                    }, password: {
                        required: true,
                    }

                },
                messages: {
                    name: {
                        required: "Please enter value in field  Name",
                    },
                    email: {
                        required: "Please enter value in field  Email",
                    },

                    password: {
                        required: "Please enter value in field  Password",
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
