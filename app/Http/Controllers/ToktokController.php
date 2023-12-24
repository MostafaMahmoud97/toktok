<?php

namespace App\Http\Controllers;

use App\Models\ToktokDescription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class ToktokController extends Controller
{
    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            "details" => "required|max:500"
        ]);

        if ($validator->fails()){
            Response::errorResponse($validator->errors());
        }

        $Description = ToktokDescription::create($request->all());

        return Response::successResponse($Description,"save success");
    }

    public function index(){
        $Descriptions = ToktokDescription::get();
        return Response::successResponse($Descriptions,"fetch success");
    }
}
