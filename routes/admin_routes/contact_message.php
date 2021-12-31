<?php

/* * ******  ContactMessage Start ********** */
Route::get('list-contact-message', array_merge(['uses' => 'Admin\ContactMessageController@indexContactMessage'], $all_users))->name('list.contact.message');
Route::get('fetch-contact.message', array_merge(['uses' => 'Admin\ContactMessageController@fetchContactMessageData'], $all_users))->name('fetch.data.contact.message');

/* * ****** End ContactMessage ********** */