// 显示代码
function show_code(){
	var url = window.location.href;
	if(url.indexOf("?") != -1){
		url = url.split("?")[0];
	}	
	
	var e = document.getElementById("show_code");
	if(e == null){
		window.location.href=url+"?action=show_code";
	}else{
		window.location.href=url;
	}
}

function modify_showcode_name(){
	var url = window.location.href;
	var btn_showcode = document.getElementById("handle_code");
	if(url.indexOf('show_code') >= 0){
		btn_showcode.innerHTML = "隐藏源码";
	}else{
		btn_showcode.innerHTML = "显示源码";
	}
}

// 打开提示
function get_prompt(){
	$.ajax({  
		type: 'get',  
		url: "helper.php?action=get_prompt", 
	}).success(function(data) {
		Dialog.open(400,200,data);
		//window.alert(data);
	}).error(function() {  
		Dialog.open(400,150,"获取提示失败！");
		//window.alert("获取提示失败！");
	});
}

// 清除上传文件
function clean_upload_file(){
	$.ajax({  
		type: 'get',  
		url: "../rmdir.php?action=clean_upload_file",	
	}).success(function(data) {
		Dialog.open(400,200,data);
	}).error(function() {
		Dialog.open(400,150,"删除失败！");
	}); 
}

// 初始化数据库
function init_database(){
	$.ajax({  
		type: 'get',  
		url: "../rmdir.php?action=clean_upload_file",	
	}).success(function(data) {
		Dialog.open(400,200,data);
	}).error(function() {
		Dialog.open(400,150,"删除失败！");
	}); 
}

function setFooter(){
	var min_height = window.innerHeight - 175;
	var obj = document.getElementById("main");
	obj.style.minHeight= min_height;
}

var Dialog = {
    mask: $('.mask'),
    dialog: $('.dialog'),
    content: $('.dialog-content'),
    open: function (width, height, appendHtml) {
        Dialog.mask.fadeIn(500);
        Dialog.dialog.css({ width: width, height: (height + 22), marginLeft: -(parseInt(width) / 2) }).addClass('loading').fadeIn(500, function () {
            Dialog.dialog.removeClass('loading');
            Dialog.content.append(appendHtml);
        });
    },
    close: function () {
        Dialog.mask.fadeOut(500);
        Dialog.dialog.fadeOut(500, function () {
            Dialog.content.empty();
        });
    }
}

$(function(){
	//修改显示源码按钮名称
	modify_showcode_name();

	//设置footer用于在底部
	setFooter();
	window.onresize = function(){
		setFooter();
	}

	//设置当前所在栏目的菜单按钮按下效果
	var path = window.location.pathname;
	var pass_id = path.match(/Pass-\d{2}/i);
	$("#"+pass_id).addClass('a_is_selected');

	//给弹出框绑定关闭事件
	$('.dialog').find('a.close').bind("click", function () {
        Dialog.close();
    });


	// 下面是测试，另一种左边菜单栏的展开与折叠
	$(function() {
		var Accordion = function(el, multiple) {
			this.el = el || {};
			this.multiple = multiple || false;

			// Variables privadas
			var links = this.el.find('.link');
			// Evento
			links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
		}

		Accordion.prototype.dropdown = function(e) {
			var $el = e.data.el;
				$this = $(this),
				$next = $this.next();

			$next.slideToggle();
			$this.parent().toggleClass('open');

			if (!e.data.multiple) {
				$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
			};
		}	

		var accordion = new Accordion($('#accordion'), false);
	});

});
