@extends('layout.basic')

@section('title','电影院')

@section('header')
    @parent
@endsection

@section('content')
    @parent
    <div class="filmInfo-banner">
        <div class="wrapper">
            <div class="filmInfo-box">
                <div class="filmInfo-img">
                    <img src="http://p1.meituan.net/movie/65ee71e7b58be81f612f2d28907d5ef01223359.jpg" alt="">
                </div>
                <div class="filmInfo-info">
                    <h3>黑豹</h3>
                    <p>剧情，动作，科幻</p>
                    <p>美国/135分钟</p>
                    <p>2018-03-09大陆上映</p>
                    <a href="href" class="filmInfo-ticket">查看更多电影信息</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 80px">

        <div class="tags">
            <div class="type tag-box">
                <div class="tag-title">品牌：</div>
                <div class="tag-content">
                    <a data-type="">爱情</a>
                    <a>喜剧</a>
                </div>
            </div>
            <div class="type tag-box">
                <div class="tag-title">地区：</div>
                <div class="tag-content">
                    <a data-type="">爱情</a>
                    <a>喜剧</a>
                </div>
            </div>
            <div class="area tag-box">
                <div class="tag-title">影厅：</div>
                <div class="tag-content">
                    <a>爱情</a>
                    <a>喜剧</a>
                    <a>爱情</a>
                    <a>喜剧</a>
                    <a>爱情</a>
                    <a>喜剧</a>
                    <a>爱情</a>
                    <a>喜剧</a>
                    <a>爱情</a>
                    <a>喜剧</a>
                    <a>爱情</a>
                    <a>喜剧</a>
                    <a>爱情</a>
                    <a>喜剧</a>
                    <a>爱情</a>
                    <a>喜剧</a>
                    <a>爱情</a>
                    <a>喜剧</a>
                    <a>爱情</a>
                    <a>喜剧</a>
                    <a>爱情</a>
                    <a>喜剧</a>
                    <a>爱情</a>
                    <a>喜剧</a>
                    <a>爱情</a>
                    <a>喜剧</a>
                    <a>爱情</a>
                    <a>喜剧</a>
                    <a>爱情</a>
                    <a>喜剧</a>
                    <a>爱情</a>
                    <a>喜剧</a>
                    <a>爱情</a>
                    <a>喜剧</a>
                    <a>爱情</a>
                    <a>喜剧</a>
                </div>
            </div>
        </div>
        <div class="cinema-title">
            <div class="cinema-line">|</div>
            <h3>影院列表</h3>
        </div>
        <div class="cinema-list">
            <div class="cinema-unit">
                <div class="cinema-info">
                    <a href="">橙天影城(遵义店)</a>
                    <span>地址：红花岗区中山路好百领商场二楼</span>
                </div>
                <div class="cinema-ticket">
                    <div class="price">￥23起</div>
                    <a href="" class="">选座购票</a>
                </div>
            </div>
            <div class="cinema-unit">
                <div class="cinema-info">
                    <a href="">橙天影城(遵义店)</a>
                    <span>地址：红花岗区中山路好百领商场二楼</span>
                </div>
                <div class="cinema-ticket">
                    <div class="price">￥23起</div>
                    <a href="" class="">选座购票</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @parent
@endsection