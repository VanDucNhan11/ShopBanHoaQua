<?php

namespace App\Http\Controllers\Admin;
use App\Models\Product;
use App\Models\TypeProduct;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image as Image;

class ProductController extends Controller
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
        $data = Product::all();
        return view('Admin.Product.Product', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $data = TypeProduct::all();
        return view('Admin.Product.Action.add', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        foreach($request->file('filename') as $image)
            {

                $name = $image->getClientOriginalName();
                $name_2 = "2".$image->getClientOriginalName();
                $name_3 = "3".$image->getClientOriginalName();

                $path = public_path('upload/product/' . $name);
                $path2 = public_path('upload/product/' . $name_2);
                $path3 = public_path('upload/product/' . $name_3);

                Image::make($image->getRealPath())->save($path);
                Image::make($image->getRealPath())->resize(50, 70)->save($path2);
                Image::make($image->getRealPath())->resize(200, 300)->save($path3);
                $data[] = $name;
            }

        $type = TypeProduct::where('id',$request->type)->get()->toArray();    
        
        // dd($type[0]['id']);


        if(Product::create([
                'name' => $request->name,
                'idType' => $request->type,
                'image' => json_encode($data),
                'description'=> $request->description,
                'unitCal' => $type[0]['unitCal'],
                'price' => $request->price,
                'quantity' => $request->quantity,
            ]))
        {
            return redirect()->action([ProductController::class,'index'])->with('success', __('Create Product success. '));
        }
        else
        {
            return redirect()->back()->withErrors('Create Product fail');
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
        $data = Product::where('id',$id)->get();
        $dataType = TypeProduct::all();
        
        // $dataType = TypeProduct::where('id',$data[0]['idType'])->get();
        return view('Admin.Product.Action.edit', compact('data','dataType'));
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
        $rqimg=[];

        $getProducts = Product::where('id',$request->id)->get()->toArray();

        $img = json_decode($getProducts[0]['image'], true);

        // dd($getBlogs);

        $rqimg=$request->checkimg;
        
        if($request->checkimg){
            $rqimg=$request->checkimg;
            foreach ($img as $row=> $value) {
                if(in_array($value , $rqimg)){
                    unset($img[$row]);
                }
            }
        }
        
        $img=array_values($img);    
        
        if($request->hasFile('filename')){
            foreach($request->file('filename') as $image)
            {

                $name = $image->getClientOriginalName();
                $name_2 = "2".$image->getClientOriginalName();
                $name_3 = "3".$image->getClientOriginalName();
                
                $path = public_path('upload/product/' . $name);
                $path2 = public_path('upload/product/' . $name_2);
                $path3 = public_path('upload/product/' . $name_3);

                Image::make($image->getRealPath())->save($path);
                Image::make($image->getRealPath())->resize(50, 70)->save($path2);
                Image::make($image->getRealPath())->resize(200, 300)->save($path3);
                
                $data[] = $name;
                
                $result = array_merge($data, $img);
                
            }
        }else{
            $result = $img;
        }

        $count = count($result);

        if($count > 3){
            return redirect()->action([ProductController::class,'index'])->withErrors('Hình ảnh không được lớn quá 3');
        }

        // dd($result);

        $type = TypeProduct::where('id',$request->type)->get()->toArray();  

        Product::where('id',$request->id)->update([
                'name' => $request->name,
                'idType' => $request->type,
                'image' => json_encode($result),
                'description'=> $request->description,
                'unitCal' => $type[0]['unitCal'],
                'price' => $request->price,
                'quantity' => $request->quantity,
                ]);
        
        return redirect()->action([ProductController::class,'index'])->with('success', __('Update Product success. '));
    }   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Blog::where('id',$id) ->delete()){
            return redirect()->action([ProductController::class,'index'])->with('success', __('Delete Product success. '));
        }
        else
        {
            return redirect()->back()->withErrors('Delete Product fail');
        }
    }
}
