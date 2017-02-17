@extends('templates.public.template')
@section('content')

<div id="main-content" class="home-content home-page container" role="main">
    <div id="pl-1642">
        <div class="panel-grid" >
            <div id='background_home' class="panel-row-style-overlay-blacktext-center siteorigin-panels-stretch overlay-black text-center panel-row-style" >
                <div class="panel-grid-cell" >
                    <div class="so-panel widget widget_empty-space panel-first-child" id="panel-1642-0-0-0" data-index="0">
                    </div>
                    <div class="so-panel widget widget_icon-box" id="panel-top" data-index="1">
                     <a class="icon-box-link" href="">
                         <div class="widget-title-icon-box ">
                            <h3 class="icon-box-title">{!! trans('layout.start') !!}</h3>
                        </div>
                    </a>
                </div>
                <div class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce" id="panel-1642-0-0-3" data-index="3">
                    <div class="panel-widget-style ">
                        <div class="textwidget">
                            <ul class="list-info">
                                <li class="col-xs-12 col-md-4"><i class="fa fa-graduation-cap">&nbsp;</i>
                                    <a href="#"> {{ trans('layout.over') }} </a>
                                </li>
                                <li class="col-xs-12 col-md-4"><i class="fa fa-book">&nbsp;</i>
                                    <a href="#">{{ trans('layout.more_than') }}</a>
                                </li>
                                <li class="col-xs-12 col-md-4"><i class="fa fa-paper-plane">&nbsp;</i>
                                    <a href="#">{{ trans('layout.learn_any') }}</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-grid" >
        <div class="panel-row-style-background-left siteorigin-panels-stretch background-left panel-row-style" data-stretch-type="full">
            <div class="panel-grid-cell col-xs-12 col-md-4">
                <div class="so-panel widget widget_icon-box panel-last-child" id="panel-1642-1-0-1" data-index="6">
                    <div class="thim-widget-icon-box thim-widget-icon-box-base">
                        <a class="icon-box-link" href="">
                            <div class="wrapper-box-icon text-center circle" data-text-readmore="#fff">
                                <div class="smicon-box icon-top">
                                    <div class="boxes-icon circle">
                                        <span class="inner-icon">
                                            <span class="icon">
                                                <i class="fa fa-trophy"></i>
                                            </span>
                                        </span>
                                    </div>
                                    <div class="content-inner">
                                        <div class="widget-title-icon-box ">
                                            <h3 class="icon-box-title">{{ trans('layout.best') }}</h3>
                                        </div>
                                        <div class="desc-icon-box">
                                            <p class='we-pride'>{{ trans('layout.we_pride') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="panel-grid-cell col-xs-12 col-md-4" >
                <div class="so-panel widget widget_icon-box panel-last-child" id="panel-1642-1-1-1" data-index="8">
                    <div class="thim-widget-icon-box thim-widget-icon-box-base">
                        <a class="icon-box-link" href="">
                            <div class="wrapper-box-icon text-center circle" data-text-readmore="#fff">
                                <div class="smicon-box icon-top">
                                    <div class="boxes-icon circle" ><span class="inner-icon"><span class="icon"><i class="fa fa-desktop"></i></span></span>
                                    </div>
                                    <div class="content-inner">
                                        <div class="widget-title-icon-box ">
                                            <h3 class="icon-box-title" >
                                                {{ trans('layout.learn_any')  }}
                                            </h3>
                                        </div>
                                        <div class="desc-icon-box">
                                            <p class='we-pride' >
                                                {{ trans('layout.learn_online') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="panel-grid-cell col-xs-12 col-md-4" >
                <div class="so-panel widget widget_single-images panel-first-child panel-last-child" id="panel-1642-1-2-0" data-index="9">
                    <div class="custom-images panel-widget-style">
                        <div class="thim-widget-single-images thim-widget-single-images-base">
                            <div class="single-image center"><img id='image_single' src="{{ asset('/resources/assets/public/images/images-book-1.png') }}" alt="" kasperskylab_antibanner="on" > </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-grid" >
        <div class="panel-grid-cell" >
            <div class="so-panel widget widget_courses panel-first-child panel-last-child" id="panel-1642-2-0-0" data-index="10">
                <div class="thim-widget-courses thim-widget-courses-base">
                    <div class="widget-box-title">
                        <h2  class="title popular">{{ trans('layout.popular') }}</h2>
                    </div>
                    <div class="carousel slide " >
                        <div class="carousel-inner wrapper-item">
                            <div class="item active">
                                @foreach ($arCat as $key => $value)
                                <div class="col-xs-3">
                                    <div class="inner-course">
                                        <div class="course-thumbnail">
                                            <a itemprop="url" href="javascript:void(0)">
                                                <img src="{{ asset('resources/assets/public/images/' . $value->image) }}" class="attachment-medium size-medium wp-post-image" alt="" itemprop="image"  sizes="(max-width: 300px) 100vw, 300px" kasperskylab_antibanner="on" height="300" width="300"> </a>
                                            </div>
                                            <div class="course-title" itemprop="name">
                                                <h2>
                                                    <a href="" itemprop="url">
                                                        {{$value->nameCat}}
                                                    </a>
                                                </h2>
                                            </div>
                                            <div class="course-price">
                                                {{ $value->name }}
                                                <meta itemprop="priceCurrency" content="$">
                                            </div>
                                            <div class="course-student"> <span>
                                                <i class="dashicons dashicons-groups"></i>
                                                {{ $value->student }}  {{ trans('layout.students') }}
                                            </span> <span class="course-rating">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!--end-->
        </div>
    </div>
</div>
</div>
<div class="clearfix"></div>
<div class="panel-grid " id="pg-1642-6">
    <div class="siteorigin-panels-stretch panel-row-style news_style"  data-stretch-type="full">
        <div class="panel-grid-cell col-xs-12 col-md-5" id="pgc-1642-6-0" >
            <div class="so-panel widget widget_single-images panel-first-child panel-last-child" id="panel-1642-6-0-0" data-index="15">
                <div class="images-student panel-widget-style">
                    <div class="thim-widget-single-images thim-widget-single-images-base">
                        <div class="single-image center"><img src="{{ asset('/resources/assets/public/images/students-1.png') }}" alt="" kasperskylab_antibanner="on" height="261" width="367"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@stop
