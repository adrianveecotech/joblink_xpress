<div class="section sectionLatestJob">
    <div class="container"> 
        <!-- title start -->
        <div class="titleTop titleWithLine">
            <h3>{{__('LATEST')}} <span>{{__('JOBS')}}</span></h3>
        </div>
        <!-- title end -->

        <ul class="jobslist newjbox row container">
            @if(isset($latestJobs) && count($latestJobs))
            @foreach($latestJobs as $latestJob)
            <?php $company = $latestJob->getCompany(); ?>
            @if(null !== $company)
            <!--Job start-->
            <li class="col-md-4">
                <div class="jobint">
                    <label class="fulltime" title="{{$latestJob->getJobType('job_type')}}">{{$latestJob->getJobType('job_type')}}</label> 
                    <div class="row container">
                        <div class="col-md-3 col-sm-3">
                            <a href="{{route('job.detail', [$latestJob->slug])}}" class="logoCompany" title="{{$latestJob->title}}">
                                {{$company->printCompanyImage()}}
                            </a>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <h4><a href="{{route('job.detail', [$latestJob->slug])}}" title="{{$latestJob->title}}">{{$latestJob->title}}</a></h4>
                            <div class="company"><a href="{{route('company.detail', $company->slug)}}" title="{{$company->name}}">{{$company->name}}</a> </div>
                            <div class="row company-location">
                            <img src=images/map_marker.png>
                            <div class="jobloc">
                               {{$latestJob->getCity('city')}}</div>
                        </div>                       
                        </div>                       
                    </div>
                </div>
            </li>
            <!--Job end--> 
            @endif
            @endforeach
            @endif
        </ul>
        <!--view button-->
        <div class="viewallbtn"><a href="{{route('job.list')}}">{{__('View All Latest Jobs')}}</a></div>
        <!--view button end--> 
    </div>
</div>