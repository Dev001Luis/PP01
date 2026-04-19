<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Handle the landing page "Uplink".
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Handle AJAX Contact Requests.
     */

    public function about()
    {
        return view('about');
    }

    public function contactPage()
    {
        return view('contact');
    }
}
