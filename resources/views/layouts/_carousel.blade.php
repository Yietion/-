<div id="myCarousel" class="carousel slide">
    <!-- 轮播（Carousel）指标 -->
    <ol class="carousel-indicators">
    	@foreach($pictures as $key => $vo)
        <li data-target="#myCarousel" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
        @endforeach
    </ol>
    <!-- 轮播（Carousel）项目 -->
    <div class="carousel-inner">
    @foreach($pictures as $key => $vo)
        <div class="item {{ $key == 0 ? 'active' : '' }}">
            <img src="http://www.runoob.com/wp-content/uploads/2014/07/slide{{ $vo }}.png" alt="First slide">
            <div class="carousel-caption">标题{{ $vo }}</div>
        </div>
    @endforeach
    </div>
    <!-- 轮播（Carousel）导航 -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>