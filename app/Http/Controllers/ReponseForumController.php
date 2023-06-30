<?php

namespace App\Http\Controllers;

use App\Models\MessageForum;
use App\Models\ReponseForum;
use Illuminate\Http\Request;

class ReponseForumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function create(MessageForum $mesforum){

        return view('forum.reponse', compact('mesforum'));
    }

    public function store(MessageForum $mesforum){
        request()->validate([
            'reponseforum' => 'required|min:2',

        ]);

        $reponse = new ReponseForum();
        $reponse->reponseforum = request('reponseforum');
        $reponse->user_id = auth()->user()->id;
        $reponse->message_forums_id = $mesforum->id;

        $reponse->save([$reponse]);
        return redirect()->route('forum.index');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReponseForum  $repforum
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReponseForum $repforum)
    {
        $repforum->delete();

    }

}
