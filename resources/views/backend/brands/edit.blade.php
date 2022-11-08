@extends('layouts.adminapp')
@section('title','Brands')
@section('content')
    @include(
     'backend.libs.editForm',[
         'route'=>'brands.update',
         'model'=>$brand,
         'title'=>'Update Brands',
         'form_path'=>'backend.brands.form'
        ])
@endsection
