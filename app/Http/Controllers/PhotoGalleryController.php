<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhotoGalleryRequest;
use App\Models\PhotoGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PhotoGalleryController extends Controller
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
            $query = PhotoGallery::query();

            return DataTables::of($query)
            ->editColumn('image', function($item){
                return '<img style="max-width: 150px" src="' . Storage::url($item->image) . '"/>';
            })
            ->editColumn('public', function($item){
                if($item->public == 0){
                    return
                        '<span class="text-xs px-2 font-medium bg-red-500 text-white rounded-full py-0.5">
                            private
                        </span>';
                }
                else{
                    return
                        '<span class="text-xs px-2 font-medium bg-green-500 text-white rounded-full py-0.5">
                            public
                        </span>';
                }
            })
            ->addColumn('action', function($item){
                return '
                    <form class="inline-block" action="' . route('dashboard.photogallery.destroy', $item->id) . '" method="POST">
                    <button class="border border-red-500 bg-red-500 text-white rounded-md px-2 py-1 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline" >
                        Delete
                    </button>
                        ' . method_field('delete') . csrf_field() . '
                    </form>';
            })
            ->rawColumns(['action', 'image', 'public'])
            ->make();
        }

        return view('pages.dashboard.photogallery.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.photogallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PhotoGalleryRequest $request)
    {
        $data = $request->all();
        $data['author'] = Auth::user()->id;
        $data['metadescription'] = $request->input('description');
        $data['image'] = $request->file('image')->store(
            'assets/photogallery', 'public'
        );

        PhotoGallery::create($data);
        return redirect()->route('dashboard.photogallery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PhotoGallery  $photoGallery
     * @return \Illuminate\Http\Response
     */
    public function show(PhotoGallery $photoGallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PhotoGallery  $photoGallery
     * @return \Illuminate\Http\Response
     */
    public function edit(PhotoGallery $photoGallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PhotoGallery  $photoGallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PhotoGallery $photoGallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PhotoGallery  $photoGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(PhotoGallery $photogallery)
    {
        $photogallery->delete();

        return redirect()->route('dashboard.photogallery.index');
    }
}
