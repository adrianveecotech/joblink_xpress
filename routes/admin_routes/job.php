<?php

/* * ******  Job Start ********** */
Route::get('list-jobs', array_merge(['uses' => 'Admin\JobController@indexJobs'], $all_users))->name('list.jobs');
Route::get('pending-approval-jobs', array_merge(['uses' => 'Admin\JobController@pendingApprovalJobs'], $all_users))->name('pending_approval.jobs');
Route::get('create-job', array_merge(['uses' => 'Admin\JobController@createJob'], $all_users))->name('create.job');
Route::post('store-job', array_merge(['uses' => 'Admin\JobController@storeJob'], $all_users))->name('store.job');
Route::get('edit-job/{id}', array_merge(['uses' => 'Admin\JobController@editJob'], $all_users))->name('edit.job');
Route::put('update-job/{id}', array_merge(['uses' => 'Admin\JobController@updateJob'], $all_users))->name('update.job');
Route::delete('delete-job', array_merge(['uses' => 'Admin\JobController@deleteJob'], $all_users))->name('delete.job');
Route::get('fetch-jobs', array_merge(['uses' => 'Admin\JobController@fetchJobsData'], $all_users))->name('fetch.data.jobs');
Route::get('fetch-pending-jobs', array_merge(['uses' => 'Admin\JobController@fetchPendingJobsData'], $all_users))->name('fetch.data.pending_jobs');
Route::put('make-active-job', array_merge(['uses' => 'Admin\JobController@makeActiveJob'], $all_users))->name('make.active.job');
Route::put('make-approve-job', array_merge(['uses' => 'Admin\JobController@makeApproveJob'], $all_users))->name('make.approve.job');
Route::put('make-not-active-job', array_merge(['uses' => 'Admin\JobController@makeNotActiveJob'], $all_users))->name('make.not.active.job');
Route::put('make-featured-job', array_merge(['uses' => 'Admin\JobController@makeFeaturedJob'], $all_users))->name('make.featured.job');
Route::put('make-not-featured-job', array_merge(['uses' => 'Admin\JobController@makeNotFeaturedJob'], $all_users))->name('make.not.featured.job');
/* * ****** End Job ********** */