@extends('layouts.adminapp')
                    @section('title','Customers')
                    @section('content')
                       @include(
                        'backend.libs.editForm',[
                            'route'=>'customers.update',
                            'model'=>$customer,
                            'title'=>'Update Customers',
                            'form_path'=>'backend.customers.form'
                           ])
                    @endsection