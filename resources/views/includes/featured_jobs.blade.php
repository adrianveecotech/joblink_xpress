<div class="section">
    <div class="container"> 
        <!-- title start -->
        <div class="titleTop titleWithLine">
            <h3>{{__('FEATURED')}} <span>{{__('JOBS')}}</span></h3>
        </div>
        <!-- title end --> 

        <!--Featured Job start-->
        <ul class="jobslist row">
            @if(isset($featuredJobs) && count($featuredJobs))
            @foreach($featuredJobs as $featuredJob)
            <?php $company = $featuredJob->getCompany(); ?>
            @if(null !== $company)
            <!--Job start-->
            <li class="col-md-6">
                <div class="jobint">
                    <label class="fulltime" title="{{$featuredJob->getJobType('job_type')}}">{{$featuredJob->getJobType('job_type')}}</label>
                    <div class="row jobdesc">
                        <div class="col-lg-2 col-md-2">
                            <a href="{{route('job.detail', [$featuredJob->slug])}}" class="logoCompany" title="{{$featuredJob->title}}">
                                {{$company->printCompanyImage()}}
                            </a>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <h4><a href="{{route('job.detail', [$featuredJob->slug])}}" title="{{$featuredJob->title}}">{{$featuredJob->title}}</a></h4>
                            <div class="company"><a href="{{route('company.detail', $company->slug)}}" title="{{$company->name}}">{{$company->name}}</a></div>
                            <div class="row company-location">
                            <img src=images/map_marker.png>
                            <div class="jobloc">
                               {{$featuredJob->getCity('city')}}</div>
                        </div></div>
                        <div class="col-lg-3 col-md-3"><a href="{{route('job.detail', [$featuredJob->slug])}}" class="applybtn">{{__('View Details')}}</a></div>
                    </div>
                </div>
            </li>
            <!--Job end--> 
            @endif
            @endforeach
            @endif

        </ul>
        <!--Featured Job end--> 

        <!--button start-->
        <div class="viewallbtn"><a href="{{route('job.list', ['is_featured'=>1])}}">{{__('View All Featured Jobs')}}</a></div>
        <!--button end--> 
    </div>
</div>