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
    public function contact(Request $request)
    {
        // For now, we just return a success signal.
        // Later, we can add Mail or DB logic here.
        return response()->json([
            'status' => 'success',
            'message' => 'UPLINK_ESTABLISHED: Message received by PP01.'
        ]);
    }
}
