<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class CustomController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:55',
            'email' => 'required|string|email|max:45|unique:users',
            'password' => [
                'required',
                'string',
                'min:8',
                'regex:/^[A-Za-z0-9@$!%*?&]{8,}$/',
            ],
            
        ], 
        [
            'name.required' => 'Ce champ est requis.',
            'email.required' => 'Ce champ est requis.',
            'email.unique' => 'Ce e-mail est déjà associé a un compte.',
            'password.required' => 'Ce champ est requis.',
            'password.min' => 'Ce champ doit contenir 8 caractères.',
            'password.regex' => 'Le mot de passe doit contenir au moins 8 caractères.'
        ]);
        $user = new User;
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect(route('blog.index'))->withSuccess("Votre compte à bien été créé");
    }


    public function authentification(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        $infos = $request->only('email','password');

        if(!Auth::validate($infos)):
            return redirect(route('login'))->withInput();
        endif;

        $user = Auth::getProvider()->retrieveByCredentials($infos);

        Auth::login($user);

        return redirect()->intended(route('user.list'));
        
    }
    public function logout()
    {
        Auth::logout();

        return redirect(route('login'));
            
    }

    public function userList()
    {

        return view('auth.user-list');

    }

  

        
    
}
