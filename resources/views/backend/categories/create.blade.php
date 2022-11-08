@extends('layouts.adminapp')
@section('title','Category')
@section('content')
    @include(
     'backend.libs.createForm',[
         'route'=>'categories.store',
         'model'=>null,
         'title'=>'Create New',
         'form_path'=>'backend.categories.form'
        ])
@endsection
