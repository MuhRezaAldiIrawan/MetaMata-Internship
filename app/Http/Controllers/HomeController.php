<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $resep = DB::table('reseps')->latest()->get();

        return view('home', ['resep' => $resep]);
    }

    public function likePost(Request $request, $id)
    {
        // dd($request);
        $suka = Resep::find($id);
        $suka->suka += $request->input('suka');
        $suka->save();

        return redirect('/home');
    }
}
