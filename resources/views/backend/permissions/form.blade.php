<div class="row">
    <div class="col-md-6">
        <div class="form-group {{ $errors->has("name") ? "has-error" : "" }}">
            {!! Form::label("name") !!}
            {!! Form::text("name",null,["class"=>"form-control"]) !!}
            {!! $errors->first("name", '<p class="help-block">:message</p>') !!}
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
                    }

                },
                messages: {
                    name: {
                        required: "Please enter value in field  Name",
                    },
                    email: {
                        required: "Please enter value in field  Email",
                    },
                    email_verified_at: {
                        required: "Please enter value in field  Email Verified At",
                    },
                    password: {
                        required: "Please enter value in field  Password",
                    },
                    remember_token: {
                        required: "Please enter value in field  Remember Token",
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
