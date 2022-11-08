@extends("layouts.adminapp")
@section("title","Permissions")
@section("card-title","Permissions")
@section("create-route",route("permissions.create"))
@section("table")
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @for($i=1;$i<=20;$i++)
            <tr>
                <td>{!! $i !!}</td>
                <td> Permission {!! $i!!}</td>
                <td>
                    <form action="#" method="POST">
                        <input name="_token" type="hidden" value="Xljt6tguqhFRYIMhVgqeskvKyT5c9UIUrezyOTu3"><input
                            type="hidden" name="_method" value="DELETE">
                        <div class="btn-group btn-group-xs pull-right" role="group"><a
                                href="{!! route('permissions.edit',1) !!}"
                                class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure want to delete')"><i class="fa fa-trash"></i>
                            </button>
                        </div>
                    </form>
                </td>

            </tr>

        @endfor
        </tbody>
    </table>
@endsection
@section("datatable")
    <script>
        $(document).ready(function () {
            $("table").dataTable({
                {{--processing: true,--}}
                {{--serverSide: true,--}}
                {{--ajax: "{!! route("users.index") !!}",--}}
                {{--columns: [--}}
                {{--    {data: 'name', name: 'name'},--}}
                {{--    {data: 'email', name: 'email'},--}}
                {{--    {data: 'email_verified_at', name: 'email_verified_at'},--}}
                {{--    {data: 'password', name: 'password'},--}}
                {{--    {data: 'remember_token', name: 'remember_token'},--}}

                {{--    {data: "action", name: "action", orderable: false, searchable: false}--}}
                {{--]--}}
            })
        })
    </script>
@endsection
