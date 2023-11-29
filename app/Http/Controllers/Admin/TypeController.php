<?php

namespace App\Http\Controllers\Admin;
use App\Models\TypeProduct;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TypeController extends Controller
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
    	$data = TypeProduct::all();
            return view ('Admin.TypeProduct.TypeProduct', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.TypeProduct.Action.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        if($data = TypeProduct::create
            (['nameType' => $request->nameType,
                'unitCal' => $request->unitCal,
        ]))
        {
            return redirect()->action([TypeController::class,'index'])->with('success', __('Add Type Product success. '));
        }else{
            return redirect()->back()->withErrors('Add Type Product error');
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
        $data = TypeProduct::where('id',$id)->get();
        return view('Admin.TypeProduct.Action.edit', compact('data'));
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
        if($data = TypeProduct::where('id',$id)
            ->update(['nameType' => $request->nameType,
                'unitCal' => $request->unitCal,]))
        {
            return redirect()->action([TypeController::class,'index'])->with('success', __('Update Type Product success. '));
        }else{
            return redirect()->back()->withErrors('Update Type Product error');
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
        if($data = TypeProduct::where('id',$id) ->delete())
        {
            return redirect()->action([TypeController::class,'index'])->with('success', __('Delete Type Product success. '));
        }else{
            return redirect()->back()->withErrors('Delete Type Product error');
        }
        
    }

}
