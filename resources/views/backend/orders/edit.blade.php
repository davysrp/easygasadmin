@extends('layouts.adminapp')
                    @section('title','Orders')
                    @section('content')
                       @include(
                        'backend.libs.editForm',[
                            'route'=>'orders.update',
                            'model'=>$order,
                            'title'=>'Update Orders',
                            'form_path'=>'backend.orders.form'
                           ])
                    @endsection