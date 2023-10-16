<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return "post API";
    }

    public function create(){
        return "create";
    }

    public function store(){
        return "store";
    }

    public function show(){
        return "show";
    }

    public function edit(){
        return "edit";
    }

    public function update(){
        return "updater";
    }

    public function delete(){
        return "delete";
    }

    public function like(){
        return "like";
    }
}
