@extends('templates.public.template')
@section('content')
@php
$arsUser=Auth::user();
@endphp
<div id="content">
    <div class="container container-main">
        <div class="tabbed-sidebar col-xs-3">
            <div class="sidebar-box sidebar-profile">
                <div class="profile-header">
                    <div class="image-wrapper">
                        <img class="profile-image" src="{{ asset('/storage/app/images/'.$arsUser['avatar']) }}">
                    </div>
                </div>
                <div class="profile-content">
                    <div class="content-general">
                        <p class="name">{{$arsUser['username']}}</p>
                    </div>
                    <div class="content-stats">
                        <div class="left">
                            <p class="number js-num">105</p>
                            <p class="text">{{ trans('layout.learn_about') }}</p>
                        </div>
                        <div class="right">
                            <p class="number js-num">115,885</p>
                            <p class="text"> {{ trans('layout.scores') }} </p>
                        </div>
                    </div>
                    <div class="sidebar-main-btn profile-link">
                        <a href="{{ trans('layout.url.user') . $arsUser['username'] }} " class="simple">
                            {{ trans('layout.view_profile') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="tabbed-main page col-xs-8">
            <section>
                <div class="course-cards-component js-course-cards-component">
                    <div>
                        <div id="course-750787" class="course-card-container js-course-card-container">
                            <div class="course-progress-box">
                                <div class="card-top col-xs-12">
                                    <div class="card-image-col col-xs-2">
                                        <a href="http://elearning/course/750787/tieng-anh-nhap-mon-a1/">
                                           <div class="img-crop"><img src="http://d2rhekw5qr4gcj.cloudfront.net/img/400sqf/from/uploads/course_photos/2224242000150908114548.png" class="course-photo"><img src="https://d107cgb5lgj7br.cloudfront.net/uploads/category_photos/en.png" class="category-photo"></div>
                                       </a>
                                   </div>
                                   <div class="card-main-container col-xs-10">
                                    <div class="top-main">
                                        <div class="wrapper">
                                            <div class="detail">
                                                <p title="Tiếng Anh nhập môn (A1)" class="title"><a href="http://elearning/course/750787/tieng-anh-nhap-mon-a1/">Tiếng Anh nhập môn (A1)</a>
                                                </p>
                                            </div>
                                            <div class="pull-right"><span title="Hãy đặt mục tiêu học tập cho mình" class="simple-btn goal-setter-btn active"><span class="onoff">Hôm nay:<span class="pts"><span class="orange">0</span>/ 6000 điểm</span>
                                            </span>
                                        </span><a href="http://elearning/course/750787/tieng-anh-nhap-mon-a1/leaderboard"><span class="simple-btn leaderboard-btn"><span class="leaderboard-icon"></span></span></a><span class="ctrl-btn"><span class="icon"></span>
                                        <ul class="tooltip">
                                            <li><a href="http://elearning/course/750787/tieng-anh-nhap-mon-a1/" class="option-btn"><i class="option-pin"></i>Thông tin khóa học</a>
                                            </li>
                                            <li><a href="#" data-url="http://elearning/course/750787/tieng-anh-nhap-mon-a1/" data-title="Tiếng Anh nhập môn (A1)" data-picture="http://d2rhekw5qr4gcj.cloudfront.net/img/400sqf/from/uploads/course_photos/2224242000150908114548.png" data-description="Khóa tiếng Anh Memrise A1 tập trung vào cả ngữ pháp và từ vựng. Bạn sẽ được học những từ và cụm từ quen thuộc nhất trong tiếng Anh!" data-caption="Học cùng Memrise là một cách giúp bạn vừa vui chơi, dễ dàng tăng cường trí nhớ!" class="option-btn"><i class="option-share"></i>Chia sẻ với bạn bè</a>
                                            </li>
                                            <li><span class="option-btn"><i class="option-delete"></i>Bỏ khóa học</span>
                                            </li>
                                        </ul>
                                    </span>
                                </div>
                                <div class="wrapper">
                                    <div class="course-progress">
                                    <div class="right"><span> Đã học 104 / 1554 từ</span>
                                        </div>
                                        <div class="progress-bar-container">
                                            <div style="width: 6%" class="progress-bar"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-bottom">
                    <div class="course-actions">
                        <a href="/course/750787/tieng-anh-nhap-mon-a1/garden/review/" title="" data-toggle="tooltip" data-placement="bottom" class="button blue" >
                            <span class="text">Ôn tập (89)</span>
                        </a>
                        <a href="http://elearning/course/750787/tieng-anh-nhap-mon-a1/garden/learn/" title="" data-toggle="tooltip" data-placement="bottom" class="button green" data-original-title="Học từ mới">
                            <span class="text">Học</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<section>
    <h1>
        Có thể theo dõi
    </h1>
    <div class="box box-onboarding box-follow col-xs-12">
        <div class="people-rows">
            <?php for ($i=0; $i < 6; $i++) { ?>
            <div class="col-xs-3" data-role="hovercard" data-user-id="20929621" data-direction="top">
                <div class="user-box">
                    <div class="user-box-inner">
                        <div class="user-inline">
                            <a href="http://elearning/user/siwarinfha85/"> <img src="https://scontent.fdad2-1.fna.fbcdn.net/v/t1.0-9/13726863_598557636984021_281932714820276770_n.jpg?oh=8e84de40dcfee5ab25ca7737a7fdd605&oe=59448E5F" alt="" class="img-rounded whitebox"> </a> <a class="username" href="http://elearning/user/siwarinfha85/">
                            Tân Nguyễn
                        </a> </div>
                        <a class="mempal-button button green" data-user-id="20929621" data-role="mempal-button"> <span class="text">


                            Theo dõi


                        </span> </a>
                    </div>
                </div>
            </div>
            <?php }?>

        </div>
    </div>
</section>
</div>
</div>
</div>
@stop
