@extends('layouts.app')
@section('title', '首页')
<style>
<style>
img {
    display: block;
    margin: 0 auto;
}
</style>
</style>
@section('content')
	@include('layouts._carousel', ['pictures' => [1,2,3]])
	<div class="well well-lg">您好，我是首页！</div>
	<div class="row visible-sm-12 hidden-md hidden-lg">
		<div class="row">
			<div class="col-sm-3 col-md-3">
		        <a href="#" class="thumbnail">
		            <img src="http://imgsrc.baidu.com/forum/pic/item/0b46f21fbe096b63c7397ec70c338744ebf8ac00.jpg" alt="通用的占位符缩略图">
		        </a>
		    </div>
			<div class="col-sm-3 col-md-3">
		        <a href="#" class="thumbnail">
		            <img src="http://imgsrc.baidu.com/forum/pic/item/0b46f21fbe096b63c7397ec70c338744ebf8ac00.jpg" alt="通用的占位符缩略图">
		        </a>
		    </div>
		    <div class="col-sm-3 col-md-3">
		        <a href="#" class="thumbnail">
		            <img src="http://imgsrc.baidu.com/forum/pic/item/0b46f21fbe096b63c7397ec70c338744ebf8ac00.jpg" alt="通用的占位符缩略图">
		        </a>
		    </div>
		    <div class="col-sm-3 col-md-3">
		        <a href="#" class="thumbnail">
		            <img src="http://imgsrc.baidu.com/forum/pic/item/0b46f21fbe096b63c7397ec70c338744ebf8ac00.jpg" alt="通用的占位符缩略图">
		        </a>
		    </div>
		</div>
		<div class="col-sm-12">
			456789
		</div>
	</div>
@endsection
