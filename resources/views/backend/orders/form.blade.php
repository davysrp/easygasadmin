<div class="row">
    <div class="col-md-6">
        <div class="form-group {{ $errors->has("customer_id") ? "has-error" : "" }}">
            {!! Form::label("customer_id") !!}
            {!! Form::text("customer_id",null,["class"=>"form-control"]) !!}
            {!! $errors->first("customer_id", '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group {{ $errors->has("payment_method_id") ? "has-error" : "" }}">
            {!! Form::label("payment_method_id") !!}
            {!! Form::text("payment_method_id",null,["class"=>"form-control"]) !!}
            {!! $errors->first("payment_method_id", '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group {{ $errors->has("shipping_method_id") ? "has-error" : "" }}">
            {!! Form::label("shipping_method_id") !!}
            {!! Form::text("shipping_method_id",null,["class"=>"form-control"]) !!}
            {!! $errors->first("shipping_method_id", '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group {{ $errors->has("driver_id") ? "has-error" : "" }}">
            {!! Form::label("driver_id") !!}
            {!! Form::text("driver_id",null,["class"=>"form-control"]) !!}
            {!! $errors->first("driver_id", '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group {{ $errors->has("total") ? "has-error" : "" }}">
            {!! Form::label("total") !!}
            {!! Form::text("total",null,["class"=>"form-control"]) !!}
            {!! $errors->first("total", '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group {{ $errors->has("status") ? "has-error" : "" }}">
            {!! Form::label("status") !!}
            {!! Form::text("status",null,["class"=>"form-control"]) !!}
            {!! $errors->first("status", '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group {{ $errors->has("payment_status") ? "has-error" : "" }}">
            {!! Form::label("payment_status") !!}
            {!! Form::text("payment_status",null,["class"=>"form-control"]) !!}
            {!! $errors->first("payment_status", '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>@section('validation')
    <script>
        $(document).ready(function () {
            $('#_form').validate({
                rules: {
                    customer_id: {
                        required: true,
                    }, payment_method_id: {
                        required: true,
                    }, shipping_method_id: {
                        required: true,
                    }, driver_id: {
                        required: true,
                    }, total: {
                        required: true,
                    }, status: {
                        required: true,
                    }, payment_status: {
                        required: true,
                    }

                },
                messages: {
                    customer_id: {
                        required: "Please enter value in field  Customer Id",
                    },
                    payment_method_id: {
                        required: "Please enter value in field  Payment Method Id",
                    },
                    shipping_method_id: {
                        required: "Please enter value in field  Shipping Method Id",
                    },
                    driver_id: {
                        required: "Please enter value in field  Driver Id",
                    },
                    total: {
                        required: "Please enter value in field  Total",
                    },
                    status: {
                        required: "Please enter value in field  Status",
                    },
                    payment_status: {
                        required: "Please enter value in field  Payment Status",
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
