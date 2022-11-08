@extends('layouts.adminapp')
                    @section('title','Payment Methods')
                    @section('content')
                       @include(
                        'backend.libs.editForm',[
                            'route'=>'payment-methods.update',
                            'model'=>$payment_method,
                            'title'=>'Update Payment Methods',
                            'form_path'=>'backend.payment-methods.form'
                           ])
                    @endsection