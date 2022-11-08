@extends('layouts.adminapp')
@section('title','Brands')
@section('content')
    @include(
     'backend.libs.createForm',[
         'route'=>'brands.store',
         'model'=>null,
         'title'=>'Create New',
         'form_path'=>'backend.brands.form'
        ])
@endsection
