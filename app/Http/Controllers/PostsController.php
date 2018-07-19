<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Post::all();
        $posts = Post::orderBy ('created_at','desc')->paginate( 5 );
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this ->validate($request, 
            [
                'title' => 'required' ,
                'details' => 'required',
                'cover_image' => 'image|nullable|max:100000'
            ]);

            //Handle File Upload
            if ($request->hasFile('cover_image' ))
            {
                //Get filename with the extension
                $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
                //Get just filename
                $filename =pathinfo($filenameWithExt, PATHINFO_FILENAME);
                //Get Ext
                $extension = $request->file('cover_image')->getClientOriginalExtension();
                //Filename store
                $fileNameToStore = $filename. '_' .time(). '.' .$extension;
                //Upload Image
                $path = $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
            } else {
                $fileNameToStore = 'noimage.jpg';
            }
            //Create Post
            $post = new Post;
            $post->title = $request->input( 'title' );
            $post->details = $request->input( 'details' );
            $post->user_id = auth()->user()->id;
            $post->cover_image = $fileNameToStore;
            $post->save();
            return redirect( '/home' )->with( 'success' , 'Post Created' );;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('posts',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view( 'posts.edit' )->with( 'post' , $post);
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
        $this ->validate($request, [
            'title' => 'required' ,
            'details' => 'required',
            'cover_image' => 'image|nullable|max:5000'
         ] );

        //Handle File Upload
            if ($request->hasFile( 'cover_image' ))
            {
                //Get filename with the extension
                $filenameWithExt = $request->file( 'cover_image' )->getClientOriginalName();
                //Get just filename
                $filename =pathinfo($filenameWithExt, PATHINFO_FILENAME);
                //Get Ext
                $extension = $request->file( 'cover_image' )->getClientOriginalExtension();
                //Filename store
                $fileNameToStore = $filename. '_' .time(). '.' .$extension;
                //Upload Image
                $path = $request->file( 'cover_image' )->storeAs( 'public/cover_images' ,
                $fileNameToStore);
            } else {
                $fileNameToStore = 'noimage.jpg' ;
            }
            $post = Post::find($id);
            $post->title = $request->input( 'title' );
            $post->details = $request->input( 'details' );
            $post->save();
            return redirect( '/home' )->with( 'success' , 'Post Updated' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete
        $post = Post::find($id);
        $post->delete();

        // redirect
        
        return redirect('/home')->with('success', 'POST DELETED!');
    }

    public function _construct()
    {
        $this->middleware('auth',['except' => ['main','show']] );
    }
}
