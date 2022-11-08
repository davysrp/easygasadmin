@extends('layouts.adminapp')
@section('title','Role')
@section('content')
    @include(
     'backend.libs.createForm',[
         'route'=>'roles.store',
         'model'=>null,
         'title'=>'Create New',
         'form_path'=>'backend.roles.form'
        ])
@endsection
