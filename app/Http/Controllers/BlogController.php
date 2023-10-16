<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return "Посты в блоге";
    }

    public function store($post){

        return 'Один пост в блоге';
        
    }

    public function like($post){

        return 'Поставить Лайк';

    }

}

