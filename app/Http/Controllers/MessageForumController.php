<?php

namespace App\Http\Controllers;

use App\Models\MessageForum;
use App\Models\ReponseForum;
use App\Models\User;
use Illuminate\Http\Request;

class MessageForumController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $mesforum = MessageForum::all();
        $user = User::all();
        $reponseforum = ReponseForum::all();
        return view('forum.index', compact('mesforum','user','reponseforum'));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        return view('forum.create', compact('user'));
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
            'conten_smsF' => 'required|min:2',

        ]);

        $mesforum = new MessageForum();
        $mesforum->conten_smsF = request('conten_smsF');
        $mesforum->user_id = auth()->user()->id;

        $mesforum->save([$mesforum]);
        //$data = $mesforum;
        //MessageForum::create($data);
        return redirect()->route('forum.index');
    }

      /**
     * Display the specified resource.
     *
     * @param  \App\Models\MessageForum  $mesforum
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(MessageForum  $mesforum, User  $user)
    {
        return view('forum.show', compact('mesforum', 'user'));
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MessageForum  $mesforum
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(MessageForum $mesforum, User $user)
    {
        $mesforum->delete();

        return redirect()->route('forum.index');
    }
}
