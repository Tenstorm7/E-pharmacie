<?php

namespace App\Http\Controllers;

use App\Models\Conseil;
use Illuminate\Http\Request;

class ConseilController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conseils = Conseil::paginate(10);
        return view('conseil.index', compact('conseils'));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('conseil.create');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'theme' => 'required',
            'contenue' => 'required',

        ]);

        $data = $request->except('_token');
        Conseil::create($data);
        return redirect()->route('conseil.index');
    }

      /**
     * Display the specified resource.
     *
     * @param  \App\Models\Conseil  $conseil
     * @return \Illuminate\Http\Response
     */
    public function show(Conseil $conseil)
    {
        return view('conseil.show', compact('conseil'));
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Conseil  $conseil
     * @return \Illuminate\Http\Response
     */
    public function edit(Conseil $conseil)
    {
        return view('conseil.edit', compact('conseil'));
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Conseil  $conseil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conseil $conseil)
    {
        $request->validate([
            'theme' => 'required',
            'contenue' => 'required',
        ]);

        $data = $request->except('_token');
        $conseil->update($data);
        return redirect()->route('conseil.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Conseil  $conseil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conseil $conseil)
    {
        $conseil->delete();

        return redirect()->route('conseil.index');
    }
}
