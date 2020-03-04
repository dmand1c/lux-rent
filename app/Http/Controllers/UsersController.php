<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display users index page with all users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->paginate(15);
        return view('users.index')->with('users', $users );
    }

    /**
     * Show user creation form.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create_user');
    }

    /**
     * Create new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Validate input
        $this->validate($request, [
            'first_name' => ['required', 'string', 'max:255',],
            'last_name' => ['required', 'string', 'max:255',],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users',],
            'password' => ['required', 'string', 'min:8',],
            'role' => ['required', 'string'],
        ]);

        // Create user
        User::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role' => $request->input('role'),
        ]);

        return redirect()->route('admin.all-users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Edit selected user profile.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit_user')->with('user', $user);
    }

    /**
     * Update selected user profile.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate input
        $this->validate($request, [
            'first_name' => ['required', 'string', 'max:255',],
            'last_name' => ['required', 'string', 'max:255',],
            'email' => ['required', 'string', 'email', 'max:255',],
            'password' => ['required', 'string', 'min:8',],
            'role' => ['required', 'string'],
        ]);
        
        // Update user
        $user = User::findOrFail($id);
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->role = $request->input('role');
        $user->save();

        return redirect()->route('admin.all-users');
    }

    /**
     * Check if user is admin, if true reload page, if  false delete user
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        
        if ($user->is_admin) {
            return redirect()->route('admin.all-users');
        } else {
            $user->delete();
            return redirect()->route('admin.all-users');
        } 
    }
}