<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function home(Request $request)
    {
        $usuario = $request->input('UserName');
        $contraseña = $request->input('UserPass');
        
        $users = User::all();
        
        foreach($users as $user){
            if($usuario == $user->name && $contraseña == $user->password ){
                return view('pagina/home');
            }else{
                return view('pagina/login');
            }
        }
        // return $users;
    }

    public function company()
    {
        return view('pagina/company');
    }

    public function category()
    {
        return view('pagina/category');
    }

    public function provider()
    {
        return view('pagina/provider');
    }

    public function book()
    {
        return view('pagina/book');
    }

    public function admin()
    {
        return view('pagina/admin');
    }

    public function adminList()
    {
        $users = User::all();
        // return view('pagina/admin-list',$users);
        // $users=json_decode($usersall);
        // return response('pagina/admin-list',$users);
        return response()->view('pagina/admin-list',['users'=>$users]);
        // return compact($users);
        // $usuarios = json_decode()
        // return view('pagina/admin',compact($usuarios));
        // return response()->view('pagina/admin-list',$users);
    }

    public function adminSearch()
    {
        return view('pagina/admin-search');
    }

    public function client()
    {
        return view('pagina/client');
    }

    public function catalog()
    {
        return view('pagina/catalog');
    }
}
