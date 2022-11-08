@extends('layouts.adminapp')
@section('title','Order Detail')
@section('content')
    @include(
     'backend.libs.createForm',[
         'route'=>'orders.store',
         'model'=>null,
         'title'=>'Order Detail',
         'form_path'=>'backend.orders.detail'
        ])
@endsection
