<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('destroy');;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sessions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$this->validate($request, [
            'user_email' => 'required', 'password' => 'required',
        ]);*/
        $credentials = ['user_email' =>request('user_email'), 'password'=> request('password')];

        $auth = auth()->attempt(request(['user_email','password'

            /*
            'user_login' => request('user_login'),
            'password' => request('password'),
            'user_pass' => request('password'),
            'user_email' => request('user_email'),
            'user_nicename' => request('user_login'),
            'user_url' => '/'.request('user_login')*/
        ]));

        if (! auth()->attempt(request($request)))
        {

            return back()->withErrors([
                'message' => 'fuck you']
            );
        }
        return redirect('/');

        /*
                if (auth()->attempt($credentials))
                {
                    return redirect('/');
                }

                return redirect('/login')
                    ->withInput($request->only('user_login', 'user_pass'))
                    ->withErrors([
                        'user_login' => $this->getFailedLoginMessage(),
                    ]);

        */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {

        auth()->validate([
            'user_email' => request('user_email'),
            'password' => request('password')
        ]);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.

        $a = auth()->attempt([
            'user_email' => request('user_email'),
            'password' => request('password')
        ]);
        dd($a);
        if (auth()->attempt([
            'user_email' => request('user_email'),
            'password' => request('password')
        ])) {

            return redirect('/');
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.


        return back()->withErrors([
                'message' => 'fuck you']
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        auth()->logout();
        return redirect('/');
    }
}
