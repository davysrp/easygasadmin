<div class="row ">
    <div class="col-md-6">
        <div class="form-group {{ $errors->has("name") ? "has-error" : "" }}">
            {!! Form::label("Branch") !!}
            {!! Form::select("name",['Branch 1','Branch 2','Branch 3'],null,["class"=>"form-control"]) !!}
            {!! $errors->first("name", '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>
<div class="row ">
    <div class="col-md-6">
        <div class="form-group {{ $errors->has("name") ? "has-error" : "" }}">
            {!! Form::label("Product 1") !!}
            {!! Form::select("name",['Branch 1','Branch 2','Branch 3'],null,["class"=>"form-control"]) !!}
            {!! $errors->first("name", '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>


@for($i=1;$i<=3;$i++)
    <div class="row">
        <div class="col-md-3">
            <div class="form-group {{ $errors->has("name") ? "has-error" : "" }}">
                {!! Form::label("Product option".$i) !!}
                {!! Form::text("name",'Product'.$i.'kg' ,["class"=>"form-control"]) !!}
                {!! $errors->first("name", '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group {{ $errors->has("name") ? "has-error" : "" }}">
                {!! Form::label("Product Qty".$i) !!}
                {!! Form::text("name",100,["class"=>"form-control"]) !!}
                {!! $errors->first("name", '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
@endfor


<div class="row"></div>@section('validation')
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
