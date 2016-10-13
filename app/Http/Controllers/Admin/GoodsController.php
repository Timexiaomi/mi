<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Org\Image;

use App\Http\Controllers\Controller;


date_default_timezone_set('PRC');

class GoodsController extends Controller
{
    //商品列表
     public function index(Request $request)
    {
        $ob=\DB::table('goods');
        $where=[];
        if($request->has('gname')){
                $name=$request->input('gname');
                $ob=$ob->where('gname','like',"%{$name}%");
                    $where['name']=$name;
        }

        $list=$ob->paginate(5);

        return view("admin.goods.index")->with(["list"=>$list,'where'=>$where]);
    }

    //查看单条
    public function show($id)
    {

    }
    //进入添加表单
    public function create()
    {
        //查询数据库goodsclass的所有数据
        $list=\DB::table('goodsclass')->orderBy('path')->get();
        $array=array();
        foreach($list as $type)
        {
            //取出path的值
            $path=$type->path;
            // $array[]=$path;
            //计算逗号出现的次数-1
            $count=substr_count($path,",");
            $nbsp=str_repeat('&nbsp',$count*8);
            $array[]="<option value=".($type->id).">".$nbsp.($type->name)."</option>";
        }
        // dd($array);
        return view("admin.goods.add",['array'=>$array]);
    }
    //执行添加
    public function store(Request $request)
    {


            $data=$request->except('_token');
            $ob=\DB::table('goods')->insertGetId($data);
            if($ob>0){
                return back()->with('msg','添加成功');
            }
    }

    //进入修改表单
    public function edit($id)
    {

    }

    //修改表单
    public function update(Request $request,$id)
    {

    }

    //执行删除
    public function destroy($id)
    {

    }

    //商品版本管理页面
    public function version($id)
    {
        $goods=\DB::table('goods')->where('id','=',$id)->first();
        $ob=\DB::select("select * from goodsdata where gid=$id");
        $num=count($ob);
        return view('admin.goods.version',['ob'=>$ob,'goods'=>$goods]);
    }
    //添加商品版本
    public function doversion(Request $request,$id)
    {
            // dd($request);
        $data=$request->except('_token');
        $ob=\DB::table('goodsdata')->insertGetId($data);
        if($ob>0){
                return back();
        }
    }
    //版本色彩
    public function color($id)
    {
        $gd=\DB::table('goodsdata')->where('id','=',$id)->first();
        $ob=\DB::table('goodsimage')->where('gdid','=',$id)->get();
        return view('admin.goods.color',['ob'=>$ob,'gd'=>$gd]);
    }
    //添加版本色彩
    public function docolor(Request $request,$id)
    {

                if ($request->hasFile('gdimage'))
{
         $file=$request->file('gdimage');
        //执行上传文件
        if($file->isValid()){
                $ext=$file->getClientOriginalExtension();//获取后缀名
                $filename=time().rand(1000,9999).'.'.$ext;//获取随机文件名
                $file->move('./goods/colorimage/',$filename);//保存在本地
        }

        $img=new Image();
        $img->open("./goods/colorimage/".$filename)->thumb(500,600)->save("./goods/colorimage/u_".$filename);
        //上传到数据库
        $gdimage="goods/colorimage/u_".$filename;
        $ob=\DB::table('goodsimage')->where('id',$id)->update(['gdimage'=>$gdimage]);
        if($ob>0){
                    return back();
        }
}

            $data=$request->except('_token');
            $ob=\DB::table('goodsimage')->insertGetId($data);
            return back();
    }
    public function change(Request $request){

            dd($request);
            // $ob=\DB::table('goodsimage')->where('id','=',$request->id);
            // return $ob;
    }


}
