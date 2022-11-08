@extends('layouts.adminapp')
                    @section('title','Payment Methods')
                    @section('content')
                       @include(
                        'backend.libs.createForm',[
                            'route'=>'payment-methods.store',
                            'model'=>null,
                            'title'=>'Create New',
                            'form_path'=>'backend.payment-methods.form'
                           ])
                    @endsection