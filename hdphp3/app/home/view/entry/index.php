<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>欢迎使用HDPHP</title>
	<link rel="stylesheet" href="{{__ROOT__}}/resource/hdjs/css/bootstrap.min.css">
</head>
<body style="background: #f3f3f3;">
<div style="padding: 50px;">
	<dl>
		<dt>基础</dt>
		<dd><a href="{{u('admin/user/add',['id'=>9,'cid'=>89])}}">添加用户</a></dd>
		<dd><a href="{{u('entry/assign')}}">测试响应</a></dd>
	</dl>
	<dl>
		<dt>数据库</dt>
		<dd><a href="{{u('database/connect')}}">数据库连接</a></dd>
		<dd><a href="{{u('database/core')}}">核心操作</a></dd>
		<dd><a href="{{u('database/query')}}">查询构造器</a></dd>
		<dd><a href="{{u('database/schema')}}">数据库操作</a></dd>
		<dd><a href="{{u('database/transaction')}}">事务处理</a></dd>
		<dd><a href="{{u('conf/base')}}">配置项</a></dd>
		<dd><a href="{{u('model/base')}}">模型基本操作</dd>
		<dd><a href="{{u('model/action')}}">模型动作</dd>
		<dd><a href="{{u('model/validate')}}">验证服务</dd>
		<dd><a href="{{u('model/auto')}}">自动完成</dd>
		<dd><a href="{{u('model/filter')}}">自动过滤</dd>
	</dl>
</div>
</body>
</html>