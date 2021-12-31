@extends('admin.layouts.admin_layout')
@section('content')
<style type="text/css">
    .table td, .table th {
        font-size: 12px;
        line-height: 2.42857 !important;
    }	
</style>
<div class="page-content-wrapper"> 
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content"> 
        <!-- BEGIN PAGE HEADER--> 
        <!-- BEGIN PAGE BAR -->
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li> <a href="{{ route('admin.home') }}">Home</a> <i class="fa fa-circle"></i> </li>
                <li> <span>Contact Message</span> </li>
            </ul>
        </div>
        <!-- END PAGE BAR --> 
        <!-- BEGIN PAGE TITLE-->
        <h3 class="page-title">View Contact Message</h3>
        <!-- END PAGE TITLE--> 
        <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-md-12"> 
                <!-- Begin: life time stats -->
                <div class="portlet light portlet-fit portlet-datatable bordered">
                    <div class="portlet-title">
                        <div class="caption"> <i class="icon-settings font-dark"></i> <span class="caption-subject font-dark sbold uppercase">Contact Message</span> </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-container">
                            <form method="post" role="form" id="contact-message-search-form">
                                <table class="table table-striped table-bordered table-hover"  id="contact_message_datatable_ajax">
                                    <thead>
                                        <tr role="row" class="filter">                  
                                            <td><input type="text" class="form-control" name="name" id="name" autocomplete="off"></td>
                                            <td><input type="text" class="form-control" name="email" id="email" autocomplete="off"></td>
                                            <td><input type="text" class="form-control" name="phone" id="phone" autocomplete="off"></td>
                                            <td><input type="text" class="form-control" name="message" id="message" autocomplete="off"></td>
                                            <td><input type="text" class="form-control" name="subject" id="subject" autocomplete="off"></td>
                                            <td><input type="text" class="form-control" name="submitted_at" id="submitted_at" autocomplete="off"></td>
                                        </tr>
                                        <tr role="row" class="heading"> 
                                            <th>Name</th>                                        
                                            <th>Email</th>
                                            <th>Phone</th>                                        
                                            <th>Message</th>
                                            <th>Subject</th>
                                            <th>Submitted At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table></form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT BODY --> 
</div>
@endsection
@push('scripts') 
<script>
    $(function () {
        var oTable = $('#contact_message_datatable_ajax').DataTable({
            processing: true,
            serverSide: true,
            stateSave: true,
            searching: false,
            /*		
             "order": [[1, "asc"]],            
             paging: true,
             info: true,
             */
            ajax: {
                url: '{!! route('fetch.data.contact.message') !!}',
                data: function (d) {
                    d.name = $('input[name=name]').val();
                    d.email = $('input[name=email]').val();
                    d.phone = $('input[name=phone]').val();
                    d.message = $('input[name=message]').val();
                    d.subject = $('input[name=subject]').val();
                    d.submitted_at = $('input[name=submitted_at]').val();
                }
            }, columns: [
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'phone', name: 'phone'},
                {data: 'message', name: 'message'},
                {data: 'subject', name: 'subject'},
                {data: 'submitted_at', name: 'submitted_at'},
            ]
        });
        $('#contact-message-search-form').on('submit', function (e) {
            oTable.draw();
            e.preventDefault();
        });
        $('#name').on('keyup', function (e) {
            oTable.draw();
            e.preventDefault();
        });
        $('#email').on('keyup', function (e) {
            oTable.draw();
            e.preventDefault();
        });
        $('#phone').on('keyup', function (e) {
            oTable.draw();
            e.preventDefault();
        });
        $('#message').on('keyup', function (e) {
            oTable.draw();
            e.preventDefault();
        });
        $('#subject').on('keyup', function (e) {
            oTable.draw();
            e.preventDefault();
        });
        $('#submitted_at').on('keyup', function (e) {
            oTable.draw();
            e.preventDefault();
        });
    });
</script> 
@endpush