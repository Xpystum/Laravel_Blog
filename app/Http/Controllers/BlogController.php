<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){

        $post = (object) [
            'id'=> 123,
            'title' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis, nostrum.',
            'content' => 'Lorem ipsum, <strong>dolor</strong> sit amet',
        ];


        $posts = array_fill(0, 10, $post);
        return view('blog.index', compact('posts'));
    }

    public function show($post){
        $post = (object) [
            'id'=> 123,
            'title' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis, nostrum.',
            'content' => 'Lorem ipsum, <strong>dolor</strong> sit amet',
        ];
        
        return view('blog.show', compact('post'));

    }

    public function like($post){

        return 'Поставить Лайк';

    }

}

