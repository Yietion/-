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
	{!! Form::open(['url' => 'foo/bar']) !!}
    		{!! Form::label('email', 'E-Mail Address') !!}
    		{!! Form::text('username', '', ['class' => 'form-input', 'style' => 'border:1px solid red']) !!}
    		{!! Form::password('password', ['class' => 'form-input']) !!}
    		{!! Form::email('email', $value = '549166802', $attributes = ['class' => 'form-input']) !!}
    		{!! Form::checkbox('name', 'value') !!}
    		{!! Form::date('name', \Carbon\Carbon::now()) !!}
    		{!! Form::file('image') !!}
    		{!! Form::select('animal', [
		        'Cats' => ['leopard' => 'Leopard'],
		        'Dogs' => ['spaniel' => 'Spaniel'],
		    ]) !!}
		    {!! Form::selectMonth('month') !!}
		{!! Form::close() !!}
@endsection
