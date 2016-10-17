@extends('home/base/base')

@section('content')



<style>
.msg-bd font {display:none;}
</style>



<style>
    .channel-mihone {
    position: relative;
    height: 600px;
    background: url("//s01.mifile.cn/i/channel/phone-section-05.jpg") no-repeat center;
}
.channel-mihone .channel-mihone-des {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 160px;
    background-color: rgba(0,0,0,0.7);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#b2000000", endColorstr="#b2000000")\9;
    color: #fff;
}
.channel-mihone .channel-mihone-des dl {
    float: left;
    width: 820px;
    padding: 40px 0 0 80px;
}
.channel-mihone ul, .channel-mihone li, .channel-mihone p, .channel-mihone dl, .channel-mihone dt, .channel-mihone dd {
    margin: 0;
    padding: 0;
    list-style: none;
}
.channel-mihone .channel-mihone-des dl dt {
    margin-bottom: 10px;
    font-size: 24px;
    -webkit-font-smoothing: antialiased;
}
.channel-mihone ul, .channel-mihone li, .channel-mihone p, .channel-mihone dl, .channel-mihone dt, .channel-mihone dd {
    margin: 0;
    padding: 0;
    list-style: none;
}
.channel-mihone .channel-mihone-des dl dd {
    line-height: 1.8;
    color: #f5f5f5;
}
.channel-mihone .channel-mihone-des p .btn {
    display: block;
    margin-bottom: 10px;
    background-color: transparent;
}
.channel-mihone .channel-mihone-des p {
    float: right;
    padding: 25px 35px 0 0;
}
</style>

<div class="container buy-choose-box">

    <div class="bd">
        <div class="pro-choose-main clearfix" id="J_chooseMain">
            <div class="pro-view">
                <img src="{{asset('goods/photo/xiaomi5s-huise.jpg')}}" alt="红米Pro" id="J_proImg">
            </div>
            <div class="pro-info">
                <div class="pro-title clearfix">
                    <h1>
                        <span class="pro-name J_proDesc">购买小米5sPuls</span>
                        <span class="pro-price J_proPrice">1499元</span>
                    </h1>

                </div>
                                   <div id="J_proStep"><div class="pro-choose-step J_step" data-index="1">

                                   <div class="step-title"> 1. 选择版本 <i class="pro-version-desc-icon">!</i> <span class="pro-version-desc J_verDesc" data-index="1">Helio X20 最高主频 2.1GHz ，前置指纹识别，全网通2.0</span> </div> <ul class="step-list clearfix J_stepList">  <li class="J_stepItem   active" data-index="1" data-node-id="864" data-desc="Helio X20 最高主频 2.1GHz ，前置指纹识别，全网通2.0" title="标准版 3GB内存+32GB容量" data-title-price="1499元">  标准版 3GB内存+32GB容量  </li>  <li class="J_stepItem" data-index="1" data-node-id="865" data-desc="Helio X25 最高主频 2.5GHz ，前置指纹识别，全网通2.0" title="高配版 3GB内存+64GB容量" data-title-price="1699元">  高配版 3GB内存+64GB容量  </li>  <li class="J_stepItem" data-index="1" data-node-id="866" data-desc="Helio X25 最高主频 2.5GHz ，前置指纹识别，全网通2.0" title="尊享版 4GB内存+128GB容量" data-title-price="1999元">  尊享版 4GB内存+128GB容量  </li>  </ul></div>

                                   <div class="pro-choose-step J_step" data-index="2"> <div class="step-title"> 2. 选择颜色 <i class="pro-version-desc-icon">!</i> <span class="pro-version-desc J_verDesc" data-index="2"></span> </div> <ul class="step-list clearfix J_stepList">  <li class="J_stepItem" data-index="2" data-node-id="869" data-gid="2162700011" data-img="//c1.mifile.cn/f/i/15/item/buyphone/hongmipro-jin.jpg" title="金色 1499元" data-title-price="1499元" data-opensell="1" data-opensell-status="1" data-opensell-url="//cart.mi.com/cart/recommend/goods_id/2162700011">  <img src="./红米Pro立即购买-小米商城_files/note3-icon-jin.png" alt="金色">  金色  </li>  <li class="J_stepItem" data-index="2" data-node-id="867" data-gid="2162700009" data-img="//c1.mifile.cn/f/i/15/item/buyphone/hongmipro-hui.jpg" title="灰色 1499元" data-title-price="1499元" data-opensell="1" data-opensell-status="1" data-opensell-url="//cart.mi.com/cart/recommend/goods_id/2162700009">  <img src="./红米Pro立即购买-小米商城_files/icon-qianhui.jpg" alt="灰色">  灰色  </li>  <li class="J_stepItem" data-index="2" data-node-id="868" data-gid="2162700010" data-img="//c1.mifile.cn/f/i/15/item/buyphone/hongmipro-yin.jpg" title="银色 1499元" data-title-price="1499元" data-opensell="1" data-opensell-status="1" data-opensell-url="//cart.mi.com/cart/recommend/goods_id/2162700010">  <img src="./红米Pro立即购买-小米商城_files/icon-yin.jpg" alt="银色">  银色  </li>  </ul></div></div>
                <div class="choose-result-msg" id="J_chooseResultMsg">
                    <span class="msg-tit">您选择了以下产品:</span>
                    <p class="msg-bd">小米5sPlus 标准版 3GB内存+32GB容量</p>
                </div>
                <div class="pro-choose-result hide" id="J_chooseResult"></div>
                <div class="pro-choose-result" id="J_chooseResultInit">
                    <a href="javascript:void(0);" class="btn btn-large btn-dakeLight" data-stat-id="7326452943dc03b6" onclick="_msq.push([&#39;trackEvent&#39;, &#39;72b3aa30fd40c009-7326452943dc03b6&#39;, &#39;javascript:void(0);&#39;, &#39;pcpid&#39;]);">下一步</a>
                    <!-- <span class="next-desc">请选择商品</span> -->
                </div>
            </div>
            <!-- pro-info END -->
        </div>
        <!-- pro-choose_main End-->
    </div>
    <!-- bd END -->
</div>
<!-- buy-choose-box END -->

<div class="main-pro-box" id="J_proDetailBox">

    <div class="pro-detail-box">  <div class="section section-image is-visible">  <a target="_blank" href="http://www.mi.com/redmipro/" data-stat-id="c87b7fd77576b4a5" onclick="_msq.push([&#39;trackEvent&#39;, &#39;72b3aa30fd40c009-c87b7fd77576b4a5&#39;, &#39;http://www.mi.com/redmipro/&#39;, &#39;pcpid&#39;]);">  <img class="lazyload" data-img="//c1.mifile.cn/f/i/15/item/buyphone/hongmipro-shenruliaojie.jpg" src="./红米Pro立即购买-小米商城_files/hongmipro-shenruliaojie.jpg">  </a>  </div>

      <div class="section section-image is-visible">  <a target="_blank" href="http://www.mi.com/service/safe/" data-stat-id="f56f8fdeb670acc5" onclick="_msq.push([&#39;trackEvent&#39;, &#39;72b3aa30fd40c009-f56f8fdeb670acc5&#39;, &#39;http://www.mi.com/service/safe/&#39;, &#39;pcpid&#39;]);">  <img class="lazyload" data-img="//c1.mifile.cn/f/i/15/item/buyphone/hongmipro-yiwaibao.jpg" src="{{asset('goods/image/xiaomi5splus-yiwaibao.jpg')}}">  </a>  </div>


       <div class="section section-specs container is-visible"> <div class="spec-title" id="J_showSpec"> 了解小米5sPlus参数<i class="arrow"></i> </div> <ul class="spec-list hide clearfix" id="J_specCon">  <li class="spec-item"> <div class="spec-item-tit">处理器</div>   <div class="spec-sub-item"> <div class="spec-sub-item-tit">标准版</div> <p class="spec-sub-item-con">MTK Helio X20 10核 最高主频 2.1GHz<br>Mali T880 MP4 700MHz</p> </div>  <div class="spec-sub-item"> <div class="spec-sub-item-tit">高配版</div> <p class="spec-sub-item-con">MTK Helio X25 10核 最高主频 2.5GHz<br>Mali T880 MP4 850MHz</p> </div>  <div class="spec-sub-item"> <div class="spec-sub-item-tit">尊享版</div> <p class="spec-sub-item-con">MTK Helio X25 10核 最高主频 2.5GHz<br>Mali T880 MP4 850MHz</p> </div>  </li>   <li class="spec-item"> <div class="spec-item-tit">内存 / 存储</div>   <div class="spec-sub-item"> <div class="spec-sub-item-tit">标准版</div> <p class="spec-sub-item-con">3GB 内存 + 32GB 闪存</p> </div>  <div class="spec-sub-item"> <div class="spec-sub-item-tit">高配版</div> <p class="spec-sub-item-con">3GB 内存 + 64GB 闪存</p> </div>  <div class="spec-sub-item"> <div class="spec-sub-item-tit">尊享版</div> <p class="spec-sub-item-con">4GB 内存 + 128GB 闪存<br><br>支持扩展存储 最高扩容 128GB（Vfat格式）</p> </div>  </li>   <li class="spec-item"> <div class="spec-item-tit">显示屏</div>  <p class="spec-item-con">5.5 英寸 OLED超黑超鲜艳屏幕<br>350nit 亮度<br>1920 x 1080 分辨率，401 PPI，60000:1 对比度<br>100% NTSC色域<br>支持阳光屏，强烈阳光下清晰可见屏幕内容<br>支持夜光屏<br>支持护眼模式<br>支持色温调节</p>   </li>  <div class="item-line"></div>   <li class="spec-item"> <div class="spec-item-tit">指纹识别</div>  <p class="spec-item-con">前置指纹识别<br>高硬度陶瓷实体按键<br>支持小米钱包支付<br>支持查看私密文件</p>   </li>   <li class="spec-item"> <div class="spec-item-tit">后置双摄像头</div>  <p class="spec-item-con">1300 万像素后置相机<br>500 万像素辅助深度相机<br><br>5片式镜头，ƒ/2.0光圈<br>双色温闪光灯<br>支持 PDAF 相位对焦<br>暗光画质增强技术<br>HDR高动态范围调节技术<br>全景模式<br>连拍模式<br>面部识别功能<br>实时滤镜拍照</p>   </li>   <li class="spec-item"> <div class="spec-item-tit">500万像素前置相机</div>  <p class="spec-item-con">第二代36级智能美颜，自拍实时美颜<br>ƒ/2.0 光圈，85°大广角<br>视频通话实时美颜<br>倒计时自拍<br>面部识别功能</p>   </li>  <div class="item-line"></div>   <li class="spec-item"> <div class="spec-item-tit">网络支持</div>   <div class="spec-sub-item"> <div class="spec-sub-item-tit">全网通2.0 双卡双待:</div> <p class="spec-sub-item-con">三选二卡槽<br>支持 Nano-SIM 卡 / Micro-SIM卡 / Micro-SD 扩展存储卡</p> </div>  <div class="spec-sub-item"> <div class="spec-sub-item-tit">双卡使用说明:</div> <p class="spec-sub-item-con">支持移动、联通、电信4G+ / 4G / 3G / 2G<br>当主卡为电信、联通4G时，副卡支持联通3G网络语音电话<br>2张电信卡无法同时使用</p> </div>  </li>   <li class="spec-item"> <div class="spec-item-tit">无线连接</div>  <p class="spec-item-con">802.11 b/g/n Wi-Fi无线网络<br>WiFi Display<br>WiFi Direct<br>蓝牙4.1 无线技术<br>蓝牙HID</p>   </li>   <li class="spec-item"> <div class="spec-item-tit">传感器</div>  <p class="spec-item-con">红外<br>陀螺仪<br>加速感应器<br>距离感应器<br>环境光传感器<br>霍尔感应器</p>   </li>  <div class="item-line"></div>   <li class="spec-item"> <div class="spec-item-tit">GPS</div>  <p class="spec-item-con">GPS<br>AGPS<br>GLONASS<br>北斗定位</p>   </li>   <li class="spec-item"> <div class="spec-item-tit">电池容量</div>  <p class="spec-item-con">额定容量4000mAh<br>典型容量4050mAh<br>内置电池，免更换<br>5V / 2A USB Type-C 充电</p>   </li>   <li class="spec-item"> <div class="spec-item-tit">可选版本</div>  <p class="spec-item-con">标准版 1499元<br>高配版 1699元<br>尊享版 1999元</p>   </li>  <div class="item-line"></div>   </ul> </div></div>

    <!-- 配件商品推荐模版 -->
    <div class="J_recommendGoods section is-visible">
        <div class="container"> <div class="section section-acc container"> <div class="acc-title"> 款款出色<br>随<span class="J_proName">红米Pro</span>购买配件免费送货 </div> <ul class="list clearfix">  <li> <a class="pro-link" href="http://item.mi.com/1161200004.html" target="_blank"> <div class="item-info"> <h3>小米活塞耳机 基础版</h3> <p class="price"> <em>29</em>元 </p> </div> <div class="item-pic"> <img class="lazyload" data-img="//i1.mifile.cn/a1/T1WxYvB_xv1RXrhCrK.jpg" src="./红米Pro立即购买-小米商城_files/T1WxYvB_xv1RXrhCrK.jpg" alt=""> </div> </a> </li>  <li> <a class="pro-link" href="http://item.mi.com/1161200010.html" target="_blank"> <div class="item-info"> <h3>小米圈铁耳机</h3> <p class="price"> <em>99</em>元 </p> </div> <div class="item-pic"> <img class="lazyload" data-img="//i1.mifile.cn/a1/T1ycK_BjYv1RXrhCrK.jpg" src="./红米Pro立即购买-小米商城_files/T1ycK_BjYv1RXrhCrK.jpg" alt=""> </div> </a> </li>  <li> <a class="pro-link" href="http://item.mi.com/1160800020.html" target="_blank"> <div class="item-info"> <h3>小米随身蓝牙音箱</h3> <p class="price"> <em>69</em>元 </p> </div> <div class="item-pic"> <img class="lazyload" data-img="//i1.mifile.cn/a1/T1._C_BKAv1RXrhCrK.jpg" src="./红米Pro立即购买-小米商城_files/T1._C_BKAv1RXrhCrK.jpg" alt=""> </div> </a> </li>  </ul> </div></div>
    </div>
    <!--
    <div class="xm-home section">
        <div class="section section-image is-visible">
            <a href="//www.mi.com/c/xiaomizhijia/" target="_blank">
                <img class="lazyload" data-img="//c1.mifile.cn/f/i/15/item/buyphone/detail-6.jpg" src="">
            </a>
        </div>
    </div>-->
    <div class="container channel-mihone">
        <div class="channel-mihone-des">
            <dl>
                <dt>小米之家及官方授权维修网点</dt>
                <dd>
                    欢迎来小米之家解决你遇到的问题，了解最新的小米官方产品最全面的产品信息，还有很多好玩的活动等你来访。<br>
                    你还可以前往小米授权维修网点解决售后问题，520家网点让服务随时在身边。
                </dd>
            </dl>
            <p>
                <a target="_blank" href="http://www.mi.com/c/xiaomizhijia/" class="btn btn-large btn-line-primary" data-stat-id="92bb525974bcde0e" onclick="_msq.push([&#39;trackEvent&#39;, &#39;72b3aa30fd40c009-92bb525974bcde0e&#39;, &#39;//www.mi.com/c/xiaomizhijia/&#39;, &#39;pcpid&#39;]);">小米之家</a>
                <a target="_blank" href="http://www.mi.com/c/service/poststation/" class="btn btn-large btn-line-primary" data-stat-id="a684b74699138aae" onclick="_msq.push([&#39;trackEvent&#39;, &#39;72b3aa30fd40c009-a684b74699138aae&#39;, &#39;//www.mi.com/c/service/poststation/&#39;, &#39;pcpid&#39;]);">官方维修网点</a>
            </p>
        </div>
    </div>
</div>

<!-- bar -->
<div class="header-bar" id="J_headerBar">
    <div class="container">
        <span class="pro-desc" id="J_headerBarDesc">红米Pro 标准版 3GB内存+32GB容量</span><a href="javascript:void(0)" class="btn btn-primary" data-stat-id="081b10ad0061e9de" onclick="_msq.push([&#39;trackEvent&#39;, &#39;72b3aa30fd40c009-081b10ad0061e9de&#39;, &#39;javascript:void(0)&#39;, &#39;pcpid&#39;]);">立即购买</a>
    </div>
</div>
<script>
            $('body').mouseover(function(){
        $('.header-nav').remove();

            })



</script>



@endsection
