<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductCategoryRequest;
use App\Http\Requests\ProductCategoryUpdateRequest;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class ProductCategoryController extends Controller
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
            $query = ProductCategory::query();

            return DataTables::of($query)
                ->editColumn('thumbnail', function($item){
                    return '<img style="max-width: 150px" src="' . Storage::url($item->thumbnail) . '"/>';
                })
                ->addColumn('action', function($item){
                    return '
                        <a class="inline-block border border-gray-700 bg-gray-700 text-white rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline"
                            href="' . route('dashboard.category.edit', $item->slug) . '">
                            Edit
                        </a>
                        <form class="inline-block" action="' . route('dashboard.category.destroy', $item->slug) . '" method="POST">
                        <button class="border border-red-500 bg-red-500 text-white rounded-md px-2 py-1 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline" >
                            Hapus
                        </button>
                            ' . method_field('delete') . csrf_field() . '
                        </form>';
                })
                ->rawColumns(['action', 'thumbnail'])
                ->make();
        }

        return view('pages.dashboard.category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductCategoryRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->category);

        $data['thumbnail'] = $request->file('thumbnail')->store(
            'assets/categorythumbnail', 'public'
        );

        ProductCategory::create($data);

        return redirect()->route('dashboard.category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategory $category)
    {
        return view('pages.dashboard.category.edit', [
            'item' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function update(ProductCategoryUpdateRequest $request, ProductCategory $category)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->category);

        if($request->hasFile('thumbnail')){
            $data['thumbnail'] = $request->file('thumbnail')->store(
                'assets/categorythumbnail', 'public'
            );
        }

        $category->update($data);

        return redirect()->route('dashboard.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategory $category)
    {
        $category->delete();

        return redirect()->route('dashboard.category.index');
    }
}
