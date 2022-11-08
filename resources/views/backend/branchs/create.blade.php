@extends('layouts.adminapp')
@section('title','Brands')
@section('content')
    @include(
     'backend.libs.createForm',[
         'route'=>'branches.store',
         'model'=>null,
         'title'=>'Create New',
         'form_path'=>'backend.branchs.form'
        ])
@endsection
