@extends("layouts.adminapp")
@section("title","Payment Methods")
@section("card-title","Payment Methods")
@section("create-route",route("payment-methods.create"))
@section("table")
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th>Icon</th>
            <th>Name</th>
            <th>Tag Line</th>
            <th>Status</th>
            <th>Sort Order</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td></td>
            <td>ABA PAY</td>
            <td></td>
            <td><span class="badge badge-success">Active</span></td>
            <td>1</td>
            <td>
                <form action="#" method="POST">
                    <input name="_token" type="hidden" value="Xljt6tguqhFRYIMhVgqeskvKyT5c9UIUrezyOTu3"><input
                        type="hidden" name="_method" value="DELETE">
                    <div class="btn-group btn-group-xs pull-right" role="group"><a
                            href="{!! route('payment-methods.edit',1) !!}"
                            class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure want to delete')"><i class="fa fa-trash"></i>
                        </button>
                    </div>
                </form>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td></td>
            <td>ACLEDA PAY</td>
            <td></td>
            <td><span class="badge badge-success">Active</span></td>
            <td>1</td>
            <td>
                <form action="#" method="POST">
                    <input name="_token" type="hidden" value="Xljt6tguqhFRYIMhVgqeskvKyT5c9UIUrezyOTu3"><input
                        type="hidden" name="_method" value="DELETE">
                    <div class="btn-group btn-group-xs pull-right" role="group"><a
                            href="{!! route('payment-methods.edit',1) !!}"
                            class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure want to delete')"><i class="fa fa-trash"></i>
                        </button>
                    </div>
                </form>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td></td>
            <td>Wing PAY</td>
            <td></td>
            <td><span class="badge badge-success">Active</span></td>
            <td>1</td>
            <td>
                <form action="#" method="POST">
                    <input name="_token" type="hidden" value="Xljt6tguqhFRYIMhVgqeskvKyT5c9UIUrezyOTu3"><input
                        type="hidden" name="_method" value="DELETE">
                    <div class="btn-group btn-group-xs pull-right" role="group"><a
                            href="{!! route('payment-methods.edit',1) !!}"
                            class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure want to delete')"><i class="fa fa-trash"></i>
                        </button>
                    </div>
                </form>
            </td>
        </tr>
        </tbody>
    </table>
@endsection
@section("datatable")
    <script>
        $(document).ready(function () {
            $("table").dataTable({
                {{--processing: true,--}}
                {{--serverSide: true,--}}
                {{--ajax: "{!! route("payment-methods.index") !!}",--}}
                {{--columns: [--}}
                {{--    {data: 'icon', name: 'icon'},--}}
                {{--    {data: 'name', name: 'name'},--}}
                {{--    {data: 'tag_line', name: 'tag_line'},--}}
                {{--    {data: 'status', name: 'status'},--}}
                {{--    {data: 'sort_order', name: 'sort_order'},--}}

                {{--    {data: "action", name: "action", orderable: false, searchable: false}--}}
                {{--]--}}
            })
        })
    </script>
@endsection
