<?php
/**
 * Created by PhpStorm.
 * User: mjames
 * Date: 23/11/2015
 * Time: 09:38
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use App\User;

class profileController extends Controller
{
    public function show(Request $request)
    {
        //checks if the user is authenticated then outputs the users details into variables
        if (Auth::check()) {
            $username = Auth::user()->username;
            $email = Auth::user()->email;
            $user_id = Auth::id();
            $user = Auth::user();

            $artcount = Auth::user()->articles()->count();

            return view('profile', compact('username', 'email', 'user_id', 'user', 'artcount'));
        }
    }

    public function showProfile($id)
    {
        $user = User::findOrFail($id);

        return view('profileshow', compact('user'));
    }

    public function update(Request $request, $user_id)
    {
        // Get the user from the database into a User object
        $user = User::find($user_id);

        // Update the fields on the $user object for example $user->name = $request->get('name')
        $user->username = $request->get('username');
        $user->email = $request->get('email');

        // Save the $user object
        $user->save();


        // Now redirect somewhere:
        //return redirect()->route('route_name');
        // OR
        //return redirect('some_url');
        return redirect('/profile');
        // OR

        //return redirect()->action('SOME CONTROLLER ACTION');
    }

    public function articles()
    {
        if (Auth::check()) {
            $username = Auth::user()->username;
            $email = Auth::user()->email;
            $user_id = Auth::id();

            $articles = Auth::user()->articles;

            return view('profilearticles', compact('username', 'email', 'user_id', 'showart', 'articles'));
        }
    }

}