<?php

namespace App\Http\Controllers;

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
        $data = [
            'title' => 'Home',
        ];
        return view('main.home', $data);
    }

    public function petunjuk()
    {
        $data = [
            'title' => 'Petunjuk',
        ];
        return view('main.petunjuk', $data);
    }

    public function tentang()
    {
        $data = [
            'title' => 'Tentang Aplikasi',
        ];
        return view('main.tentang', $data);
    }

    public function pengembang()
    {
        $data = [
            'title' => 'Pengembang',
        ];
        return view('main.pengembang', $data);
    }

    public function rulebase()
    {
        $data = [
            'title' => 'Rule Base',
            'rulebase' => DB::table('item_diagnosa')->get(),
            'identifikasi' => DB::table('hasil_konsultasi')->get(),
        ];
        return view('main.rulebase', $data);
    }
}
