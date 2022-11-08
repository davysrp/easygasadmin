<div class="row">
    <div class="col-md-6">
        <div class="form-group {{ $errors->has("full_name") ? "has-error" : "" }}">
            {!! Form::label("full_name") !!}
            {!! Form::text("full_name",null,["class"=>"form-control"]) !!}
            {!! $errors->first("full_name", '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group {{ $errors->has("phone_number") ? "has-error" : "" }}">
            {!! Form::label("phone_number") !!}
            {!! Form::text("phone_number",null,["class"=>"form-control"]) !!}
            {!! $errors->first("phone_number", '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group {{ $errors->has("email") ? "has-error" : "" }}">
            {!! Form::label("email") !!}
            {!! Form::text("email",null,["class"=>"form-control"]) !!}
            {!! $errors->first("email", '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group {{ $errors->has("gender") ? "has-error" : "" }}">
            {!! Form::label("gender") !!}
            {!! Form::select("gender",['Male','Female'],null,["class"=>"form-control"]) !!}
            {!! $errors->first("gender", '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group {{ $errors->has("status") ? "has-error" : "" }}">
            {!! Form::label("status") !!}
            {!! Form::select("status",['active','inactive'],null,["class"=>"form-control"]) !!}
            {!! $errors->first("status", '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>@section('validation')
    <script>
        $(document).ready(function () {
            $('#_form').validate({
                rules: {
                    full_name: {
                        required: true,
                    }, phone_number: {
                        required: true,
                    }, email: {
                        required: true,
                    }, gender: {
                        required: true,
                    }, status: {
                        required: true,
                    }

                },
                messages: {
                    full_name: {
                        required: "Please enter value in field  Full Name",
                    },
                    phone_number: {
                        required: "Please enter value in field  Phone Number",
                    },
                    email: {
                        required: "Please enter value in field  Email",
                    },
                    gender: {
                        required: "Please enter value in field  Gender",
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
