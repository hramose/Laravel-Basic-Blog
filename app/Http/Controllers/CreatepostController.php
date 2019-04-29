<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class CreatepostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return 123;

        $posts = POST::all();
        return view('admin/getposts')->with('post_list', $posts);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin/create');
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
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $post_handler = new POST;
        $post_handler->title  =  $request->input('title');
        $post_handler->content = $request->input('content');



        $post_handler->save();

        return redirect()->back()->with('success','Post Added Succesfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $the_post = Post::find($id);

        return view('admin/edit')->with('the_post',$the_post);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $request->validate([
          'title_up' => 'required|max:255',
          'content_up' => 'required',
      ]);

      $post_update = Post::find($id);
      $post_update->title =   $request->input('title_up');
      $post_update->content = $request->input('content_up');
      $post_update->save();

      return redirect()->back()->with('success','Data uploaded Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_post = Post::find($id);
        $delete_post->delete();
        return redirect()->back()->with('success','Data Deleted Successfully');;

    }
}
