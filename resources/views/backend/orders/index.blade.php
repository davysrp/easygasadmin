@extends("layouts.adminapp")
@section("title","Orders")
@section("card-title","Orders")
@section("create-route",route("orders.create"))
@section("table")
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Customer Id</th>
            <th>Payment Method Id</th>
            <th>Total</th>
            <th>Status</th>
            <th>Payment Status</th>

            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @for($i=1;$i<100;$i++)

            <tr>
                <td>{!! $i !!}</td>
                <td>{!! \Faker\Factory::create()->name !!}</td>
                <td>ABA PAY</td>
                <td>$15.00</td>
                <td><span class="badge badge-warning "> To Ship</span> </td>
                <td><span class="badge badge-success ">Paid</span> </td>
                <td>
                    <form action="#" method="POST">
                        <input name="_token" type="hidden" value="Xljt6tguqhFRYIMhVgqeskvKyT5c9UIUrezyOTu3"><input
                            type="hidden" name="_method" value="DELETE">
                        <div class="btn-group btn-group-xs pull-right" role="group"><a
                                href="{!! route('orders.show',1) !!}"
                                class="btn btn-sm btn-primary">View Detail</a>
{{--                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure want to delete')"><i class="fa fa-trash"></i>--}}
{{--                            </button>--}}
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
               /* processing: true,
                serverSide: true,
                ajax: "{!! route("orders.index") !!}",
                columns: [
                    {data: 'customer_id', name: 'customer_id'},
                    {data: 'payment_method_id', name: 'payment_method_id'},
                    {data: 'shipping_method_id', name: 'shipping_method_id'},
                    {data: 'driver_id', name: 'driver_id'},
                    {data: 'total', name: 'total'},
                    {data: 'status', name: 'status'},
                    {data: 'payment_status', name: 'payment_status'},

                    {data: "action", name: "action", orderable: false, searchable: false}
                ]*/
            })
        })
    </script>
@endsection
