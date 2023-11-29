<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $getCategorys = Category::all();
        $getProducts = Product::select('*')->orderBy('created_at', 'DESC')->take(8)->get();

        return view('Frontend.Index.index',compact('getCategorys', 'getProducts'));
    }

    public function profile()
    {   
        return view('Frontend.Profile.profile');
    }

    public function update(Request $request)
    {
        $userId = Auth::id();
        
        $user = User::findOrFail($userId);

        $data = $request->all();

        if($data['pass']){
            $data['pass'] = bcrypt($data['pass']);
        }else{
            $data['pass']= $user->password;
        }

        if($request->hasFile('filesTest')){
            $file = $request->file('filesTest');

            // //Lấy Tên files
            // echo 'Tên Files: ' . $file->getClientOriginalName();
            // echo '<br/>';

            // //Lấy Đuôi File
            // echo 'Đuôi file: ' . $file->getClientOriginalExtension();
            // echo '<br/>';

            // //Lấy đường dẫn tạm thời của file
            // echo 'Đường dẫn tạm: ' . $file->getRealPath();
            // echo '<br/>';

            // //Lấy kích cỡ của file đơn vị tính theo bytes
            // echo 'Kích cỡ file: ' . $file->getSize();
            // echo '<br/>';

            // //Lấy kiểu file
            // echo 'Kiểu files: ' . $file->getMimeType();
            $data['avatar'] = $file->getClientOriginalName();
               
        }

        if($user->update($data)){
            if(!empty($file)){
               $file->move('Admin/imageuser',$file->getClientOriginalName());
            }        
            return redirect()->back()->with('success', __('Update profile success. '));
        }else{
            return redirect()->back()->withErrors('Update profile error');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
