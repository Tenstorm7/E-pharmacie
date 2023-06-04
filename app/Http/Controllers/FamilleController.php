<?php

namespace App\Http\Controllers;

use App\Models\Famille;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class FamilleController extends Controller
{
    //

    
    //les methde de traitement 
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fam=Famille::all();

        return view('Famille.show', compact('fam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create():View
    {
        return view('Famille.index');
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
                'nom_fam' => ['required','max:255'],
                'descri_fam' => ['required','string' , 'min:20'],
               

            ]);

            
       

            $form=Famille::create([

               
                'nom_fam' => $request->nom_fam,
                'descri_fam' => $request->descri_fam,
                
                
            ]);
           

             
return redirect(route('famille.show'));
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Famille  $Famille
     * @return \Illuminate\Http\Response
     */
    public function show(Famille $Famille)
    {
        // dd($Famille->id);
        $cours=Famille::where('Familles_id','=',$Famille->id)->get();
        

        return view('Famille.show',compact('cours'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Famille  $Famille
     * @return \Illuminate\Http\Response
     */
    public function edit(Famille $Famille)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Famille  $Famille
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Famille $Famille)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Famille  $Famille
     * @return \Illuminate\Http\Response
     */
    public function destroy(Famille $Famille)
    {
        //
    }
}
