<!DOCTYPE html>
<html  lang="en-US">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="icon" type="image/png" href="{{getenv('PUBLIC_URL')}}/images/favicon.ico">
    <title>Elearning</title>
    <link rel="stylesheet" type="text/css" href="{{getenv('PUBLIC_URL')}}/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{getenv('PUBLIC_URL')}}/css/dashboard.css">
    <link rel="stylesheet" type="text/css" href="{{getenv('PUBLIC_URL')}}/css/browse.css">
    <link rel="stylesheet" type="text/css" href="{{getenv('PUBLIC_URL')}}/css/web.css">
    <link rel="stylesheet" type="text/css" href="{{getenv('PUBLIC_URL')}}/css/course.css">
    <link rel="stylesheet" type="text/css" href="{{getenv('PUBLIC_URL')}}/css/level.css">
    <link rel="stylesheet" type="text/css" href="{{getenv('PUBLIC_URL')}}/css/profile.css">
    <link rel="stylesheet" type="text/css" href="{{getenv('PUBLIC_URL')}}/css/garden.css">
    <link rel="stylesheet" type="text/css" href="{{getenv('PUBLIC_URL')}}/css/style.css" >
    <link rel="stylesheet" type="text/css" href="{{getenv('PUBLIC_URL')}}/css/custom_style.css">
    <link rel="stylesheet" type="text/css" href="{{getenv('PUBLIC_URL')}}/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" >
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=1623335627974998";
          fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
  </script>
</head>
<?php {echo $arsUser= Auth::user();} ?>
    <body class=" dashboard " >
        <div id="header" class="header-v2">
            <div class="header-row container" >
                <a class="header-logo" href="/" title="Trang chủ"> <span class="header-logo-wrapper">
                    <img src="{{getenv('PUBLIC_URL')}}/images/logo.png" alt="">
                </a>
                <ul class='btn_login pull-right list-unstyled'><li><button type="button" class="btn btn-default" id='btn_login' data-toggle="modal" href='#login' ><a id='btn_login' data-toggle="modal" href='#login' class="nav-item-btn"><span class="nav-item-btn-text">Đăng nhập</span> </a></button></li></ul>
                <ul class="header-nav ">
                    <li class="header-nav-item plain is-active">
                        <a href="/" class="nav-item-btn"> <span class="nav-item-btn-text">Trang chủ</span> </a>
                    </li>
                    <li class="header-nav-item plain ">
                        <a href="/courses/" class="nav-item-btn"> <span class="nav-item-btn-text">Khóa học</span> </a>
                    </li>
                    <li class="header-profile-wrapper">
                       <span class="header-info-card js-info-toggle">
                        <span class="info-card-inner" accesskey="h">
                            <span class="info-card-picture">
                              <?php if($arsUser) {?><img class="profile-avatar" src="{{getenv('STORAGE')}}/{{$arsUser['avatar']}}" alt="{{$arsUser['fullname']}}"><?php }?>
                          </span> <span class="profile-badge rank-badge rank-badge-memonimee rank-badge-s">
                          <span class="badge-inner badge-inner-s">
                            <span class="badge-ico"></span> </span>
                        </span>
                    </span>
                </span> <span class="header-dropdown-arrow js-info-toggle"></span>
                <ul class="header-profile-inner ">
                    <li class="profile-row">
                        <div class="profile-col rank-badge rank-badge-memonimee rank-badge-m">
                            <div class="badge-inner badge-inner-m">
                                <div class="badge-ico"></div>
                            </div>
                        </div>
                        <div class="profile-col rank-text rank-badge-memonimee">
                            <p class="profile-rank-text text-small">115,885 điểm</p>
                            <p class="profile-rank-text text-big">Memonimee</p>
                        </div>
                    </li>
                    <li class="profile-row profile-progress"> <span class="profile-progress-bar js-progress-bar" data-progress="0.3177"></span> </li>
                    <li class="profile-row">
                        <div class="profile-col rank-badge rank-badge-memblem rank-badge-m rank-badge-inactive">
                            <div class="badge-inner badge-inner-m">
                                <div class="badge-ico"></div>
                            </div>
                        </div>
                        <div class="profile-col rank-text rank-badge-memblem">
                            <p class="profile-rank-text text-small">+34,115 điểm tới</p>
                            <p class="profile-rank-text text-big"><strong>Memblem</strong>
                            </p>
                        </div>
                    </li>
                    <hr>
                    <li class="profile-row profile-links">
                        <a href="/user/<?php if($arsUser){echo $arsUser['username'];} ?>" class="profile-link"> <i class="profile-link-icon link-icon-1"></i> <span class="profile-link-text">Hồ sơ</span> </a>
                        <a href="/settings/" class="profile-link"> <i class="profile-link-icon link-icon-2"></i> <span class="profile-link-text">Cài đặt</span> </a>
                        <a href="./logout/" class="profile-link js-logout"> <i class="profile-link-icon link-icon-3"></i> <span class="profile-link-text">Đăng xuất</span> </a>
                    </li>
                </ul>
            </li>


        </ul>
    </div>
    <div class="session-header js-session-header review" style="display: none;">
        <div class="header-block header-left"> <span class="session-logo-wrapper">
            <span class="session-logo"></span> </span> <span class="session-pause-wrapper">
            <i class="ico ico-pause ico-white ico-xl js-pause-btn"></i>
        </span> </div>
        <div class="header-block header-middle">
            <div class="course-details-wrapper">
                <div class="course-details"> <span class="course-info">
                    <span class="details js-course-details">8 từ cần ôn tập</span> </span> <span class="course-title">
                    <span class="title js-course-title">Tiếng Anh nhập môn (A1)</span> </span>
                </div>
                <div class="header-points">
                    <div class="points-wrapper"> <span class="points-num">0</span> </div>
                </div>
            </div>
            <div class="bar-wrapper">
                <div class="bar js-bar" style="width: 12.5%;"></div>
            </div>
        </div>
        <div class="header-block header-right">
            <div class="header-user">
                <div class="user-picture"> <span class="rank-badge rank-badge-memonimee rank-badge-s">ˇ
                    <span class="badge-inner badge-inner-s">
                        <span class="badge-ico"></span> </span>
                    </span> <img src="http://d2rhekw5qr4gcj.cloudfront.net/img/100sqf/from/uploads/profiles/TnNguyn9c96_161015_0426_54.jpg" alt=""> </div>
                </div>
                <div class="header-exit">
                    <a class="session-exit" href="http://elearning/home/"></a>
                </div>
            </div>
        </div>
    </div>


    <div id="wrapper-container" class="wrapper-container">
        <div class="content-pusher">
