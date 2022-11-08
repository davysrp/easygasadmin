@extends('layouts.adminapp')
                    @section('title','Drivers')
                    @section('content')
                       @include(
                        'backend.libs.editForm',[
                            'route'=>'drivers.update',
                            'model'=>$driver,
                            'title'=>'Update Drivers',
                            'form_path'=>'backend.drivers.form'
                           ])
                    @endsection