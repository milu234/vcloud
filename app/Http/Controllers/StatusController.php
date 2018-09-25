<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Status;
use App\Http\Resources\Status as StatusResource;



class StatusController extends Controller
{
    public function index(){
        $stat = Status::paginate(10);
        return StatusResource::collection($stat);
    }
}
