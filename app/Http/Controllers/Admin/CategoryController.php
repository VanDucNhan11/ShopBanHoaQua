<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$data = Category::all();
            return view ('Admin.Category.Category', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Category.Action.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        if($data = Category::create
            (['nameCate' => $request->title,]))
        {
            return redirect()->action([CategoryController::class,'index'])->with('success', __('Add category success. '));
        }else{
            return redirect()->back()->withErrors('Add category error');
        }
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
        $data = Category::where('id',$id)->get();
        return view('Admin.Category.Action.edit', compact('data'));
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
        if($data = Category::where('id',$id)
            ->update(['nameCate' => $request->title,]))
        {
            return redirect()->action([CategoryController::class,'index'])->with('success', __('Update category success. '));
        }else{
            return redirect()->back()->withErrors('Update category error');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($data = Category::where('id',$id) ->delete())
        {
            return redirect()->action([CategoryController::class,'index'])->with('success', __('Delete category success. '));
        }else{
            return redirect()->back()->withErrors('Delete category error');
        }
        
    }

}
