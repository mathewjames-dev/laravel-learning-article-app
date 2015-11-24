<?php
/**
 * Created by PhpStorm.
 * User: mjames
 * Date: 17/11/2015
 * Time: 16:15
 */

namespace App\Http\Controllers;


use App\Favcitie;
use App\Favteam;
use App\User;
use App\Article;
use DB;

class staticController extends Controller
{
    public function contact(){

        $firstname = 'Mathew';
        $secondname = 'James';
        $email = 'mattjames_95@outlook.com';
        $phone = '07913419307';

        return view('contact', compact('firstname', 'secondname', 'email', 'phone'));
    }

    public function about(){
        $favcities = Favcitie::all();

        $favteams = Favteam::all();

        return view('about', compact('favcities', 'favteams'));
    }

    public function home(){

        $users = User::count();
        //$latestUser = User::orderBy('created_at', 'DESC')->first();
        $latestUsers = User::orderBy('created_at', 'DESC')->take(3)->get();
        //This will get the first 3 in descending order and put it to a collection

        $articles = Article::orderBy('created_at', 'DESC')->take(3)->get();

        return view('home', compact('users', 'latestUsers', 'articles'));
    }

    //Basic Controller page for all the static things on the blog. Simple functions with variables
    //Some variables coming from a database and others coded in already and returning them to the website.
}