
@extends('layouts.app')
@section('content')
<!-- Header start -->
@include('includes.header')
<!-- Header end --> 
<!-- Inner Page Title start -->
@include('includes.inner_page_title', ['page_title'=>__('Page Not Found')])
<!-- Inner Page Title end -->
<div class="about-wraper"> 
    <!-- About -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{__('Feature locked')}}</h2>
                <p>{{__('Sorry, you have to pay to unlock the feature of viewing job seekers')}}</p>
            </div>      
        </div>
    </div>  
</div>
@include('includes.footer')
@endsection