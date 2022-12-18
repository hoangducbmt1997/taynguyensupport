<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Messages;

class messagesController extends Controller
{
   
   public function getAllMess(){
    return view('frontend.chat-to');
   }
}
