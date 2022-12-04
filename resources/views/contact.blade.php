@extends('app')
@section('title', 'Contact')

@section('cssfile')
<link rel="stylesheet" type="text/css" href="{{asset('newcssfile/contact.css')}}">
@endsection

@section('content')
<section class="htc__contact__area">
            <div class="contact__row">
               
                    <div class="contact__wrap">
                        <h2 class="heading__style">Contact Info</h2>
                        <div class="htc__contact__inner">
                            <!-- Start Single Address -->
                            <div class="contact__address">
                                <div class="cont__icon">
                                    <i class="icon ion-ios-location"></i>
                                    <span>address</span>
                                </div>
                                <p>29/B PAF Link Road Sargodha</p>
                            </div>
                            <!-- End Single Address -->
                            <!-- Start Single Address -->
                            <div class="contact__address">
                                <div class="cont__icon">
                                    <i class="icon ion-android-call"></i>
                                    <span>phone</span>
                                </div>
                                <p><a href="tel:+00123456789">
                                048 376 9683</a></p>
                            </div>
                            <!-- End Single Address -->
                            <!-- Start Single Address -->
                            <div class="contact__address">
                                <div class="cont__icon">
                                    <i class="icon ion-android-mail"></i>
                                    <span>Email</span>
                                </div>
                                <p><a href="mailto:www.yourmail.com">cgss.sargodha@gmail.com</a></p>
                            </div>
                            <!-- End Single Address -->
                        </div>
                    </div>
                           
                    <div class="contact__form">
                        <h2 class="contact__title">Send A Message</h2>
                        <div class="form-output">
                        <p class="form-messege">
                            @if(Session::has('message'))
                            @component('components.alert')
                            {{ Session::get('message') }}
                            @endcomponent
                            @endif
                        </p>
                        </div>
            <div class="contact-form-wrap">
                <form action="submitcontact" method="POST">
                    @csrf
                <div class="form__row">
                    <div class="input__div left__input">
                        <input type="text" id="inputname" name="name" value="{{ old('name') }}" placeholder="Your Name*">
                        @error('name')
                        <span style="color:#f36371;font-size: 12px;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input__div right__input">
                        <input type="email" id="inputemail" name="email" value="{{ old('email') }}" placeholder="Your Email *">
                        @error('email')
                            <span style="color:#f36371;font-size: 12px;">{{ $message }}</span>
                        @enderror
                    </div>
                    </div>
                        <div class="form-group">
                            <input type="text" id="inputsubject" name="subject" value="{{ old('subject') }}" placeholder="Subject">
                            @error('subject')
                            <span style="color:#f36371;font-size: 12px;">{{ $message }}</span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <textarea id="message" rows="4" placeholder="Message" name="message" value="{{ old('message') }}"></textarea>
                            @error('message')
                            <span style="color:#f36371;font-size: 12px;">{{ $message }}</span>
                        @enderror   
                        </div>
                                <div class="contact-btn">
                                    <button type="submit" class="htc__btn btn--theme" >Submit</button> 
                                </div>
                            </form>
                        </div> 
                    </div>
            </div>
   
    </section>
@endsection