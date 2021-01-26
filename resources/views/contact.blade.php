@extends('layouts.app')

@section('content')
    <div class="main-container contact">
        <div class="header">
            <div class="header-container header-contact">
                <div class="header-logo">
                    <a class="" href="{{ url('/') }}">
                        <img src="/images/logo_header.png">
                    </a>

                </div>
                <p class="header-title">CONTACT</p>
            </div>
            <div class="header-top-right">
                <img src="/images/header_top_right.jpg">
            </div>
        </div>
        <div class="body-container">
            <div class="left-nav"></div>
            <div class="social-media">
                <a href="https://www.instagram.com/lyssakayra" target="blank">
                    <div class="social-media-link">
                            <div class="link-icon">
                                <div class="icon-back" style="background-image: url('/images/social_bg_1.jpg');">
                                    <i class="fa fa-instagram fa-inverse"></i>
                                </div>
                            </div>
                            <div class="link-text">www.instagram.com/lyssakayra</div>
                    </div>
                </a>
                <a href="https://www.facebook.com/artistlyssa" target="blank">
                    <div class="social-media-link">
                            <div class="link-icon">
                                <div class="icon-back" style="background-image: url('/images/social_bg_2.jpg');">
                                    <i class="fa fa-facebook fa-inverse"></i>
                                </div>
                            </div>
                            <div class="link-text">www.facebook.com/artistlyssa</div>
                    </div>
                </a>
                <a href="mailto:info@lyssakayra.com">
                    <div class="social-media-link">
                        <div class="link-icon">
                            <div class="icon-back" style="background-image: url('/images/social_bg_3.jpg');">
                                <i class="fa fa-envelope fa-inverse"></i>
                            </div>
                        </div>
                        <div class="link-text">info@lyssakayra.com</div>
                    </div>
                </a>
                <a href="tel:+17788284092">
                    <div class="social-media-link">
                        <div class="link-icon">
                            <div class="icon-back" style="background-image: url('/images/social_bg_4.jpg');">
                                <i class="fa fa-phone fa-inverse"></i>
                            </div>
                        </div>
                        <div class="link-text">+1 (778) 828-4092</div>
                    </div> 
                </a>                          
            </div>
            {!! Form:: open(array('action' => 'ContactController@getContactUsForm')) !!} 
            <div class="contact-form">
            <div class="text-title"><p>SEND A MESSAGE</p></div>
            @if (! $errors->has('name'))  
                {!! Form::text('name', '', array('placeholder' => 'Your name', 'class' => 'form-control')); !!}
            @else
                {!! Form::text('name', '', array('placeholder' => 'Your name is required', 'class' => 'form-control error')); !!}            
            @endif
            @if (! $errors->has('email'))  
                {!! Form::email('email', '', array('placeholder' => 'Your email', 'class' => 'form-control')); !!}
            @else
                {!! Form::email('email', '', array('placeholder' => 'Your email is required', 'class' => 'form-control error')); !!}
            @endif
            @if (! $errors->has('message_content'))  
                {!! Form:: textarea ('message_content', '', array('placeholder' => 'Message', 'class' => 'form-control', 'id' => 'message', 'rows' => '4' )) !!}
            @else
                {!! Form:: textarea ('message_content', '', array('placeholder' => 'A message is required', 'class' => 'form-control error', 'id' => 'message', 'rows' => '4' )) !!}
            @endif
            </div>

            <div class="">
            {!! Form::submit('SEND', array('class' => 'btn btn-primary')) !!}
            @if (session('status'))
            <div class="success">
                {{ session('status') }}
            </div>
            @endif
            {!! Form:: close() !!}
            </div>
        </div>
        <div class="footer">
            <p>&#169; 2021 Lyssa Kayra</p>
        </div>
    </div>
    <script src="/assets/js/app.js"></script>


@endsection
