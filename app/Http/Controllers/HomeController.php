<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Mail\EmailContact;
use Illuminate\Http\Request;
use App\Models\PopupNotification;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $popup = PopupNotification::where('estado', '1')->first();

        return view('index', compact('popup'));
    }
    public function empresa()
    {
        return view('empresa');
    }
    public function infraestructura()
    {
        return view('infraestructura');
    }
    public function partners()
    {
        return view('alianzas');
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

    public function contact_store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
            'phone' => 'required',
            'company' => 'required',
            'subject' => 'required',
        ]);
        try {
            Mail::to('rosanyelismendoza@gmail.com')
                ->send(new EmailContact($request->name, $request->phone, $request->company,
                         $request->subject, $request->email, $request->message
                         ));

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false]);
        }

    }
}
