
@extends("home/base/base")
@section('title')
    小米商城
@endsection
@section('content')
<script src="Homes/home/js/base.min.js"></script>

<div class="home-hero-container container">
    <div class="home-hero">
        <div class="home-hero-slider">
         <div class="ui-wrapper" style="max-width: 100%;">
         <div class="ui-viewport" style="width: 100%; overflow: hidden; position: relative; height: 460px;">
         <div id="J_homeSlider" class="xm-slider" data-stat-title="焦点图轮播" style="width: auto; position: relative;">

                    <div class="slide loaded" style="float: none; list-style: outside none none; position: absolute; width: 1226px; z-index: 0; display: none;">
                        <a href="mi5.html" ><img src="{{asset('Homes/home/picture/1.jpg')}}"></a>
                    </div>

                    <div class="slide loaded"  style="float: none; list-style: outside none none; position: absolute; width: 1226px; z-index: 50; display: none;">
                        <a href="mi5s.html" ><img src="{{asset('Homes/home/picture/2.jpg')}}" ></a>
                    </div>

                    <div class="slide loaded"  style="float: none; list-style: outside none none; position: absolute; width: 1226px; z-index: 0; display: none;">
                        <a href="default_032.html" ><img src="{{asset('Homes/home/picture/3.jpg')}}" ></a>
                    </div>

                    <div class="slide loaded"  style="float: none; list-style: outside none none; position: absolute; width: 1226px; z-index: 0; display: none;">
                        <a href="mi5splus.html" ><img src="{{asset('Homes/home/picture/4.jpg')}}" ></a>
                    </div>


                        </div>
                        </div><div class="ui-controls ui-has-pager ui-has-controls-direction"><div class="ui-pager ui-default-pager">

                                        <div class="ui-pager-item"><a href="index.html" >1</a></div>
                                        <div class="ui-pager-item"><a href="index.html" >2</a></div>
                                        <div class="ui-pager-item"><a href="index.html" >3</a></div>
                                        <div class="ui-pager-item"><a href="index.html" >4</a></div>



                                        </div>



                                        <div class="ui-controls-direction">
                                        <a class="ui-prev" href="ijavascript:void(0)">上一张</a>
                                        <a class="ui-next" href="index.html">下一张</a></div></div></div>

                                        </div>


        <div class="home-hero-sub row">
            <div class="span4">
                <ul class="home-channel-list clearfix">
                                        <li class="top left"><a href="//www.mi.com/compare/" data-stat-aid="AA13424" data-stat-pid="2_44_1_250" target="_blank"><i class="iconfont">&#xe901</i>选购手机</a></li>
                                        <li class="top"><a href="http://qiye.mi.com/" data-stat-aid="AA10868" data-stat-pid="2_44_2_251" target="_blank"><i class="iconfont">&#xe63e;</i>企业团购</a></li>
                                        <li class="top"><a href="//item.mi.com/re" data-stat-aid="AA10869" data-stat-pid="2_44_3_252" target="_blank"><i class="iconfont">&#xe63b;</i>官翻产品</a></li>
                                        <li class="left"><a href="//www.mi.com/mimobile/" data-stat-aid="AA11244" data-stat-pid="2_44_4_253" target="_blank"><i class="iconfont"></i>小米移动</a></li>
                                        <li class=""><a href="http://huanxin.mi.com/product/list" data-stat-aid="AA12084" data-stat-pid="2_44_5_254" target="_blank"><i class="iconfont"></i>以旧换新</a></li>
                                        <li class=""><a href="http://recharge.10046.mi.com/" data-stat-aid="AA10871" data-stat-pid="2_44_6_255" target="_blank"><i class="iconfont"></i>话费充值</a></li>

                </ul>
            </div>
            <div class="span16" id="J_homePromo" data-stat-title="焦点图下方小图">
                <ul class="home-promo-list clearfix">
                                        <li class="first">
                        <a class="item" href="//item.mi.com/buyphone/hongmi3s" data-stat-aid="AA13660" data-stat-pid="2_16_1_77" target="_blank"><img alt="红米3s" src="Homes/home/Picture/356bc7e84b434d139a5e51d88bcf52fd.gif" srcset="http://i3.mifile.cn/a4/bef939d6-e8d8-42b8-a36e-59ccf8db17de 2x" /></a>
                    </li>
                                        <li>
                        <a class="item" href="//item.mi.com/buyphone/note4" data-stat-aid="AA13683" data-stat-pid="2_16_2_78" target="_blank"><img alt="红米Note4高配现货送米粒" src="Homes/home/Picture/cf638bccc6b643e09268d3f1cb08e254.gif" srcset="http://i3.mifile.cn/a4/5de66837-5950-4c92-8ba1-544c0c913701 2x" /></a>
                    </li>
                                        <li>
                        <a class="item" href="//www.mi.com/dianfanbao/" data-stat-aid="AA13685" data-stat-pid="2_16_3_79" target="_blank"><img alt="米家压力IH电饭煲" src="Homes/home/Picture/4d5509463c87447da7e49e487db6e8bc.gif" srcset="http://i3.mifile.cn/a4/88c7e4f6-d774-40ad-a055-73254a707a2e 2x" /></a>
                    </li>
                                    </ul>
            </div>
        </div>
    </div>

    <!-- 816 热门商品推荐位 -->

    <!--  816 热门商品推荐 END-->
        <div class="home-star-goods" id="J_homeStar">
        <div class="xm-plain-box">
            <div class="box-hd">
                <h2 class="title">小米明星单品</h2>
                <div class="more"></div>
            </div>
            <div class="box-bd">
                <ul class="xm-carousel-list xm-carousel-col-5-list goods-list rainbow-list clearfix J_carouselList">
                                        <li class="rainbow-item-1">
                        <a class="thumb" href="//item.mi.com/buyphone/mi5" data-stat-aid="AA13552" data-stat-pid="2_17_1_80" target="_blank"><img src="Homes/home/Picture/7ace6c07331d4371949674bc3f7c4ed5.gif" srcset="http://i3.mifile.cn/a4/0165a552-fc9c-457c-a315-7dc0829e8e29 2x" alt="小米5 高配64GB" /></a>
                            <h3 class="title"><a href="//item.mi.com/buyphone/mi5" data-stat-aid="AA13552" data-stat-pid="2_17_1_80" target="_blank">小米5 高配64GB</a></h3>
                            <p class="desc">赠 智能翻盖保护套+Type-C转接头</p>
                            <p class="price">2099元</p>
                    </li>
                                        <li class="rainbow-item-2">
                        <a class="thumb" href="//item.mi.com/buyphone/mimax" data-stat-aid="AA13256" data-stat-pid="2_17_2_81" target="_blank"><img src="Homes/home/Picture/9c3c7fa2d6ad468fa4ff34cc9b7466b0.gif" srcset="http://i3.mifile.cn/a4/00591dc9-2a35-4015-ac14-77bf91485f56 2x" alt="小米Max" /></a>
                            <h3 class="title"><a href="//item.mi.com/buyphone/mimax" data-stat-aid="AA13256" data-stat-pid="2_17_2_81" target="_blank">小米Max</a></h3>
                            <p class="desc">赠 59元智能显示保护套</p>
                            <p class="price">1799元</p>
                    </li>
                                        <li class="rainbow-item-3">
                        <a class="thumb" href="//item.mi.com/buyphone/redmipro/" data-stat-aid="AA13595" data-stat-pid="2_17_3_82" target="_blank"><img src="Picture/38b5ce20972542938820a9aaeaf17186.gif" srcset="http://i3.mifile.cn/a4/267ee5f5-9d2d-4985-ad8e-3908ce666cb1 2x" alt="红米Pro  十核双摄" /></a>
                            <h3 class="title"><a href="//item.mi.com/buyphone/redmipro/" data-stat-aid="AA13595" data-stat-pid="2_17_3_82" target="_blank">红米Pro  十核双摄</a></h3>
                            <p class="desc">赠 智能显示保护套+Type-C转接头</p>
                            <p class="price">1499元起</p>
                    </li>
                                        <li class="rainbow-item-4">
                        <a class="thumb" href="//item.mi.com/buymibook/air" data-stat-aid="AA13568" data-stat-pid="2_17_4_83" target="_blank"><img src="Picture/d5649f484d7e46838abe04e21bbed18d.gif" srcset="http://i3.mifile.cn/a4/b99edf69-feeb-465f-a31e-431faba9d7a5 2x" alt="小米笔记本" /></a>
                            <h3 class="title"><a href="//item.mi.com/buymibook/air" data-stat-aid="AA13568" data-stat-pid="2_17_4_83" target="_blank">小米笔记本</a></h3>
                            <p class="desc">独立显卡、超轻薄、金属机身</p>
                            <p class="price">3499元起</p>
                    </li>
                                        <li class="rainbow-item-5">
                        <a class="thumb" href="//item.mi.com/static/buymipad" data-stat-aid="AA13145" data-stat-pid="2_17_5_84" target="_blank"><img src="Picture/c22d402618224ef7a05e08372419011e.gif" srcset="http://i3.mifile.cn/a4/dc4888a7-8713-4716-9998-18d02b00bba4 2x" alt="小米平板2 16GB现货" /></a>
                            <h3 class="title"><a href="//item.mi.com/static/buymipad" data-stat-aid="AA13145" data-stat-pid="2_17_5_84" target="_blank">小米平板2 16GB现货</a></h3>
                            <p class="desc">轻薄全金属，海量内容</p>
                            <p class="price">999元</p>
                    </li>
                                        <li class="rainbow-item-6">
                        <a class="thumb" href="//item.mi.com/buymitv/70" data-stat-aid="AA13690" data-stat-pid="2_17_6_85" target="_blank"><img src="Picture/a5d1bcd549654572bf1081043a146ffe.gif" srcset="http://i3.mifile.cn/a4/81eac5d5-b4d2-4175-ba67-13ec1e353e29 2x" alt="小米电视3 70英寸" /></a>
                            <h3 class="title"><a href="//item.mi.com/buymitv/70" data-stat-aid="AA13690" data-stat-pid="2_17_6_85" target="_blank">小米电视3 70英寸</a></h3>
                            <p class="desc">购买成功后可0.01元获取演唱会门票</p>
                            <p class="price">9999元</p>
                    </li>
                                        <li class="rainbow-item-7">
                        <a class="thumb" href="//www.mi.com/hezi3/" data-stat-aid="AA13689" data-stat-pid="2_17_7_86" target="_blank"><img src="Picture/t1z4wjb4ev1rxrhcrk.jpg" srcset="//i3.mifile.cn/a4/T12kdjBKZv1RXrhCrK.jpg 2x" alt="小米盒子3" /></a>
                            <h3 class="title"><a href="//www.mi.com/hezi3/" data-stat-aid="AA13689" data-stat-pid="2_17_7_86" target="_blank">小米盒子3</a></h3>
                            <p class="desc">全新升级 64位 4K网络机顶盒</p>
                            <p class="price">249元</p>
                    </li>
                                        <li class="rainbow-item-8">
                        <a class="thumb" href="//www.mi.com/shouhuan2/" data-stat-aid="AA13174" data-stat-pid="2_17_8_87" target="_blank"><img src="Picture/2bea123191724418a7049fdb21d13794.gif" srcset="http://i3.mifile.cn/a4/858c77b0-4a70-411f-bb1e-9b600c5897a6 2x" alt="小米手环 2" /></a>
                            <h3 class="title"><a href="//www.mi.com/shouhuan2/" data-stat-aid="AA13174" data-stat-pid="2_17_8_87" target="_blank">小米手环 2</a></h3>
                            <p class="desc">每天早10点开售</p>
                            <p class="price">149元</p>
                    </li>
                                        <li class="rainbow-item-9">
                        <a class="thumb" href="//www.mi.com/mivr1c/" data-stat-aid="AA13696" data-stat-pid="2_17_9_88" target="_blank"><img src="Picture/7610853624e245cd85223c0fb0eedc21.gif" srcset="http://i3.mifile.cn/a4/ac15ceff-6f62-495f-a08c-5d5c1b01dbeb 2x" alt="VR眼镜玩具版量产版" /></a>
                            <h3 class="title"><a href="//www.mi.com/mivr1c/" data-stat-aid="AA13696" data-stat-pid="2_17_9_88" target="_blank">VR眼镜玩具版量产版</a></h3>
                            <p class="desc">逼真沉浸感  舒适观看新体验</p>
                            <p class="price">49元</p>
                    </li>
                                        <li class="rainbow-item-10">
                        <a class="thumb" href="//www.mi.com/locatephone" data-stat-aid="AA13697" data-stat-pid="2_17_10_89" target="_blank"><img src="Picture/a7fe048eaf1e4edb93f7b7b780e6ba7d.gif" srcset="http://i3.mifile.cn/a4/7f82b60e-ee5a-4a83-9c85-5427ac152587 2x" alt="米兔定位电话" /></a>
                            <h3 class="title"><a href="//www.mi.com/locatephone" data-stat-aid="AA13697" data-stat-pid="2_17_10_89" target="_blank">米兔定位电话</a></h3>
                            <p class="desc">时刻定位，守护你所爱</p>
                            <p class="price">169元</p>
                    </li>
                                    </ul>
            </div>
        </div>
    </div>
    </div>
<div class="page-main home-main">
    <div class="container">
        <div id="smart" class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox" data-from-stat="false">
            <div class="box-hd">
                <h2 class="title">智能硬件</h2>
                <div class="more J_brickNav"></div>
            </div>
            <div class="box-bd J_brickBd"></div>
        </div>
        <div id="match" class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox" data-from-stat="true" data-region-stat="1">
            <div class="box-hd">
                <h2 class="title">搭配</h2>
                <div class="more J_brickNav"></div>
            </div>
            <div class="box-bd J_brickBd"></div>
        </div>
        <div id="accessories" class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox" data-from-stat="true" data-region-stat="1">
            <div class="box-hd">
                <h2 class="title">配件</h2>
                <div class="more J_brickNav"></div>
            </div>
            <div class="box-bd J_brickBd"></div>
        </div>
        <div id="around" class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox">
            <div class="box-hd">
                <h2 class="title">周边</h2>
                <div class="more J_brickNav"></div>
            </div>
            <div class="box-bd J_brickBd"></div>
        </div>

        <div id="recommend" class="home-recm-box home-brick-box home-brick-row-1-box xm-plain-box J_itemBox J_recommendBox" data-region-stat="1">
            <div class="box-hd">
                <h2 class="title">为你推荐</h2>
                <div class="more J_brickNav"></div>
            </div>
            <div id="recommend-bd" class="box-bd J_brickBd J_recommend-like"></div>
        </div>
        <div id="comment" class="home-review-box xm-plain-box J_itemBox J_reviewBox">
            <div class="box-hd">
                <h2 class="title">热评产品</h2>
            </div>
            <div class="box-bd J_brickBd"></div>
        </div>

        <div id="content" class="home-content-box xm-plain-box J_itemBox J_contentBox">
            <div class="box-hd">
                <h2 class="title">内容</h2>
            </div>
            <div class="box-bd J_brickBd"></div>
        </div>

        <div id="video" class="home-video-box xm-plain-box J_itemBox J_videoBox">
            <div class="box-hd">
                <h2 class="title">视频</h2>
                <div class="more J_brickNav"></div>
            </div>
            <div class="box-bd J_brickBd"></div>
        </div>
    </div>
</div>

<div id="J_modalVideo" class="modal modal-video fade modal-hide">
    <div class="modal-hd">
        <h3 class="title">视频播放</h3>
        <a class="close" data-dismiss="modal" href="javascript: void(0);"><i class="iconfont">&#xe602;</i></a>
    </div>
    <div class="modal-bd">
        <div class="loading"><div class="loader"></div></div>
    </div>
</div>

<script>
                $(function(){
                                //轮播图像个数
                                var num= $(".slide").length;
                                          $(".ui-pager-item");
                                var m=1;
                                for(var i=1;i<num;i++){
                                    (function(i){
                                            $(".slide").eq(i).mouseover(function(){
                                                contrimg(i);
                                                contrico(i);
                                                m=i+1;
                                            })(i)
                                    })

                                }
                                $('.ui-prev').click(function(){
                                        contrimg(m-1);
                                })

                                function run(){
                                        if(m>(num-1)){
                                                m=0;
                                        }
                                        contrimg(m);
                                        contrico(m);
                                        m++;
                                }
                                function contrimg(n){
                                        for(var i=0;i<num;i++){
                                                $('.slide').eq(i).css('display','none');
                                        }
                                        $('.slide').eq(n).css('display','block').fadeIn(1000);
                                }
                                function contrico(n){
                                        for(var i=0;i<num;i++){
                                                $('.ui-page-item a').eq(i).removeClass('active');
                                        }
                                        $('.ui-page-item a').eq(n).addClass('active');
                                }
                                $('.home-hero-slider').mouseover(function(){
                                        clearInterval(time);
                                })
                                $('.home-hero-slider').mouseout(function(){
                                         time=setInterval(run,3000);
                                });
                })





</script>


@endsection
