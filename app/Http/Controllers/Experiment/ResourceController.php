<?php

namespace App\Http\Controllers\Experiment;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id , $id2)
    {
      return 'ini adalah ' . $id . 'dan' . $id2;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'ini adalah create';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'ini adalah store';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id , string $id2 = 'aku')
    {
        return 'ini adalah ' . $id . 'dan';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return 'ini adalah edit' . $id ;

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return 'ini adalah update';

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 'ini adalah destroy';

    }
}
