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
        return view('home');
    }

    //Basic Controller page for all the static things on the blog. Simple functions with variables
    //Some variables coming from a database and others coded in already and returning them to the website.
}