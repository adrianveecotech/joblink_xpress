<?php

namespace App\Http\Controllers\Admin;

use App\ContactMessage;
use Auth;
use DB;
use Input;
use File;
use Carbon\Carbon;
use ImgUploader;
use Redirect;
use App\SalaryPeriod;
use App\Language;
use App\Helpers\MiscHelper;
use App\Helpers\DataArrayHelper;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class ContactMessageController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function indexContactMessage()
    {
        $languages = DataArrayHelper::languagesNativeCodeArray();
        return view('admin.contact_message.index')->with('languages', $languages);
    }

    public function fetchContactMessageData(Request $request)
    {
        $contact_messages = ContactMessage::select(
                        [
                            'contact_messages.full_name',
                            'contact_messages.email',
                            'contact_messages.phone',
                            'contact_messages.message_txt',
                            'contact_messages.subject',
                            'contact_messages.created_at'
        ]);
        return Datatables::of($contact_messages)
                        ->filter(function ($query) use ($request) {
                            if ($request->has('name') && !empty($request->name)) {
                                $query->where('contact_messages.full_name', 'like', "%{$request->get('name')}%");
                            }
                            if ($request->has('email') && !empty($request->email)) {
                                $query->where('contact_messages.email', 'like', "%{$request->get('email')}%");
                            }
                            if ($request->has('phone') && !empty($request->phone)) {
                                $query->where('contact_messages.phone', 'like', "%{$request->get('phone')}%");
                            }
                            if ($request->has('message') && !empty($request->message)) {
                                $query->where('contact_messages.message_txt', 'like', "%{$request->get('message')}%");
                            }
                            if ($request->has('subject') && !empty($request->subject)) {
                                $query->where('contact_messages.subject', 'like', "%{$request->get('subject')}%");
                            }
                            if ($request->has('submitted_at') && !empty($request->submitted_at)) {
                                $query->where('contact_messages.created_at', 'like', "%{$request->get('submitted_at')}%");
                            }
                        })
                        ->addColumn('name', function ($contact_messages) {
                            return $contact_messages->full_name;
                        })
                        ->addColumn('email', function ($contact_messages) {
                            return $contact_messages->email;
                        })
                        ->addColumn('phone', function ($contact_messages) {
                            return $contact_messages->phone;
                        })
                        ->addColumn('message', function ($contact_messages) {
                            return $contact_messages->message_txt;
                        })
                        ->addColumn('subject', function ($contact_messages) {
                            return $contact_messages->subject;
                        })
                        ->addColumn('submitted_at', function ($contact_messages) {
                            return $contact_messages->created_at;
                        })
                        ->rawColumns(['name'])
                        ->make(true);
    }

    

}
