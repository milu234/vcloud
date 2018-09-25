<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Staff_Component;
use App\Http\Resources\Staff_Component as Staff_ComponentResource;

class Staff_ComponentController extends Controller
{
    public function index(){
        $components = Staff_Component::paginate(10);

        return Staff_ComponentResource::collection($components);
    }
}
