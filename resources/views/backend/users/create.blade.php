@extends('layouts.adminapp')
@section('title','Users')
@section('content')
    @include(
     'backend.libs.createForm',[
         'route'=>'users.store',
         'model'=>null,
         'title'=>'User Form',
         'form_path'=>'backend.users.form'
        ])
@endsection
