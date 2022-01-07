@extends('layouts.app')
@section('content')
<!-- Header start -->
@include('includes.header')
<!-- Header end --> 
<!-- Inner Page Title start -->
@include('includes.inner_page_title', ['page_title'=>__('Contact Us')])
<!-- Inner Page Title end -->
<div class="inner-page">
    <div class="container">
        <div class="contact-wrap">
            <div class="title"> <span>&nbsp;</span>
                <br>
                <br>
                <br>
                <br>
                <h2>{{__('Message received')}}</h2>
                <br>
                <p>{{__('Thank you for writing to us. We will reply you as soon as possible.')}}<br /><br />
                <br>
                <br>
                <br>
                <br>
                <br>                    
            </div>      
        </div>
    </div>
</div>
@include('includes.footer')
@endsection