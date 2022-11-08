@extends('layouts.adminapp')
@section('title','Product Stock')
@section('content')
    @include(
     'backend.libs.createForm',[
         'route'=>'product-stocks.store',
         'model'=>null,
         'title'=>'Create New',
         'form_path'=>'backend.productstock.form'
        ])
@endsection
