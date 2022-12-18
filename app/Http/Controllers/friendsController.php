<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Friends;
use App\Models\Messages;

class friendsController extends Controller
{
    public function followFriends($id){
        $id_user = auth()->user()->id;
        $friend = new Friends();
        $friend->id_user=$id_user;
        $friend->friend_id=$id;
        $friend->accept =1;
        $friend->save();
        $message = new Messages();
        $message->desc = 'Lời mời kết bạn mới từ';
        $message->vitri = 0;
        $message->id_user
        $message->id_friend
        $message->check = 0;



       return redirect()->back();
    }
    public function unFollowFriends($id){
        $friend = Friends::find($id);
        $friend->accept =0;
        $friend->save();
       return redirect()->back();
    }
    public function followNext($id){
        $friend = Friends::find($id);
        $friend->accept =1;
        $friend->save();
       return redirect()->back(); 
    }

}
