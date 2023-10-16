<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return "Index Admin";
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
