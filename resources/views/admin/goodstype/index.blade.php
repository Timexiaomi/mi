@extends('admin/base/base')

@section('title')
    商品类别展示
@endsection
@section('content')
<!-- Content Header (Page header) -->
<script>
      //表格居中js
	window.onload=function()
	{
		var th=document.getElementsByTagName('th');
		var td=document.getElementsByTagName('td');
		for (var i = 0; i < th.length; i++) {
			th[i].style.textAlign='center'
		};
		for (var i = 0; i < td.length; i++) {
			td[i].
			style.textAlign='center'
		};
	}
</script>
<section class="content-header">
	<h1>
		商品类别列表
	</h1>
</section>
        <!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <span class="box-title"><a href='{{ URL('admin/goodsclass/create') }}'  style='width:120px' class="btn btn-block btn-success"><i class='glyphicon glyphicon-plus'></i>添加商品类别</a></span>
        </div><!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered">
            <tr>
                <td colspan='5' style='text-align:center'>
                    <form action='goodsclass' method='get'>
                        <span>查询商品类别</span>
                        <input type="text" name='soutypename' class="form-control" placeholder="输入类别名称"/>
                        <button value='submit'>搜索</button>
                    </form>
                </td>
            </tr>
            <tr>
              <th>类别编号</th>
              <th>商品类别名称</th>
              <th>类别等级</th>
              <th>类别所属父类</th>
              <th>操作</th>
            </tr>
            @foreach($list as $type)
            <tr id="{{  $type->id }}">
              <td><span>{{ $type->id }}</span></td>
              <!-- glyphicon glyphicon-minus -->
              <td>{{ $type->name }}</td>
              <td>
                    @if($type->level=='0')
                      <span class='badge bg-black'>
                          根级别
                      </span>
                    @elseif($type->level=='1')
                        <span class="badge bg-red">
                            第二级别
                        </span>
                    @elseif($type->level=='2')
                        <span class="badge bg-blue">
                            第三级别
                        </span>
                    @elseif($type->level=='3')
                        <span class="badge bg-orange">
                            第四级别
                        </span>
                    @elseif($type->level=='4')
                          <span class="badge bg-green">
                            第五级别
                        </span>
                    @else
                        <span class="badge bg-white">
                            第{{ $type->level+1 }}级别
                        </span>
                    @endif

              </td>
              <td><span class="badge bg-purple">{{ $pname[$type->id] }}</span></td>
              <td><a href='goodsclass/addson/{{ $type->id }}'><button class="badge bg-grey">添加子类别</button></a>|<a href="goodsclass/{{ $type->id }}"><button class="badge bg-grey">修改</button></a>|<button onclick='dodel(this.id)' id='{{ $type->id }}' class="badge bg-grey">删除</button></td>
            </tr>
            @endforeach
            <tr><td colspan='5'>{!! $list->appends(['soutypename'=>$where['soutypename'],'page'=>$where['soutypename']])->render() !!}</td></tr>
          </table>
        </div><!-- /.box-body -->

      </div><!-- /.box -->


    </div><!-- /.col -->

    </div><!-- /.col -->
  </div><!-- /.row -->

  </div>
  <p name="csrf-token" content="{{ csrf_token() }}"></p>
</section><!-- /.content -->
@endsection

<script src="{{ asset('public/js.js') }}"></script>
<script>
// 	function dogo(en)
// 	{
// 		// if($("#"+en+"> i").attr('class')=='glyphicon glyphicon-plus'){
// 		// 	alert(111);
// 		// }
//           // alert($(this).html());
//           // alert($('button').attr('onclick','dogo('+en+')').html());
// 		// alert(en);
// 		//ajax 查询出对应id
//           if($('button').attr('onclick','dogo('+en+')').html()=='查看子模块'){
//           		$.ajax({
//           			url:"{{ URL('admin/addsontype')}}",
//           			type:'post',
//           			data: { 'data': en},
//           			// dataType:'json',
//           			headers: {
//                       		'X-CSRF-TOKEN': $('p[name="csrf-token"]').attr('content')
//                   		},
//           			success:function(data){
//           				//添加标签
//           				$("#"+en+"").after(data);
//           				// alert(data);
//                               $('button').attr('onclick','dogo('+en+')').html('收回')
//           			},
//           			error:function(){
//           				alert('222');
//           			},
//           		});
//            }
//            else{
//                $('button').attr('onclick','dogo('+en+')').html('查看子模块')
//            }
//           // alert($('button').attr('onclick','dogo('+en+')').html());
// 	}
      //ajax加载类别所属父类名称
        function dodel(en){
            if(confirm('真的要删除码')){
                  $.ajax({
                      url:"{{ URL('admin/ajax/del') }}",
                      type:'post',
                      data:{'data':en},
                      headers: {
                                'X-CSRF-TOKEN': $('p[name="csrf-token"]').attr('content')
                      },
                      success:function(data){
                        if(data=='删除成功')
                        {
                            $("#"+en+"").remove();
                        }
                        alert(data);
                      },
                      error:function(){},
                  });
            }
        }

</script>


