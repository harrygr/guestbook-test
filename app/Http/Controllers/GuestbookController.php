<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GuestbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('guestbook');
    }

    public function getPosts()
    {
        return Post::orderBy('created_at', 'desc')->get();
    }

    public function store(Request $request)
    {
        Post::create($request->all());
    }

    
}
