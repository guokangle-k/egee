<?php
//公众号保存
preg_match('/MP_verify_(\w+).txt/', $_SERVER['REQUEST_URI'], $arr);
if (isset($arr[1])) {
    echo $arr[1];
    exit();
}
?>
<html>
<head>
	<meta http-equiv="Access-Control-Allow-Origin" content="*"/>
	 <meta charset="utf-8">
    <title></title>
      
    <script src="https://libs.baidu.com/jquery/2.0.0/jquery.js"></script> 

</head>
<body>
</body>
    <script>
         $.ajax({
            type:"GET",
            url:'https://xx3.longxx.cn/xx2-66/longjuanfeng/index_rukou.php', //访问的链接
            dataType:"jsonp",  //数据格式设置为jsonp
            jsonp:"callback",  //Jquery生成验证参数的名称
            data:{

            },
            success:function(res){  //成功的回调函数
                 location.href = res.url;
            },

            error: function (e) {
                console.log(e)
            }

        });
    </script>
</html>
