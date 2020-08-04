<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>
            小飞侠小说
        </title>
        <link href="../favicon.png" rel="apple-touch-icon-precomposed" />
        <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1,user-scalable=no">
        <link rel="stylesheet" href="/Static/xs/css/style.css">
    </head>
    
    <body  id="co">
     <div class="show" id="ch" onclick="change()">夜间</div>
        <script type="text/javascript">

            window.onload = function(){
                 var sess = sessionStorage.getItem('col');
                 if(sess == 0){
                     var body = document.getElementById("co");
                    body.style.backgroundColor = '#262121'; 
                    body.style.color = '#9d9a9a'; 
                    // text = document.getElementById("ch").innerHTML=("白天");
                }else{
                     var body = document.getElementById("co");
                    body.style.backgroundColor = '#e5dfcf';
                    body.style.color = '#000'; 
                    // text = document.getElementById("ch").innerHTML=("夜间");
                    
                }
               
            }

            function change(){
                // 0:夜间 1:白天
                // var text = document.getElementById("ch").innerText;
                var sess = sessionStorage.getItem('col')
               if(sess == 0){
                 var body = document.getElementById("co");
                    body.style.backgroundColor = '#e5dfcf';
                    body.style.color = '#000'; 
                    sessionStorage.setItem('col', '1');
               // console.log(sess);
               }else{
                var body = document.getElementById("co");
                    
                    body.style.backgroundColor = '#262121'; 
                    body.style.color = '#9d9a9a';
                    sessionStorage.setItem('col', '0');
               // console.log(sess);
                
               }
                        
            }
        </script>
        <style type="text/css">
.chaplink .prevchap {
    width: 28%;
    margin-right: 5%;
}
        </style>
        <div class="wrap">
            <div class="chapter" id="chapter">
                <div class="chapter-inner">
                    <p class="chapname">
                        <span class="bname" id="chaptitle">
                           <?php echo ($title["0"]); ?>
                        </span>
                        <span class="binfo" id="chapbname">
                       <!--    xxxx -->
                        </span>
                    </p>
                    <p id="chapcont">
                        　　<?php echo ($title["0"]); ?>
                        <br/>
                        　<?php echo ($content); ?>
                    </p>
                </div>
            </div>
            <div class="chaplink">
                <a href="/Xiaoshuo/Read/read.html?id=<?php echo ($pag["0"]); ?>" class="prevchap bggy" id="btn_prev">
                    上一章
                </a>
                <a href="/Xiaoshuo/Lst/catalogue.html?id=<?php echo ($pag["1"]); ?>" class="prevchap bggy" id="btn_prev">
                    目录
                </a>
                <a href="/Xiaoshuo/Read/read.html?id=<?php echo ($pag["2"]); ?>" class="prevchap bgye" id="btn_prev">
                    下一章
                </a>
            </div>
        </div>
        <!-- 功能区 begin -->
        <div class="t-cover">
        </div>
        <div class="t-scroll-lock">
        </div>
        <div class="footer home-bg">
            <div class="footer_nav clearfix">
                 <a href="/Xiaoshuo/Index/index.html" >
                    首页
                </a>
            </div>
            <p class="edition mt20">
                <span>
                     <a href="javascript:;">
                        普通版
                    </a>
                    |
                   <a href="javascript:;" class="select">
                        触屏版
                    </a>
                </span>
            </p>
            <p class="copyright mt20">
                <b>
                    小飞侠小说
                </b>
              
            </p>
            <span id="gotop" class="icons icon-gotop">
            </span>
        </div>
        <div class="pop_cover">
        </div>
        <div class="pop_tip">
            <div class="pop_inner">
                <div class="pop_cont">
                </div>
            </div>
        </div>
    </body>

</html>