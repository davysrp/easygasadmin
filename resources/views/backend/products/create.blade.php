@extends('layouts.adminapp')
@section('title','Brands')
@section('content')
    @include(
     'backend.libs.createForm',[
         'route'=>'products.store',
         'model'=>null,
         'title'=>'Create New',
         'form_path'=>'backend.products.form'
        ])
@endsection
