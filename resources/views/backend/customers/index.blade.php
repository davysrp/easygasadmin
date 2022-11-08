@extends("layouts.adminapp")
@section("title","Customers")
@section("card-title","Customers")
@section("create-route",route("customers.create"))
@section("table")
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th>Full Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Status</th>
            <th>Action</th>

        </tr>
        </thead>
      <tbody>
      @for($i=1;$i<=100;$i++)
          <tr>
              <td>{!! $i !!}</td>
              <td>{!! Faker\Factory::create()->name !!}</td>
              <td>{!! Faker\Factory::create()->phoneNumber !!}</td>
              <td>{!! Faker\Factory::create()->email !!}</td>
              <td>Male</td>
              <td><span class="badge badge-success">Active</span> </td>
              <td>
                  <form action="#" method="POST">
                      <input name="_token" type="hidden" value="Xljt6tguqhFRYIMhVgqeskvKyT5c9UIUrezyOTu3"><input
                          type="hidden" name="_method" value="DELETE">
                      <div class="btn-group btn-group-xs pull-right" role="group"><a
                              href="{!! route('customers.edit',1) !!}"
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
                // processing: true,
                // serverSide: true,
                {{--ajax: "{!! route("customers.index") !!}",--}}
                {{--columns: [--}}
                {{--    {data: 'full_name', name: 'full_name'},--}}
                {{--    {data: 'phone_number', name: 'phone_number'},--}}
                {{--    {data: 'email', name: 'email'},--}}
                {{--    {data: 'gender', name: 'gender'},--}}
                {{--    {data: 'status', name: 'status'},--}}

                {{--    {data: "action", name: "action", orderable: false, searchable: false}--}}
                {{--]--}}
            })
        })
    </script>
@endsection
