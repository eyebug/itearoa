<?php

namespace App\Http\Controllers;

use App\Mongodb;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Jenssegers\Mongodb\Query\Builder;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{

    /**
     * @var Builder
     */
    private $_collection;

    public function __construct()
    {
        $this->_collection = Mongodb::connectionMongodb("posts");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = $this->_collection->get(array('title'))->all();
        $isAdmin = Auth::check() && Auth::user()->name == 'admin';
        return view('posts.list', compact('posts', 'isAdmin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create')->with('title', 'Create post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'bail|required|max:255',
            'body' => 'required',
        ]);
        $userId = Auth::id();
        try {
            $post = array(
                'title' => $request->get('title'),
                'body' => $request->get('body'),
                'user_id' => $userId,
                'created_at' => Carbon::now()
            );
            $this->_collection->insert($post);
        } catch (\Exception $e) {
            return redirect()->action('PostsController@create');
        }

        return redirect()->route('postList');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = $this->_collection->where('_id', $id)->get()->first();
        $isAdmin = Auth::check() && Auth::user()->name == 'admin';
        return view('posts.show', compact('post', 'isAdmin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = $this->_collection->where('_id', $id)->get()->first();
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->get('id');
        $this->validate($request, [
            'title' => 'bail|required|max:255',
            'body' => 'required',
        ]);
        try {
            $post = array(
                'title' => $request->get('title'),
                'body' => $request->get('body'),
                'updated_at' => Carbon::now()
            );
            $this->_collection->where('_id', $id)->update($post);
        } catch (\Exception $e) {
            return redirect()->action('PostsController@edit', array('id' => $id));
        }

        return redirect()->action('PostsController@show', array('id' => $id));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $result = array(
            'status' => 0,
            'detail' => 'success'
        );
        $id = $request->get('id');
        try {
            $this->_collection->delete($id);
        } catch (\Exception $e) {
            $result['status'] = $e->getCode();
            $result['detail'] = "Delete post fail";
        }

        return response()->json($result);
    }
}
