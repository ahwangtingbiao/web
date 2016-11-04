//DIV适配
function setSize(e1, e2, w, h, s) {
	//获取对象
	var e1 = document.getElementById(e1);
	var e2 = document.getElementById(e2);
	//取得浏览器页面可视区域的宽度
	var screenWidth = document.documentElement.clientWidth;
	//取得浏览器页面可视区域的高度
	var screenHeight = document.documentElement.clientHeight;
	//视频宽高比
	var wh = w / h;
	//设置显示尺寸
	if (screenHeight < screenWidth) {
		e1.style.width = s * w + "px";
		e1.style.height = s * h + "px";
		e2.style.paddingTop = (s * h - 20) / 2 + "px";
		e1.style.marginTop = (screenHeight - s * h) / 2 + "px";
	} else {
		e1.style.width = s * screenWidth + "px";
		e1.style.height = s * screenWidth / wh + "px";
		e1.style.marginTop = (screenHeight - s * screenWidth / wh) / 2 + "px";
		e2.style.paddingTop = (s * screenWidth / wh - 20) / 2 + "px";
	}
}

//网页缩放
function zoom(s) {
	//取得浏览器页面可视区域的宽度
	var screenHeight = document.documentElement.clientHeight;
	//取得浏览器页面可视区域的宽度
	var screenWidth = document.documentElement.clientWidth;
	if (screenHeight > screenWidth) {
		document.body.style.zoom = screenWidth / s;

	}

}

//添加class
function myAddClass(e, c) {
	//获取对象
	var e = document.getElementById(e);
	var cuclass = e.getAttribute("class");
	e.setAttribute("class", cuclass + " " + c);
}
