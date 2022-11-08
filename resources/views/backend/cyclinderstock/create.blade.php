@extends('layouts.adminapp')
@section('title','Cylinder Stock')
@section('content')
    @include(
     'backend.libs.createForm',[
         'route'=>'cylinder-stocks.store',
         'model'=>null,
         'title'=>'Create New',
         'form_path'=>'backend.cyclinderstock.form'
        ])
@endsection
