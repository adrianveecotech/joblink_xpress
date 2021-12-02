@extends('layouts.app')
@section('content')
<!-- Header start -->
@include('includes.header')
<!-- Header end --> 
<!-- Inner Page Title start -->
@include('includes.inner_page_title', ['page_title'=>__('Frequently asked questions')])
<!-- Inner Page Title end -->
<!-- Page Title End -->
<div class="listpgWraper">
    <div class="container"> 
        <!--Question-->
        <div class="faqs">
            <div class="panel-group" id="accordion">
                @if(isset($faqs) && count($faqs))
                @foreach($faq_categories as $header)
                <h5 class="mt-5">{{$header->name}}</h5>  
                @foreach($faqs as $faq)
                @if($faq->faq_category_id == $header->id)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse{{ $faq->id }}">{!! $faq->faq_question !!}</a> </h4>
                    </div>
                    <div id="collapse{{ $faq->id }}" class="panel-collapse collapse ml-2">
                        <div class="panel-body">{!! nl2br(e($faq->faq_answer)) !!}</div>
                        @if(isset($faq->video_url))
                        <iframe width="560" height="315" src="{{$faq->video_url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        @endif
                    </div>
                    
                </div>
                @endif
                @endforeach
                @endforeach
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">{!! $siteSetting->cms_page_ad !!}</div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>
@endsection