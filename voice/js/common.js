//屏幕适配

function setVideoSize(id, id2, w, h, s) {
	//获取对象
	var vid = document.getElementById(id);
	var vid2 = document.getElementById(id2);
	//取得浏览器页面可视区域的宽度
	var screenWidth = document.documentElement.clientWidth;
	//视频宽高比
	var wh = w / h;
	//设置显示尺寸
	if (document.documentElement.clientHeight < document.documentElement.clientWidth) {
		vid.style.width = s * w + "px";
		vid.style.height = s * h + "px";
		vid2.style.paddingTop = (s * h - 20) / 2 + "px";
		vid.style.marginTop = (document.documentElement.clientHeight - s * h) / 2 + "px";
	} else {
		vid.style.width = s * screenWidth + "px";
		vid.style.height = s * screenWidth / wh + "px";
		vid.style.marginTop = (document.documentElement.clientHeight - s * screenWidth / wh) / 2 + "px";
		vid2.style.paddingTop = (s * screenWidth / wh - 20) / 2 + "px";
	}
}
