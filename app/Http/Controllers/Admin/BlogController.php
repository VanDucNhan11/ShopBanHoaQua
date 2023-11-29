<?php

namespace App\Http\Controllers\Admin;
use App\Models\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image as Image;

class BlogController extends Controller
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
        $data = Blog::all();
        return view('Admin.Blog.Blog', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Blog.Action.add');
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

                $path = public_path('upload/blog/' . $name);
                $path2 = public_path('upload/blog/' . $name_2);
                $path3 = public_path('upload/blog/' . $name_3);

                Image::make($image->getRealPath())->save($path);
                Image::make($image->getRealPath())->resize(50, 70)->save($path2);
                Image::make($image->getRealPath())->resize(200, 300)->save($path3);
                $data[] = $name;
            }

        
        if(Blog::create([
                'title' => $request->title,
                'idUser' => Auth::id(),
                'image' => json_encode($data),
                'description'=> $request->description,
            ]))
        {
            return redirect()->action([BlogController::class,'index'])->with('success', __('Create blog success. '));
        }
        else
        {
            return redirect()->back()->withErrors('Create blog fail');
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
        $data = Blog::where('id',$id)->get();
        return view('Admin.Blog.Action.edit', compact('data'));
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

        $getBlogs = Blog::where('id',$request->id)->get()->toArray();

        $img = json_decode($getBlogs[0]['image'], true);

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
                
                $path = public_path('upload/blog/' . $name);
                $path2 = public_path('upload/blog/' . $name_2);
                $path3 = public_path('upload/blog/' . $name_3);

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
            return redirect()->action([BlogController::class,'index'])->withErrors('Hình ảnh không được lớn quá 2');
        }

        // dd($result);


        Blog::where('id',$request->id)->update([
                'title' => $request->title,
                'idUser' => Auth::id(),
                'image' => json_encode($result),
                'description'=> $request->description,
                ]);
        
        return redirect()->action([BlogController::class,'index'])->with('success', __('Update blog success. '));
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
            return redirect()->action([BlogController::class,'index'])->with('success', __('Delete blog success. '));
        }
        else
        {
            return redirect()->back()->withErrors('Delete blog fail');
        }
    }
}
