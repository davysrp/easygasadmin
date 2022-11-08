@extends('layouts.adminapp')
                    @section('title','Shipping Methods')
                    @section('content')
                       @include(
                        'backend.libs.editForm',[
                            'route'=>'shipping-methods.update',
                            'model'=>$shipping_method,
                            'title'=>'Update Shipping Methods',
                            'form_path'=>'backend.shipping-methods.form'
                           ])
                    @endsection