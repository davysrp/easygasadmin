<div class="row">
    <div class="col-md-6">
        <div class="form-group {{ $errors->has("icon") ? "has-error" : "" }}">
            {!! Form::label("icon") !!}
            {!! Form::file("icon",null,["class"=>"form-control"]) !!}
            {!! $errors->first("icon", '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group {{ $errors->has("name") ? "has-error" : "" }}">
            {!! Form::label("name") !!}
            {!! Form::text("name",null,["class"=>"form-control"]) !!}
            {!! $errors->first("name", '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group {{ $errors->has("tag_line") ? "has-error" : "" }}">
            {!! Form::label("tag_line") !!}
            {!! Form::text("tag_line",null,["class"=>"form-control"]) !!}
            {!! $errors->first("tag_line", '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group {{ $errors->has("status") ? "has-error" : "" }}">
            {!! Form::label("status") !!}
            {!! Form::select("status",['active','inactive'],null,["class"=>"form-control"]) !!}
            {!! $errors->first("status", '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group {{ $errors->has("sort_order") ? "has-error" : "" }}">
            {!! Form::label("sort_order") !!}
            {!! Form::text("sort_order",null,["class"=>"form-control"]) !!}
            {!! $errors->first("sort_order", '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>@section('validation')
    <script>
        $(document).ready(function () {
            $('#_form').validate({
                rules: {
                    icon: {
                        required: true,
                    }, name: {
                        required: true,
                    }, tag_line: {
                        required: true,
                    }, status: {
                        required: true,
                    }, sort_order: {
                        required: true,
                    }

                },
                messages: {
                    icon: {
                        required: "Please enter value in field  Icon",
                    },
                    name: {
                        required: "Please enter value in field  Name",
                    },
                    tag_line: {
                        required: "Please enter value in field  Tag Line",
                    },
                    status: {
                        required: "Please enter value in field  Status",
                    },
                    sort_order: {
                        required: "Please enter value in field  Sort Order",
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
