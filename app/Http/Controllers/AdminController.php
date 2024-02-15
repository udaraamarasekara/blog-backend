<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Post\PostService;
use Illuminate\Http\Request;

class AdminController extends Controller
{

  public function __construct(protected PostService $postService)
  {

  }  
  public function newPost(Request $request)
  {
    $this->validateInput($request); 
    return $this->postService->newPost($request->all());  
  }

  public function validateInput(Request $request)
  {
     $request->validate([
        'title'=>'string|required',
        'content'=>'string|required',
        'files.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);
  }
}
