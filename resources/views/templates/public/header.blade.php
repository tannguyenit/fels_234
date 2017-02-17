<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="icon" type="image/png" href="{{ asset('/resources/assets/public/images/favicon.ico') }}">
    <title>{!! trans('layout.title')!!}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/resources/assets/public/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/resources/assets/public/css/custom_style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/resources/assets/public/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
</head>
@if (Session::has("error"))
<p id='error' class="hidden">{{ Session::get("error")}}</p>
@else
<p id='error' class="hidden"></p>
@endif
<body class=" dashboard ">
    <div id="fb-root"></div>
    <div id="header" class="header-v2">
        <div class="header-row container">
            <a class="header-logo" href="/" title="{{ trans('layout.home') }}"> <span class="header-logo-wrapper">
              <img src="{{ asset('/resources/assets/public/images/logo.png') }}" alt="">
          </span> </a>
          <ul class='btn_login pull-right list-unstyled'>
            <li>
                <button type="button" class="btn btn-default" id='btn_login' data-toggle="modal" href='#login'>
                    <a id='btn_login' data-toggle="modal" href='#login' class="nav-item-btn"> <span class="nav-item-btn-text">{{ trans('layout.login') }}</span> </a>
                </button>
            </li>
        </ul>
        @if(isset($arsUser))
        <ul class="header-nav">
            <li class="header-nav-item plain is-active">
                <a href="{{ route('index.index') }}" class="nav-item-btn"> <span class="nav-item-btn-text">{{ trans('layout.home') }}</span> </a>
            </li>
            <li class="header-nav-item plain ">
                <a href="{{ route('course.cat') }}" class="nav-item-btn"> <span class="nav-item-btn-text">{{ trans('layout.course') }}</span> </a>
            </li>
            <li class="header-profile-wrapper">
                <span class="header-info-card js-info-toggle">
                    <span class="info-card-inner" accesskey="h">
                        <span class="info-card-picture">

                            <img class="profile-avatar" src="{{ asset('/storage/app/images/') }}/{{$arsUser['avatar']}}" alt="{{$arsUser['fullname']}}">

                        </span>
                        <span class="profile-badge rank-badge rank-badge-memonimee rank-badge-s">
                            <span class="badge-inner badge-inner-s">
                                <span class="badge-ico"></span>
                            </span>
                        </span>
                    </span>
                </span>
                <span class="header-dropdown-arrow js-info-toggle"></span>
                <ul class="header-profile-inner ">
                    <li class="profile-row">
                        <div class="profile-col rank-badge rank-badge-memonimee rank-badge-m">
                            <div class="badge-inner badge-inner-m">
                                <div class="badge-ico"></div>
                            </div>
                        </div>
                        <div class="profile-col rank-text rank-badge-memonimee">
                            <p class="profile-rank-text text-small">
                                @if (isset($arCourse)) {{ $arCourse[0]['scores'] . ' ' . trans('layout.scores') }} @endif </p>
                            </div>
                        </li>
                        <li class="profile-row profile-progress"> <span class="profile-progress-bar js-progress-bar" data-progress="0.3177"></span> </li>
                        <hr>
                        <li class="profile-row profile-links">
                            <a href="{{ route('user.index',$arsUser['username']) }}" class="profile-link"> <i class="profile-link-icon link-icon-1"></i> <span class="profile-link-text">{{ trans('layout.profile') }}</span> </a>
                            <a href="{{ route('user.setting') }}" class="profile-link"> <i class="profile-link-icon link-icon-2"></i> <span class="profile-link-text">{{ trans('layout.setting') }}</span> </a>
                            <a href="{{ route('auth.auth.logout') }}" class="profile-link js-logout"> <i class="profile-link-icon link-icon-3"></i> <span class="profile-link-text">{{ trans('layout.logout') }}</span> </a>
                        </li>
                    </ul>
                </li>
            </ul>
            @endif
        </div>

    </div>
    <div id="wrapper-container" class="wrapper-container">
        <div class="content-pusher">
