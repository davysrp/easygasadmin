<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function viewPath()
    {
        return 'backend.';
    }

    public function actionButton($model,$edit,$delete,$view,$typeId='',$setId='',$type='')
    {
        $btn = '<form action="'.route($delete,$model->id).'" method="post"> '.csrf_field().method_field("DELETE");
        $btn .= '<div class="btn-group btn-group-xs pull-right" role="group">';
        $btn .= '<a href="' . route($view, $model->id) . '" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>';
        if ($typeId != '') {
            $btn .= '<a href="' . route($edit,[ $model->id,'typeId'=>$typeId,'setId'=>$setId,'type'=>$type]) . '" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>';
        }else{
            $btn .= '<a href="' . route($edit,[ $model->id]) . '" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>';

        }
        $btn .= '<button class="btn btn-sm btn-danger"  onclick="return confirm(&quot;Click Ok to delete .&quot;)"><i class="fa fa-trash"></i></button>';
        $btn .= '</div>';
        $btn .= '</form>';
        return $btn;
    }

    public function statusAttr($status)
    {
        if ($status=='Active')
            $str = '<small class="badge badge-success">Active</small>';
        $str = '<small class="badge badge-danger">Inactive</small>';

        return $str;
    }

    public function ruleLabel($rule)
    {
        return '<small class="badge badge-secondary">'.$rule.'</small>';
    }

}
