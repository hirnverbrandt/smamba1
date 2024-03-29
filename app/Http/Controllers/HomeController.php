<?php
/**
 * Created by PhpStorm.
 * User: lucabrandt
 * Date: 2019-01-19
 * Time: 15:08
 */
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Menampilkan Log
        return view('home');
    }

    public function checksession()
    {
        if(Auth::check()) {
            return redirect('/home');
        }

        return view('auth.login');
    }
}
