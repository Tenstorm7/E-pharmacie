<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PersonnelController extends Controller
{
    //les methde de traitement 
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pers=Personnel::all();

        return view('Personnel.index', compact('pers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create():View
    {
        return view('Personnel.index');
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
                'nom_pers' => ['required','max:255'],
                'prenom_pers' => ['required','string' , 'min:10'],
                'tel_pers' => ['required'],
                'email_pers' => ['required', 'string','max:255'],
                'dateN_pers' => ['required','date'],
                'url_pers' => ['required'],
                'adress_pers' => ['required'],
                'qualif_pers' => ['required'],

            ]);

            


            // $extension=substr(strrchr($request->url_pers,'.'),1);
            
        // renommer le fichier avant de le stocker par la suite

        $filename= 'Personnel'.time().'.'. $request->url_pers->extension();
        
        
       
       

       $path= $request->url_pers->storeAs(
            'PersonnelImage',
            $filename,
            'public'
        );

       

            $form=Personnel::create([

               'url_pers' => $path,
                'nom_pers' => $request->nom_pers,
                'prenom_pers' => $request->prenom_pers,
                'tel_pers' => $request->tel_pers,
                'email_pers'=>$request->email_pers,
                'dateN_pers' => $request->dateN_pers,
                'adress_pers' => $request->adress_pers,
                'qualif_pers' => $request->qualif_pers,
                
            ]);
           

             
return redirect(route('Personnel.index'));
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Personnel  $Personnel
     * @return \Illuminate\Http\Response
     */
    public function show(Personnel $Personnel)
    {
        // dd($Personnel->id);
        $cours=Personnel::where('Personnels_id','=',$Personnel->id)->get();
        

        return view('Personnel.show',compact('cours'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Personnel  $Personnel
     * @return \Illuminate\Http\Response
     */
    public function edit(Personnel $Personnel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Personnel  $Personnel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personnel $Personnel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Personnel  $Personnel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personnel $Personnel)
    {
        //
    }
}
