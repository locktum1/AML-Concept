<?php

namespace App\Http\Controllers;

use App\Models\BorrowingHistory;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MediaController extends Controller
{
    public function MediaView(){
        $media = Media::find('1');
        $user = Auth::user();
        $borrowingHistory = BorrowingHistory

        return view('media',compact('media'));
    }
}
