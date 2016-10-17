<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    //跳转的前台主页的方法
	public function index()
	{
                    $class=\DB::table('goodsclass')->get();
                    $goods=\DB::table('goods')->get();
		return view('home.index',['db'=>$goods,'class'=>$class]);
	}
        //
        public function head(Request $request)
        {
                $id=$request->data;
                $ob=\DB::table('goods')->where('cid','=',$id)->get();
                return json_encode($ob);
        }

        //商品信息页面
        public function goodsmessage(){
            $class=\DB::table('goodsclass')->get();
                    $goods=\DB::table('goods')->get();
            return view('home.goodsmessage',['db'=>$goods,'class'=>$class]);
        }
        //购物车页面
        public function cart(){

            $class=\DB::table('goodsclass')->get();
            $goods=\DB::table('goods')->get();
            return view('home.cart',['db'=>$goods,'class'=>$class]);
        }
        //订单页面
        public function order(){
            $class=\DB::table('goodsclass')->get();
            $goods=\DB::table('goods')->get();
            return view('home.order',['db'=>$goods,'class'=>$class]);
        }
        //支付页面
        public function pay(){
            $class=\DB::table('goodsclass')->get();
            $goods=\DB::table('goods')->get();
            return view('home.pay',['db'=>$goods,'class'=>$class]);
        }
        //用户信息页面
        public function user(){
            $class=\DB::table('goodsclass')->get();
            $goods=\DB::table('goods')->get();
            return view('home.user',['db'=>$goods,'class'=>$class]);
        }
        //搜索信息页面
        public function search(){
            $class=\DB::table('goodsclass')->get();
            $goods=\DB::table('goods')->get();
            return view('home.search',['db'=>$goods,'class'=>$class]);
        }
}
