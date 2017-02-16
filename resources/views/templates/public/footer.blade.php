<script src="{{getenv('PUBLIC_URL')}}/js/jquery.min.js"></script>
<script src="{{getenv('PUBLIC_URL')}}/js/bootstrap.min.js"></script>
<div class="modal fade" id="login">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-center">Đăng nhập</h4> </div>
            <div class="modal-body">
                <div class=" spaced">
                    <form action="{{ route('auth.auth.login') }}" method="post" class="form-full-width"> {{ csrf_field() }}
                        <div id="no-cookies" class="alert alert-danger hide"> Bạn chưa bật cookies trên trình duyệt. Vui lòng kích hoạt tại phần cài đặt bảo mật của trình duyệt để đăng nhập. </div>
                        <a href="/auth/google/" class="btn btn-gplus btn-connect btn-large"> <span class="ico-wrap">
                                <span class="ico ico-gplus ico-white ico-m"></span> </span> Đăng nhập bằng tài khoản Google + </a>
                        <div class="spacer"></div>
                        <a href="/auth/facebook/" class="btn btn-flacebook btn-connect btn-large"> <span class="ico-wrap">
                                <span class="ico ico-facebook ico-white ico-m"></span> </span> Đăng nhập bằng tài khoản Facebook </a>
                        <div class="spacer"></div>
                        <a href="/auth/twitter/" class="btn btn-twitter btn-connect btn-large"> <span class="ico-wrap">
                                    <span class="ico ico-twitter ico-white ico-m"></span> </span> Đăng nhập bằng tài khoản Facebook </a>
                        <div class="interruption row-fluid">
                            <div class="span5">
                                <hr class="dashed"> </div>
                            <div class="span2">hoặc</div>
                            <div class="span5">
                                <hr class="dashed"> </div>
                        </div>
                        <div class="field ">
                            <label for="id_username">Tên người dùng hoặc Email:</label>
                            <input class="inpt-large" name="email" type="email" tabindex="1"> </div>
                        <div class="field ">
                            <label for="id_password"> Mật khẩu: </label>
                            <input class="inpt-large" name="password" type="password" tabindex="2"> </div>
                        <input type="hidden" name="next" value="">
                        <br>
                        <input type="submit" class="btn-success btn-large" value="Đăng nhập" tabindex="3"> </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="goal-setter-popup">
    <div class="modal fade" id="target">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="display: none">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Modal title</h4> </div>
                <div class="modal-body">
                    <div class="modalContent">
                        <div class="header"> <img class="course-pic" src="http://d2rhekw5qr4gcj.cloudfront.net/img/400sqf/from/uploads/course_photos/2224242000150908114548.png" alt="">
                            <div class="title">
                                <p>Tiếng Anh nhập môn (A1)</p> <span class="subtitle">Hãy đặt mục tiêu hàng ngày, rồi hoàn thành mục tiêu để giành phần thưởng!</span> </div>
                        </div>
                        <div class="content goal-choices" id="goals">
                            <div class="goal-choice ob-choice first" data-level="0" data-next-step="upsell">
                                <div class="choice-left"> <span class="img"></span> <span class="text">1,500 điểm</span> <span class="desc">Nếu bạn là người bận rộn, mục tiêu này sẽ giúp bạn dành chút ít thời gian để học.</span> </div>
                                <div class="choice-right">
                                    <div class="main-text">5 phút mỗi ngày</div>
                                </div>
                                <div class="dot "></div>
                            </div>
                            <div class="goal-choice ob-choice second" data-level="1" data-next-step="upsell">
                                <div class="choice-left"> <span class="img"></span> <span class="text">6,000 điểm</span> <span class="desc">Bạn đã bắt đầu vào guồng rồi đấy... Hãy đẩy nhanh tiến độ lên nào.</span> </div>
                                <div class="choice-right">
                                    <div class="main-text">15 phút mỗi ngày</div>
                                </div>
                                <div class="dot "></div>
                            </div>
                            <div class="goal-choice ob-choice third" data-level="2" data-next-step="upsell">
                                <div class="choice-left"> <span class="img"></span> <span class="text">20,000 điểm</span> <span class="desc">Bạn muốn biết mọi thứ. Hãy đi lấy nó!</span> </div>
                                <div class="choice-right">
                                    <div class="main-text">45 phút mỗi ngày</div>
                                </div>
                                <div class="dot "></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #main-content -->
<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="footer">
        <div class="container">
            <div class="row">
                <aside id="text-2" class="col-xs-6 widget widget_text footer_widget">
                    <h4 class="widget-title">About eLearning</h4>
                    <div class="textwidget">
                        <p><img src="{{getenv('PUBLIC_URL')}}/images/logo-footer.png" alt="logo-footer" kasperskylab_antibanner="on"> </p>
                        <p>Welcome to E Learning. Come with us to get the best knowledge</p>
                    </div>
                </aside>
                <aside id="tweets-feed-2" class="col-xs-6 widget widget_tweets-feed footer_widget">
                    <div class="thim-widget-tweets-feed thim-widget-tweets-feed-base">
                        <h4 class="widget-title">The best way to learn a language</h4>
                        <ul class="tweet">
                            <li>Elearning school together, you will see a very funny and attractive. Spend extra points from the correct answer, reply quickly before time runs out or the next level. Compact mini-lessons our very effective for everyone</li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <!--==============================powered=====================================-->
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <p class="text-copyright">Copyright 2017 <i class="fa fa-copyright"></i> Design by Elearning Team </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="#" id="back-to-top" style="bottom: 15px;"> <i class="fa fa-chevron-up"></i> </a>
</div>
</div>
<audio src="" id="au" type="audio/mpeg"></audio>
<script type="text/javascript">
$(document).ready(function() {
    var lasturl = (location.href.substr(location.href.lastIndexOf('/') + 1));
    if(lasturl == 'learn' || lasturl == 'review') {
        $(".header-row").remove();
        $(".session-header").css('display', 'block');
    } else if(lasturl == '') {
        $(".session-header").remove();
        $(".header-row").css('display', 'block !important');
        $(".header-nav ").remove();
        $('body').removeAttribute('style')
    } else {
        $(".header-row").css('display', 'block !important');
        $(".btn_login ").remove();
    }
});
$(window).on('load', function(e) {
    if(window.location.hash == '#_=_') {
        window.location.hash = ''; // for older browsers, leaves a # behind
        history.pushState('', document.title, window.location.pathname); // nice and clean
        e.preventDefault(); // no page reload
    }
})
$(function() {
    $("#audio").mouseover(function(e) {
        var audio = new Audio();
        audio.src = 'http://translate.google.com/translate_tts?ie=UTF-8&total=1&idx=0&textlen=32&client=tw-ob&q=hello&tl=en';
        audio.play();
        e.preventDefault();
        var e = document.getElementById("readword");
        var text = e.innerHTML;
        //var text= $('input[name="text"]').val();
        text = encodeURIComponent(text);
        var url = "http://translate.google.com/translate_tts?ie=UTF-8&total=1&idx=0&textlen=32&client=tw-ob&q=" + text + "&tl=en";
        $('#au').attr('src', url).get(0).play();
    })
});
$("#audio").click(function() {
    $("#audio").mouseover();
});
$(".header-profile-wrapper").click(function() {
    $(".header-profile-inner").toggle("slow", function() {
        $(".header-profile-inner").addClass('is-active');
    });
});
$('#myCarousel').carousel({
    interval: 4000
})
$('.carousel .item').each(function() {
    var next = $(this).next();
    if(!next.length) {
        next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    for(var i = 0; i < 2; i++) {
        next = next.next();
        if(!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
    }
});
</script>

</html>
