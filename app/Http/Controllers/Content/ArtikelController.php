<?php

namespace App\Http\Controllers\Content;

use Carbon\Carbon;
use App\Models\Artikel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArtikelController extends Controller
{
    public function __invoke(){

        $artikel = Artikel::with('users')->get();

        
        return view('pages.content.artikel.artikel' , [
            'artikel' => $artikel
        ]);
    }

}
