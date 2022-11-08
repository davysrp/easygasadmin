@extends("layouts.adminapp")
@section("title","Shipping Methods")
@section("card-title","Shipping Methods")
@section("create-route",route("shipping-methods.create"))
@section("table")
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Name</th>
<th>Status</th>
<th>Fee</th>

            <th>Action</th>
        </tr>
        </thead>
    </table>
@endsection
@section("datatable")
    <script>
        $(document).ready(function () {
            $("table").dataTable({
                processing: true,
                serverSide: true,
                ajax: "{!! route("shipping-methods.index") !!}" ,
                columns: [
                    {data: 'name', name: 'name'},
{data: 'status', name: 'status'},
{data: 'fee', name: 'fee'},

                    {data: "action", name: "action", orderable: false, searchable: false}
                ]
            })
        })
    </script>
@endsection