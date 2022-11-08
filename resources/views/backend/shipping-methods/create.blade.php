@extends('layouts.adminapp')
                    @section('title','Shipping Methods')
                    @section('content')
                       @include(
                        'backend.libs.createForm',[
                            'route'=>'shipping-methods.store',
                            'model'=>null,
                            'title'=>'Create New',
                            'form_path'=>'backend.shipping-methods.form'
                           ])
                    @endsection