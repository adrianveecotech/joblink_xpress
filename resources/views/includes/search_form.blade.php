@if(Auth::guard('company')->check())
<h3 class="seekertxt">{{__('One million success stories')}}.</h3>
<h3 class="seekertxt">{{__('Search Jobseekers Today')}}.</h3>
<form action="{{route('job.seeker.list')}}" method="get">
	<div class="searchbar">
		<div class="srchbox seekersrch">
			<div class="input-group">
				<input type="text" name="search" id="empsearch" value="{{Request::get('search', '')}}" class="form-control" placeholder="{{__('Enter Skills or Job Seeker Details')}}" autocomplete="off" />
				<span class="input-group-btn">
					<input type="submit" class="btn" value="{{__('Search Job Seeker')}}">
				</span>
			</div>
		</div>



	</div>
</form>
@else
<h3><span>{{__('One million success stories')}}.</span> <span>{{__('Start yours today')}}.</span></h3>
<form action="{{route('job.list')}}" method="get">
	<div class="searchbar">
		<div class="srchbox">
			<div class="srcsubfld additional_fields">
				<div class="row">
					<label for=""> {{__('Keywords / Job Title')}}</label>
					<input type="text" name="search" id="jbsearch" value="{{Request::get('search', '')}}" class="form-control" placeholder="{{__('Enter Skills or job title')}}" autocomplete="off" />
				</div>

				<div class="row">
					<label for="">{{__('Select Functional Area')}}</label>
					{!! Form::select('functional_area_id[]', ['' => __('Select Functional Area')]+$functionalAreas, Request::get('functional_area_id', null), array('class'=>'form-control', 'id'=>'functional_area_id')) !!}
				</div>

				@if((bool)$siteSetting->country_specific_site)
				{!! Form::hidden('country_id[]', Request::get('country_id[]', $siteSetting->default_country_id), array('id'=>'country_id')) !!}
				@else
				<div class="row">
					<label for="">{{__('Select Country')}}</label>
					{!! Form::select('country_id[]', ['' => __('Select Country')]+$countries, Request::get('country_id', $siteSetting->default_country_id), array('class'=>'form-control', 'id'=>'country_id')) !!}
				</div>
				@endif
				<div class="row">
					<div class="col-6 w-95 m-0 p-0">
						<label for="">{{__('Select State')}}</label>
						<span id="state_dd">
							{!! Form::select('state_id[]', ['' => __('Select State')], Request::get('state_id', null), array('class'=>'form-control', 'id'=>'state_id')) !!}
						</span>
					</div>
					<div class="col-6 m-0 p-0">
						<label for="">{{__('Select City')}}</label>
						<span id="city_dd">
							{!! Form::select('city_id[]', ['' => __('Select City')], Request::get('city_id', null), array('class'=>'form-control', 'id'=>'city_id')) !!}
						</span>
					</div>
				</div>
				<div>
					<label for="">&nbsp;</label>
					<input type="submit" class="btn" value="{{__('Search Job')}}">
				</div>
			</div>



		</div>





	</div>
</form>
@endif