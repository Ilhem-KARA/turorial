<?php

namespace App\Http\Controllers;

use App\Model\Like;
use App\Model\Reply;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function likeit(Reply $reply)
    {
        $reply->like()->create([
            'user_id' => '1',
        ]);
    }

    public function dislikeit(Reply $reply)
    {
        //$reply->like()->where(['user_id',auth()->id()])->first()->delete();
        $reply->like()->where('user_id', '1')->first()->delete();
    }
}
