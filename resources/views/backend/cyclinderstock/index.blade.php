@extends("layouts.adminapp")
@section("title","Cylinder Stock")
@section("card-title","Cylinder Stock")
@section("create-route",route("cylinder-stocks.create"))
@section("table")
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Branch</th>
            <th>Product Name</th>
            <th>Product Option</th>
            <th>Product Code</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @for($i=1;$i<50;$i++)
            <tr>
                <td>{!! $i !!}</td>
                <td>Branch 1</td>
                <td>Product Name {!! $i !!}</td>
                <td>{!! $i !!}kg</td>
                <td> 100</td>
                <td>
                    <form action="#" method="POST">
                        <input name="_token" type="hidden" value="Xljt6tguqhFRYIMhVgqeskvKyT5c9UIUrezyOTu3"><input
                            type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure want to delete')"><i class="fa fa-trash"></i>
                            </button>
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
                // processing: true,
                // serverSide: true,
                {{--ajax: "{!! route("brands.index") !!}",--}}
                {{--columns: [--}}
                {{--    {data: 'name', name: 'name'},--}}
                {{--    {data: 'status', name: 'status'},--}}

                {{--    {data: "action", name: "action", orderable: false, searchable: false}--}}
                {{--]--}}
            })
        })
    </script>
@endsection
