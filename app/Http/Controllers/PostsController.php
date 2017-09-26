<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{

    /**
     * @var Builder
     */
    private $_collection;

    const TAG_SEPARATOR = ',';

    public function __construct()
    {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($tag = null)
    {
        $tag = trim($tag);
        $query = $this->_collection->orderBy('created_at', 'desc');
        if (!empty($tag)) {
            $query->where('tags', 'all', array($tag));
        }
        $posts = $query->get(array('title', 'created_at'))->all();
        foreach ($posts as &$post) {
            $post['created_at'] = (new Carbon($post['created_at']['date'], $post['created_at']['timezone']))
                ->setTimezone(config('app.timezone'))->toDateTimeString();
        }
        $isAdmin = Auth::check() && Auth::user()->name == 'admin';
        return view('posts.list', compact('posts', 'isAdmin', 'tag'));
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
            'tags' => 'max:255',
        ]);
        $tags = array();
        foreach (explode(self::TAG_SEPARATOR, $request->get('tags')) as $tag) {
            $tags[] = trim($tag);
        }
        $userId = Auth::id();
        try {
            $post = array(
                'title' => $request->get('title'),
                'body' => $request->get('body'),
                'user_id' => $userId,
                'created_at' => Carbon::now(),
                'tags' => $tags
            );
            $this->_collection->insert($post);
        } catch (\Exception $e) {
            return redirect()->action('PostsController@create');
        }

        return redirect()->route('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  string $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = $this->_collection->where('_id', $id)->get()->first();
        if (!$post) {
            return redirect()->route('home');
        }
        $post['created_at'] = (new Carbon($post['created_at']['date'], $post['created_at']['timezone']))
            ->setTimezone(config('app.timezone'))->toDateTimeString();
        if (!empty($post['updated_at'])) {
            $post['updated_at'] = (new Carbon($post['updated_at']['date'], $post['updated_at']['timezone']))
                ->setTimezone(config('app.timezone'))->toDateTimeString();
        }
        if (empty($post['tags'])) {
            $post['tags'] = array();
        }
        $isAdmin = Auth::check() && Auth::user()->name == 'admin';
        return view('posts.show', compact('post', 'isAdmin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = $this->_collection->where('_id', $id)->get()->first();
        $post['created_at'] = (new Carbon($post['created_at']['date'], $post['created_at']['timezone']))
            ->setTimezone(config('app.timezone'))->toDateTimeString();
        if (!empty($post['updated_at'])) {
            $post['updated_at'] = (new Carbon($post['updated_at']['date'], $post['updated_at']['timezone']))
                ->setTimezone(config('app.timezone'))->toDateTimeString();
        }
        if (!empty($post['tags'])) {
            $post['tags'] = implode(self::TAG_SEPARATOR, $post['tags']);
        } else {
            $post['tags'] = '';
        }
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
            'tag' => 'max:255'
        ]);
        $tags = array();
        foreach (explode(self::TAG_SEPARATOR, $request->get('tags')) as $tag) {
            $tags[] = trim($tag);
        }
        try {
            $post = array(
                'title' => $request->get('title'),
                'body' => $request->get('body'),
                'updated_at' => Carbon::now(),
                'tags' => $tags,
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
