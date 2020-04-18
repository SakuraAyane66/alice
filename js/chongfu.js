//判断href










                                                                  
                               var xmlhttp;
                               if (window.XMLHttpRequest){
                                   // 主流浏览器
                                    xmlhttp=new XMLHttpRequest();
                                  }
                               else{
                                  // IE6, IE5 浏览器执行代码
                                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                                  }
								  
								  
                               xmlhttp.open("GET","/try/ajax/demo_get.php",true);
                               xmlhttp.send();


    
    /*我之前这里也太傻比了
	function isLogin(){
	   var b=sessionStorage.getItem("USER");	
	       if(b!=null){
	          document.getElementById("home").href="http://www.skydragon.vip/Homepage.html?user="+b;
         	}else  {
	          document.getElementById("home").href="http://www.skydragon.vip/Homepage.html";
	        }  	
	}  */
	
/*获取json属性个数的函数*/
	function getJsonLength(jsonData){
             var jsonLength = 0;
             for(var item in jsonData)
			        {
                     jsonLength++;}          
             return jsonLength;
             }
//跳转到Search界面
	function gotoSearch(){
	var a=document.getElementById("search").value;
	window.location.href="Search.html?keywords="+a;
	}
//判断input框是否为空
	function isnull(val) {
        var str = val.replace(/(^\s*)|(\s*$)/g, '');//去除空格;
        if (str == '' || str == undefined || str == null) {
            //return true;
            //console.log('空')
			alert("输入框为空！");
			window.location.reload();
			return true;
        } else {
            //return false;
            gotoSearch();
        }
    }
//判断是否跳转
	function isGoto(){
	var a=document.getElementById("search").value;
	  isnull(a);	
	}
var i;
	page=1;//页码
$(function(){
	//判断屏幕宽度
	var winWide = window.screen.width;  //获取当前屏幕分辨率
	//alert("winWide"+winWide);
	var wideScreen = false;
	if(winWide <= 1024){  //1024及以下分辨率
	//这里写要加载的代码
	//alert("小于");
	$("#css").attr("href", "mobile_all-list.css");
	}
	else{  //大于1024的分辨率
	//这里写要加载的代码
	$("#css").attr("href", "all-list.css");
	//alert("大于");
	 }
    });	
//cookie的获取
function get_cookie(cookieName){
    //判断cookie是否存在
    if (document.cookie.length>0){
        pos=document.cookie.indexOf(cookieName + "=")
        if (pos!=-1){ 
            pos=pos + cookieName.length+1 
            last=document.cookie.indexOf(";",pos)
            if (last==-1) last=document.cookie.length
            return unescape(document.cookie.substring(pos,last))
        } 
      }
     return null;
    }