<div class="row"> <div class="col-md-6">
                        <div class="form-group {{ $errors->has("name") ? "has-error" : "" }}">
                            {!! Form::label("name") !!}
                            {!! Form::text("name",null,["class"=>"form-control"]) !!}
                            {!! $errors->first("name", '<p class="help-block">:message</p>') !!}
                        </div>
                </div> <div class="col-md-6">
                        <div class="form-group {{ $errors->has("status") ? "has-error" : "" }}">
                            {!! Form::label("status") !!}
                            {!! Form::text("status",null,["class"=>"form-control"]) !!}
                            {!! $errors->first("status", '<p class="help-block">:message</p>') !!}
                        </div>
                </div></div><div class="row"> <div class="col-md-6">
                        <div class="form-group {{ $errors->has("fee") ? "has-error" : "" }}">
                            {!! Form::label("fee") !!}
                            {!! Form::text("fee",null,["class"=>"form-control"]) !!}
                            {!! $errors->first("fee", '<p class="help-block">:message</p>') !!}
                        </div>
                </div></div>@section('validation')
    <script>
        $(document).ready(function () {
            $('#_form').validate({
                rules: {
                    name: {
                        required: true,
                    },status: {
                        required: true,
                    },fee: {
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
fee: {
                        required: "Please enter value in field  Fee",
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
