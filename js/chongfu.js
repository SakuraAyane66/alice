
function history(value) {
  var data = mystorage.get("search");
  if (!data) {
    var data = []; //定义一个空数组
  } else if (data.length === 12) {
    //搜索历史数量
    data.shift(); //删除数组第一个元素有
  } else {
  }
  if (value) {
    //判断搜索词是否为空
    if (data.indexOf(value) < 0) {
      //判断搜索词是否存在数组中
      data.push(value); //搜索词添加到数组中
      mystorage.set("search", data); //存储到本地化存储中
    }
  }
}
var mystorage = (function mystorage() {
  var ms = "mystorage";
  var storage = window.localStorage;
  if (!window.localStorage) {
    alert("浏览器不支持localstorage");
    return false;
  }
  var set = function (key, value) {
    //存储
    var mydata = storage.getItem(ms);
    if (!mydata) {
      this.init();
      mydata = storage.getItem(ms);
    }
    mydata = JSON.parse(mydata);
    mydata.data[key] = value;
    storage.setItem(ms, JSON.stringify(mydata));
    return mydata.data;
  };
  var get = function (key) {
    //读取
    var mydata = storage.getItem(ms);
    if (!mydata) {
      return false;
    }
    mydata = JSON.parse(mydata);
    return mydata.data[key];
  };
  var remove = function (key) {
    //读取
    var mydata = storage.getItem(ms);
    if (!mydata) {
      return false;
    }
    mydata = JSON.parse(mydata);
    delete mydata.data[key];
    storage.setItem(ms, JSON.stringify(mydata));
    return mydata.data;
  };
  var clear = function () {
    //清除对象
    storage.removeItem(ms);
  };
  var init = function () {
    storage.setItem(ms, '{"data":{}}');
  };
  return {
    set: set,
    get: get,
    remove: remove,
    init: init,
    clear: clear,
  };
})();

/* var xmlhttp;
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
 */

/*获取json属性个数的函数*/
function getJsonLength(jsonData) {
  var jsonLength = 0;
  for (var item in jsonData) {
    jsonLength++;
  }
  return jsonLength;
}
//跳转到Search界面
function gotoSearch() {
  var a = document.getElementById("search").value;
  window.location.href = "Search.html?keywords=" + a;
}
//判断input框是否为空
function isnull(val) {
  var str = val.replace(/(^\s*)|(\s*$)/g, ""); //去除空格;
  if (str == "" || str == undefined || str == null) {
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
function isGoto() {
  var a = document.getElementById("search").value;
  var search = $("#search").val();
  history(search); //添加到缓存
  isnull(a);
}
var i;
page = 1; //页码
$(function () {
  //判断屏幕宽度
  var winWide = window.screen.width; //获取当前屏幕分辨率
  //alert("winWide"+winWide);
  var wideScreen = false;
  if (winWide <= 1024) {
    //1024及以下分辨率
    //这里写要加载的代码
    //alert("小于");
    $("#css").attr("href", "mobile_all-list.css");
  } else {
    //大于1024的分辨率
    //这里写要加载的代码
    $("#css").attr("href", "all-list.css");
    //alert("大于");
  }
});
//cookie的获取
function get_cookie(cookieName) {
  //判断cookie是否存在
  if (document.cookie.length > 0) {
    pos = document.cookie.indexOf(cookieName + "=");
    if (pos != -1) {
      pos = pos + cookieName.length + 1;
      last = document.cookie.indexOf(";", pos);
      if (last == -1) last = document.cookie.length;
      return unescape(document.cookie.substring(pos, last));
    }
  }
  return null;
}
