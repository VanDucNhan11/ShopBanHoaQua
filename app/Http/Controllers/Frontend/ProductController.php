<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Product;

use App\Models\Category;
use App\Models\User;
use App\Models\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image as Image;

class ProductController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $getnewProducts = Product::select('*')->orderBy('created_at', 'DESC')->take(4)->get();
        $getCategorys = Category::all();
        $getProducts = Product::all();
        return view('Frontend.Product.product',compact('getCategorys', 'getProducts','getnewProducts'));
    }

    public function detail_pr($id)
    {   
        $getnewProducts = Product::select('*')->orderBy('created_at', 'DESC')->take(4)->get();
        $getProducts = Product::where('id',$id)->get();
        $getComments = Comment::where('idPr',$id)->get();
        foreach ($getComments as $key => $value) {
            $idUser = $value->idUser;
            $getUser = User::where('id',$idUser)->get()->toArray();
            $getComments[$key]['avatar'] = $getUser[0]['avatar'];
            $getComments[$key]['nameUser'] = $getUser[0]['name'];
        }
        
        $getCategorys = Category::all();
        // dd($getComments);
        return view('Frontend.Product.detail',compact('getCategorys', 'getProducts','getnewProducts','getComments'));
    }

    public function cart()
    {   
        return view('Frontend.Cart.cart');
    }


    public function addToCart(Request $request){
        $getProducts = Product::where('id',$request->id)->get()->toArray();

        $product = Product::findOrFail($request->id)->toArray();

        $img = json_decode($product['image'], true);
        
        $cart = session()->get('cart', []);

        if(isset($cart[$request->id])) {
            if($request->quantity == 1){
                $cart[$request->id]['quantity'] ++;
            }else{
                $cart[$request->id]['quantity'] = $cart[$request->id]['quantity'] + $request->quantity;
            }
        } else {
            $cart[$request->id] = [
                "name" => $product['name'],
                "quantity" => $request->quantity,
                "price" => $product['price'],
                "image" => $img[0],
            ];
        }

        session()->put('cart', $cart);

        return view('Frontend.Index.cart_item',compact('cart'));
        // return redirect()->action([UserController::class, 'index'])->with('success', 'Product added to cart successfully!');
    }


    public function updateCart(Request $request)
    {   
        // dd($request->quantity);
        if ($request->session()->has('cart')) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            if($request->quantity == 0){
                unset($cart[$request->id]);
            }
            session()->put('cart', $cart);
        }
        return view('Frontend.Index.cart_item',compact('cart'));
    }

    

    public function removeCart(Request $request)
    {   
            $cart = session()->get('cart');
            if(isset($cart)){
                unset($cart[$request->id]);
                if(count($cart) > 0){
                    session()->put('cart', $cart);
                }else{
                   $request->session()->forget('cart'); 
                }
            }

        return view('Frontend.Index.cart_item',compact('cart')); 
     }

     public function comment(Request $request)
    {   
        Comment::create([
            'comment' => $request->comment,
            'idPr' => $request->idPr,
            'idUser' => Auth::user()->id,
        ]);

        $getComments = Comment::where('idPr',$request->idPr)->get();
        
        foreach ($getComments as $key => $value) {
            $idUser = $value->idUser;
            $getUser = User::where('id',$idUser)->get()->toArray();
            $getComments[$key]['avatar'] = $getUser[0]['avatar'];
            $getComments[$key]['nameUser'] = $getUser[0]['name'];
        }
        // dd($getComments);
        return view('Frontend.Comment.comment_item',compact('getComments')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
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
        
    }   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }

    public function deleteSession(Request $request)
    {
        $request->session()->forget('cart');
    }
}
