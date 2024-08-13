<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function empresa()
    {
        return view('empresa');
    }
    public function infraestructura()
    {
        return view('infraestructura');
    }
    public function ubicacion()
    {
        return view('ubicacion');
    }
    public function certificacion()
    {
        return view('certificacion');
    }
    public function servicio()
    {
        return view('servicio');
    }
    public function enlace()
    {
        return view('enlace');
    }
    public function contacto()
    {
        return view('contacto');
    }
    public function blog()
    {
        $blog = Post::orderBy('created_at','Desc')->paginate(6);
        return view('blog', compact('blog'));
    }
    public function blog_details($id)
    {
        $post = Post::find($id);
        $data = Post::orderBy('created_at', 'desc')->limit(3)->get();
        return view('article', compact('post', 'data'));
    }
}
