<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax())
        {
            $query = Blog::query();

            return DataTables::of($query)
            ->editColumn('thumbnail', function($item){
                return '<img style="max-width: 150px" src="' . Storage::url($item->thumbnail) . '"/>';
            })
            ->editColumn('description', function($item){
                return Str::limit($item->description, '250');
            })
            ->addColumn('action', function($item){
                return '
                    <a class="inline-block border border-gray-700 bg-gray-700 text-white rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline"
                        href="' . route('dashboard.blog.edit', $item->slug) . '">
                        Edit
                    </a>
                    <form class="inline-block" action="' . route('dashboard.blog.destroy', $item->slug) . '" method="POST">
                    <button class="border border-red-500 bg-red-500 text-white rounded-md px-2 py-1 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline" >
                        Delete
                    </button>
                        ' . method_field('delete') . csrf_field() . '
                    </form>';
            })
            ->rawColumns(['action', 'thumbnail'])
            ->make();
        }

        return view('pages.dashboard.blog.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        $data = $request->all();
        $data['thumbnail'] = $request->file('thumbnail')->store(
            'assets/blogthumbnail', 'public'
        );

        $data['author'] = Auth::user()->id;
        $data['slug'] = Str::slug($request->title);

        Blog::create($data);
        return redirect()->route('dashboard.blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('pages.dashboard.blog.edit', [
            'item' => $blog
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, Blog $blog)
    {
        $data = $request->all();
        $data['thumbnail'] = $request->file('thumbnail')->store(
            'assets/blogthumbnail', 'public'
        );

        $data['author'] = Auth::user()->id;
        $data['slug'] = Str::slug($request->title);

        $blog->update($data);

        return redirect()->route('dashboard.blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('dashboard.blog.index');
    }
}
