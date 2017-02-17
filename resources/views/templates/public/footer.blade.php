<script src=" {{ asset('/resources/assets/public/js/jquery.min.js') }} "></script>
<script src=" {{ asset('/resources/assets/public/js/bootstrap.min.js') }} "></script>
<script src=" {{ asset('/resources/assets/public/js/custom.js') }} "></script>
<div class="modal fade" id="login">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-center"> {{ trans('layout.login') }}</h4>
            </div>
            <div class="modal-body">
                <div class="spaced">
                    {!! Form::open(['route' => 'auth.auth.login', 'method' => 'post', 'class' => 'form-full-width']) !!}
                    <a href="{{ trans('layout.url.google') }}" class="btn btn-gplus btn-connect btn-large">
                        <span class="ico-wrap">
                            <span class="ico ico-gplus ico-white ico-m"></span>
                        </span> {{ trans('layout.google') }}
                    </a>
                    <div class="spacer"></div>
                    <a href="{{ trans('layout.url.facebook') }}" class="btn btn-flacebook btn-connect btn-large">
                        <span class="ico-wrap">
                            <span class="ico ico-facebook ico-white ico-m"></span>
                        </span> {{ trans('layout.facebook') }}
                    </a>
                    <div class="spacer"></div>
                    <a href="{{ trans('layout.url.twitter') }}" class="btn btn-twitter btn-connect btn-large">
                        <span class="ico-wrap">
                            <span class="ico ico-twitter ico-white ico-m"></span>
                        </span>{{ trans('layout.twitter') }}
                    </a>
                    <div class="interruption row-fluid">
                        <div class="span5">
                            <hr class="dashed">
                        </div>
                        <div class="span2">{{ trans('layout.or') }}</div>
                        <div class="span5">
                            <hr class="dashed">
                        </div>
                    </div>
                    <div class="field "> {!! Form::label("email", trans('layout.mail')) !!} {!! Form::email("email", old("email")) !!} </div>
                    <div class="field ">
                        {!! Form::label("password", trans('layout.password')) !!}
                        {!! Form::password("password") !!}
                    </div>
                    {!! Form::submit(trans('layout.login'),['class' => 'btn-success btn-large']) !!}
                    {!! Form::close() !!}
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
                    <h4 class="widget-title">{{ trans('layout.about') }}</h4>
                    <div class="textwidget">
                        <p><img src="{{ asset('resources/public/images/logo-footer.png') }}" alt="logo-footer" kasperskylab_antibanner="on"> </p>
                        <p>{{ trans('layout.welcome') }}</p>
                    </div>
                </aside>
                <aside id="tweets-feed-2" class="col-xs-6 widget widget_tweets-feed footer_widget">
                    <div class="thim-widget-tweets-feed thim-widget-tweets-feed-base">
                        <h4 class="widget-title">{{ trans('layout.the_best_learn') }}</h4>
                        <ul class="tweet">
                            <li> {{ trans('layout.content') }} </li>
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
                    <p class="text-copyright">{{ trans('layout.copyright') }} <i class="fa fa-copyright"></i> {{ trans('layout.design') }} </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="#" id="back-to-top"> <i class="fa fa-chevron-up"></i> </a>
</div>
</div>
<audio src="" id="au" type="audio/mpeg"></audio>
</html>
