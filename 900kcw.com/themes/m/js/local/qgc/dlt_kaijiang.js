//为当前采种添加公共类型
/*
*/
var lotCode = lotCode.cjdlt;
//主体方法类
var boxId = "#headerData";
var headMethod = {};
headMethod.loadHeadData = function(obj) { 
	pubmethod.ajaxHead.cjdlt(obj);
}
headMethod.headData = function(jsondata,id) {
	pubmethod.creatHead.qgc(jsondata,id);
	tools.resetRed(id);//重置采种颜色
}
