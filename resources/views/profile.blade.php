@extends('layouts.master')

@section('css')
   <!-- Meta -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="description" content="#">
   <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
   <meta name="author" content="#">
   <!-- Favicon icon -->

   <link rel="icon" href="..\files\assets\images\favicon.ico" type="image/x-icon">
   <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
   <!-- Required Fremwork -->
   <link rel="stylesheet" type="text/css" href="..\files\bower_components\bootstrap\css\bootstrap.min.css">
   <!-- Required Fremwork -->
   <link rel="stylesheet" type="text/css" href="..\files\bower_components\font-awesome\css\font-awesome.min.css">
   <!-- Date-time picker css -->
   <link rel="stylesheet" type="text/css" href="..\files\assets\pages\advance-elements\css\bootstrap-datetimepicker.css">
   <!-- Date-range picker css  -->
   <link rel="stylesheet" type="text/css" href="..\files\bower_components\bootstrap-daterangepicker\css\daterangepicker.css">
   <!-- Date-Dropper css -->
   <link rel="stylesheet" type="text/css" href="..\files\bower_components\datedropper\css\datedropper.min.css">
   <!-- Data Table Css -->
   <link rel="stylesheet" type="text/css" href="..\files\bower_components\datatables.net-bs4\css\dataTables.bootstrap4.min.css">
   <!-- themify-icons line icon -->
   <link rel="stylesheet" type="text/css" href="..\files\assets\icon\themify-icons\themify-icons.css">
   <!-- ico font -->
   <link rel="stylesheet" type="text/css" href="..\files\assets\icon\icofont\css\icofont.css">
   <!-- feather Awesome -->
   <link rel="stylesheet" type="text/css" href="..\files\assets\icon\feather\css\feather.css">
   <!-- Style.css -->
   <link rel="stylesheet" type="text/css" href="..\files\assets\css\style.css">
   <link rel="stylesheet" type="text/css" href="..\files\assets\css\jquery.mCustomScrollbar.css">
    
@endsection


@section('username')
    {{$data->username}}
@endsection



@section('contant')
    


<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline">
                    <h4>User Profile</h4>
                    <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
              
            </div>
        </div>
        
    </div>
</div>



<div class="page-body">
    <!--profile cover start-->
    <div class="row">
        <div class="col-lg-12">
            <div class="cover-profile">
                <div class="profile-bg-img">
                    <img class="profile-bg-img img-fluid" src="..\files\assets\images\user-profile\bg-img1.jpg" alt="bg-img">
                    <div class="card-block user-info">
                        <div class="col-md-12">
                            <div class="media-left">
                                <a href="#" class="profile-image">
                                    <img class="user-img img-radius" src="..\files\assets\images\user-profile\user-img.jpg" alt="user-img">
                                </a>
                            </div>
                            <div class="media-body row">
                                <div class="col-lg-12">
                                    <div class="user-title">
                                        <h2> {{$data->username}}</h2>
                                        <span class="text-white">Web programer</span>
                                    </div>
                                </div>
                                <div>
                                    <div class="pull-right cover-btn">
                                        <button type="button" class="btn btn-primary m-r-10 m-b-5"><i class="icofont icofont-plus"></i> Follow</button>
                                        <button type="button" class="btn btn-primary"><i class="icofont icofont-ui-messaging"></i> Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--profile cover end-->
    <div class="row">
        <div class="col-lg-12">
            <!-- tab header start -->
            <div class="tab-header card">
                <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Personal Info</a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#binfo" role="tab">User's Services</a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#contacts" role="tab">User's Contacts</a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#review" role="tab">Reviews</a>
                        <div class="slide"></div>
                    </li>
                </ul>
            </div>
            <!-- tab header end -->
            <!-- tab content start -->
            <div class="tab-content">
                <!-- tab panel personal start -->
                <div class="tab-pane active" id="personal" role="tabpanel">
                    <!-- personal card start -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">About Me</h5>
                            <button id="edit-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">
        <i class="icofont icofont-edit"></i>
    </button>
                        </div>
                        <div class="card-block">
                            <div class="view-info">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="general-info">
                                            <div class="row">
                                                <div class="col-lg-12 col-xl-6">
                                                    <div class="table-responsive">
                                                        <table class="table m-0">
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">Full Name</th>
                                                                    <td> {{$data->username}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Gender</th>
                                                                    <td>Female</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Birth Date</th>
                                                                    <td>October 25th, 1990</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Marital Status</th>
                                                                    <td>Single</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Location</th>
                                                                    <td>New York, USA</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <!-- end of table col-lg-6 -->
                                                <div class="col-lg-12 col-xl-6">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">Email</th>
                                                                    <td><a href="#!"><span class="__cf_email__" data-cfemail="4206272f2d02273a232f322e276c212d2f">[email&#160;protected]</span></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Mobile Number</th>
                                                                    <td> {{$data->phone}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Twitter</th>
                                                                    <td>@xyz</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Skype</th>
                                                                    <td>demo.skype</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Website</th>
                                                                    <td><a href="#!">www.demo.com</a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <!-- end of table col-lg-6 -->
                                            </div>
                                            <!-- end of row -->
                                        </div>
                                        <!-- end of general info -->
                                    </div>
                                    <!-- end of col-lg-12 -->
                                </div>
                                <!-- end of row -->
                            </div>
                            <!-- end of view-info -->
                            <div class="edit-info">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="general-info">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                                                        <input type="text" class="form-control" placeholder="Full Name">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-radio">
                                                                        <div class="group-add-on">
                                                                            <div class="radio radiofill radio-inline">
                                                                                <label>
                                                            <input type="radio" name="radio" checked=""><i class="helper"></i> Male
                                                        </label>
                                                                            </div>
                                                                            <div class="radio radiofill radio-inline">
                                                                                <label>
                                                            <input type="radio" name="radio"><i class="helper"></i> Female
                                                        </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input id="dropper-default" class="form-control" type="text" placeholder="Select Your Birth Date">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <select id="hello-single" class="form-control">
                                                <option value="">---- Marital Status ----</option>
                                                <option value="married">Married</option>
                                                <option value="unmarried">Unmarried</option>
                                            </select>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
                                                                        <input type="text" class="form-control" placeholder="Address">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- end of table col-lg-6 -->
                                                <div class="col-lg-6">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="icofont icofont-mobile-phone"></i></span>
                                                                        <input type="text" class="form-control" placeholder="Mobile Number">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="icofont icofont-social-twitter"></i></span>
                                                                        <input type="text" class="form-control" placeholder="Twitter Id">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <!-- <tr>
                                        <td>
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon1">@</span>
                                                <input type="text" class="form-control" placeholder="Twitter Id">
                                            </div>
                                        </td>
                                    </tr> -->
                                                            <tr>
                                                                <td>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="icofont icofont-social-skype"></i></span>
                                                                        <input type="email" class="form-control" placeholder="Skype Id">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="icofont icofont-earth"></i></span>
                                                                        <input type="text" class="form-control" placeholder="website">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- end of table col-lg-6 -->
                                            </div>
                                            <!-- end of row -->
                                            <div class="text-center">
                                                <a href="#!" class="btn btn-primary waves-effect waves-light m-r-20">Save</a>
                                                <a href="#!" id="edit-cancel" class="btn btn-default waves-effect">Cancel</a>
                                            </div>
                                        </div>
                                        <!-- end of edit info -->
                                    </div>
                                    <!-- end of col-lg-12 -->
                                </div>
                                <!-- end of row -->
                            </div>
                            <!-- end of edit-info -->
                        </div>
                        <!-- end of card-block -->
                    </div>
                   
                    <!-- personal card end-->
                </div>
                <!-- tab pane personal end -->



                <!-- tab pane info start -->
                <div class="tab-pane" id="binfo" role="tabpanel">
                    <!-- info card start -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">User Services</h5>
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card b-l-success business-info services m-b-20">
                                        <div class="card-header">
                                            <div class="service-header">
                                                <a href="#">
                                                    <h5 class="card-header-text">Shivani Hero</h5>
                                                </a>
                                            </div>
                                            <span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
     </span>
                                            <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
                                                </div>
                                                <!-- end of col-sm-8 -->
                                            </div>
                                            <!-- end of row -->
                                        </div>
                                        <!-- end of card-block -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card b-l-danger business-info services">
                                        <div class="card-header">
                                            <div class="service-header">
                                                <a href="#">
                                                    <h5 class="card-header-text">Dress and Sarees</h5>
                                                </a>
                                            </div>
                                            <span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
     </span>
                                            <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
                                                </div>
                                                <!-- end of col-sm-8 -->
                                            </div>
                                            <!-- end of row -->
                                        </div>
                                        <!-- end of card-block -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card b-l-info business-info services">
                                        <div class="card-header">
                                            <div class="service-header">
                                                <a href="#">
                                                    <h5 class="card-header-text">Shivani Auto Port</h5>
                                                </a>
                                            </div>
                                            <span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
     </span>
                                            <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
                                                </div>
                                                <!-- end of col-sm-8 -->
                                            </div>
                                            <!-- end of row -->
                                        </div>
                                        <!-- end of card-block -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card b-l-warning business-info services">
                                        <div class="card-header">
                                            <div class="service-header">
                                                <a href="#">
                                                    <h5 class="card-header-text">Hair stylist</h5>
                                                </a>
                                            </div>
                                            <span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
     </span>
                                            <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
                                                </div>
                                                <!-- end of col-sm-8 -->
                                            </div>
                                            <!-- end of row -->
                                        </div>
                                        <!-- end of card-block -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card b-l-danger business-info services">
                                        <div class="card-header">
                                            <div class="service-header">
                                                <a href="#">
                                                    <h5 class="card-header-text">BMW India</h5>
                                                </a>
                                            </div>
                                            <span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
     </span>
                                            <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
                                                </div>
                                                <!-- end of col-sm-8 -->
                                            </div>
                                            <!-- end of row -->
                                        </div>
                                        <!-- end of card-block -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card b-l-success business-info services">
                                        <div class="card-header">
                                            <div class="service-header">
                                                <a href="#">
                                                    <h5 class="card-header-text">Shivani Hero</h5>
                                                </a>
                                            </div>
                                            <span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
     </span>
                                            <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
                                                </div>
                                                <!-- end of col-sm-8 -->
                                            </div>
                                            <!-- end of row -->
                                        </div>
                                        <!-- end of card-block -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-header-text">Profit</h5>
                                </div>
                                <div class="card-block">
                                    <div id="main" style="height:300px;width: 100%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- info card end -->
                </div>
                <!-- tab pane info end -->
                <!-- tab pane contact start -->
                <div class="tab-pane" id="contacts" role="tabpanel">
                    <div class="row">
                        <div class="col-xl-3">
                            <!-- user contact card left side start -->
                            <div class="card">
                                <div class="card-header contact-user">
                                    <img class="img-radius img-40" src="..\files\assets\images\avatar-4.jpg" alt="contact-user">
                                    <h5 class="m-l-10">Soeng Souy</h5>
                                </div>
                                <div class="card-block">
                                    <ul class="list-group list-contacts">
                                        <li class="list-group-item active"><a href="#">All Contacts</a></li>
                                        <li class="list-group-item"><a href="#">Recent Contacts</a></li>
                                        <li class="list-group-item"><a href="#">Favourite Contacts</a></li>
                                    </ul>
                                </div>
                                <div class="card-block groups-contact">
                                    <h4>Groups</h4>
                                    <ul class="list-group">
                                        <li class="list-group-item justify-content-between">
                                            Project
                                            <span class="badge badge-primary badge-pill">30</span>
                                        </li>
                                        <li class="list-group-item justify-content-between">
                                            Notes
                                            <span class="badge badge-success badge-pill">20</span>
                                        </li>
                                        <li class="list-group-item justify-content-between">
                                            Activity
                                            <span class="badge badge-info badge-pill">100</span>
                                        </li>
                                        <li class="list-group-item justify-content-between">
                                            Schedule
                                            <span class="badge badge-danger badge-pill">50</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Contacts<span class="f-15"> (100)</span></h4>
                                </div>
                                <div class="card-block">
                                    <div class="connection-list">
                                        <a href="#"><img class="img-fluid img-radius" src="..\files\assets\images\user-profile\follower\f-1.jpg" alt="f-1" data-toggle="tooltip" data-placement="top" data-original-title="Airi Satou">
                                        </a>
                                        <a href="#"><img class="img-fluid img-radius" src="..\files\assets\images\user-profile\follower\f-2.jpg" alt="f-2" data-toggle="tooltip" data-placement="top" data-original-title="Angelica Ramos">
                                        </a>
                                        <a href="#"><img class="img-fluid img-radius" src="..\files\assets\images\user-profile\follower\f-3.jpg" alt="f-3" data-toggle="tooltip" data-placement="top" data-original-title="Ashton Cox">
                                        </a>
                                        <a href="#"><img class="img-fluid img-radius" src="..\files\assets\images\user-profile\follower\f-4.jpg" alt="f-4" data-toggle="tooltip" data-placement="top" data-original-title="Cara Stevens">
                                        </a>
                                        <a href="#"><img class="img-fluid img-radius" src="..\files\assets\images\user-profile\follower\f-5.jpg" alt="f-5" data-toggle="tooltip" data-placement="top" data-original-title="Garrett Winters">
                                        </a>
                                        <a href="#"><img class="img-fluid img-radius" src="..\files\assets\images\user-profile\follower\f-1.jpg" alt="f-6" data-toggle="tooltip" data-placement="top" data-original-title="Cedric Kelly">
                                        </a>
                                        <a href="#"><img class="img-fluid img-radius" src="..\files\assets\images\user-profile\follower\f-3.jpg" alt="f-7" data-toggle="tooltip" data-placement="top" data-original-title="Brielle Williamson">
                                        </a>
                                        <a href="#"><img class="img-fluid img-radius" src="..\files\assets\images\user-profile\follower\f-5.jpg" alt="f-8" data-toggle="tooltip" data-placement="top" data-original-title="Jena Gaines">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- user contact card left side end -->
                        </div>
                        <div class="col-xl-9">
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- contact data table card start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-header-text">Contacts</h5>
                                        </div>
                                        <div class="card-block contact-details">
                                            <div class="data_table_main table-responsive dt-responsive">
                                                <table id="simpletable" class="table  table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Mobileno.</th>
                                                            <th>Favourite</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="bbdad9d88a8988fbdcd6dad2d795d8d4d6">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="a3c2c1c0929190e3c4cec2cacf8dc0ccce">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star-o" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="1b7a79782a29285b7c767a727735787476">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="0c6d6e6f3d3e3f4c6b616d6560226f6361">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="ccadaeaffdfeff8caba1ada5a0e2afa3a1">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star-o" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="f7969594c6c5c4b7909a969e9bd994989a">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="f1909392c0c3c2b1969c90989ddf929e9c">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="7d1c1f1e4c4f4e3d1a101c1411531e1210">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="2f4e4d4c1e1d1c6f48424e4643014c4042">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="f4959697c5c6c7b49399959d98da979b99">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star-o" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="55343736646766153238343c397b363a38">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="5e3f3c3d6f6c6d1e39333f3732703d3133">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="6100030250535221060c00080d4f020e0c">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="74151617454647341319151d185a171b19">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="4a2b28297b78790a2d272b232664292527">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star-o" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="7312111042414033141e121a1f5d101c1e">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="9dfcfffeacafaeddfaf0fcf4f1b3fef2f0">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star-o" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="7312111042414033141e121a1f5d101c1e">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="7716151446454437101a161e1b5914181a">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="2c4d4e4f1d1e1f6c4b414d4540024f4341">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star-o" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="3150535200030271565c50585d1f525e5c">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td>abc1<a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="f0c2c3b0979d91999cde939f9d">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="e3828180d2d1d0a3848e828a8fcd808c8e">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star-o" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="d4b5b6b7e5e6e794b3b9b5bdb8fab7bbb9">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="c6a7a4a5f7f4f586a1aba7afaae8a5a9ab">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="8cedeeefbdbebfccebe1ede5e0a2efe3e1">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="b2d3d0d1838081f2d5dfd3dbde9cd1dddf">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="1a7b78792b28295a7d777b737634797577">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="b0d1d2d3818283f0d7ddd1d9dc9ed3dfdd">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="adcccfce9c9f9eedcac0ccc4c183cec2c0">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="5d3c3f3e6c6f6e1d3a303c3431733e3230">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="6b0a09085a59582b0c060a020745080406">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="5130333260636211363c30383d7f323e3c">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="78191a1b494a4b381f15191114561b1715">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="78191a1b494a4b381f15191114561b1715">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="1d7c7f7e2c2f2e5d7a707c7471337e7270">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="6f0e0d0c5e5d5c2f08020e0603410c0002">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="69080b0a585b5a290e04080005470a0604">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="9afbf8f9aba8a9dafdf7fbf3f6b4f9f5f7">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="9efffcfdafacaddef9f3fff7f2b0fdf1f3">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="5e3f3c3d6f6c6d1e39333f3732703d3133">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="ef8e8d8cdedddcaf88828e8683c18c8082">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="fc9d9e9fcdcecfbc9b919d9590d29f9391">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="bfdedddc8e8d8cffd8d2ded6d391dcd0d2">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="64050607555657240309050d084a070b09">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="4726252476757407202a262e2b6924282a">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="3253505103000172555f535b5e1c515d5f">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="0160636230333241666c60686d2f626e6c">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="badbd8d98b8889faddd7dbd3d694d9d5d7">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="a9c8cbca989b9ae9cec4c8c0c587cac6c4">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="2d4c4f4e1c1f1e6d4a404c4441034e4240">[email&#160;protected]</a></td>
                                                            <td>9989988988</td>
                                                            <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                            <td class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye"></i>Activity</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Mobileno.</th>
                                                            <th>Favourite</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- contact data table card end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tab pane contact end -->
                <div class="tab-pane" id="review" role="tabpanel">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">Review</h5>
                        </div>
                        <div class="card-block">
                            <ul class="media-list">
                                <li class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object img-radius comment-img" src="..\files\assets\images\avatar-1.jpg" alt="Generic placeholder image">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Sortino media<span class="f-12 text-muted m-l-5">Just now</span></h6>
                                        <div class="stars-example-css review-star">
                                            <i class="icofont icofont-star"></i>
                                            <i class="icofont icofont-star"></i>
                                            <i class="icofont icofont-star"></i>
                                            <i class="icofont icofont-star"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <p class="m-b-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                        <div class="m-b-25">
                                            <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                        </div>
                                        <hr>
                                        <!-- Nested media object -->
                                        <div class="media mt-2">
                                            <a class="media-left" href="#">
                                                <img class="media-object img-radius comment-img" src="..\files\assets\images\avatar-2.jpg" alt="Generic placeholder image">
                                            </a>
                                            <div class="media-body">
                                                <h6 class="media-heading">Larry heading <span class="f-12 text-muted m-l-5">Just now</span></h6>
                                                <div class="stars-example-css review-star">
                                                    <i class="icofont icofont-star"></i>
                                                    <i class="icofont icofont-star"></i>
                                                    <i class="icofont icofont-star"></i>
                                                    <i class="icofont icofont-star"></i>
                                                    <i class="icofont icofont-star"></i>
                                                </div>
                                                <p class="m-b-0"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                <div class="m-b-25">
                                                    <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                                </div>
                                                <hr>
                                                <!-- Nested media object -->
                                                <div class="media mt-2">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object img-radius comment-img" src="..\files\assets\images\avatar-3.jpg" alt="Generic placeholder image">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Colleen Hurst <span class="f-12 text-muted m-l-5">Just now</span></h6>
                                                        <div class="stars-example-css review-star">
                                                            <i class="icofont icofont-star"></i>
                                                            <i class="icofont icofont-star"></i>
                                                            <i class="icofont icofont-star"></i>
                                                            <i class="icofont icofont-star"></i>
                                                            <i class="icofont icofont-star"></i>
                                                        </div>
                                                        <p class="m-b-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                        <div class="m-b-25">
                                                            <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Nested media object -->
                                        <div class="media mt-2">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object img-radius comment-img" src="..\files\assets\images\avatar-1.jpg" alt="Generic placeholder image">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Cedric Kelly<span class="f-12 text-muted m-l-5">Just now</span></h6>
                                                <div class="stars-example-css review-star">
                                                    <i class="icofont icofont-star"></i>
                                                    <i class="icofont icofont-star"></i>
                                                    <i class="icofont icofont-star"></i>
                                                    <i class="icofont icofont-star"></i>
                                                    <i class="icofont icofont-star"></i>
                                                </div>
                                                <p class="m-b-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                <div class="m-b-25">
                                                    <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                        <div class="media mt-2">
                                            <a class="media-left" href="#">
                                                <img class="media-object img-radius comment-img" src="..\files\assets\images\avatar-4.jpg" alt="Generic placeholder image">
                                            </a>
                                            <div class="media-body">
                                                <h6 class="media-heading">Larry heading <span class="f-12 text-muted m-l-5">Just now</span></h6>
                                                <div class="stars-example-css review-star">
                                                    <i class="icofont icofont-star"></i>
                                                    <i class="icofont icofont-star"></i>
                                                    <i class="icofont icofont-star"></i>
                                                    <i class="icofont icofont-star"></i>
                                                    <i class="icofont icofont-star"></i>
                                                </div>
                                                <p class="m-b-0"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                <div class="m-b-25">
                                                    <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                                </div>
                                                <hr>
                                                <!-- Nested media object -->
                                                <div class="media mt-2">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object img-radius comment-img" src="..\files\assets\images\avatar-3.jpg" alt="Generic placeholder image">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Colleen Hurst <span class="f-12 text-muted m-l-5">Just now</span></h6>
                                                        <div class="stars-example-css review-star">
                                                            <i class="icofont icofont-star"></i>
                                                            <i class="icofont icofont-star"></i>
                                                            <i class="icofont icofont-star"></i>
                                                            <i class="icofont icofont-star"></i>
                                                            <i class="icofont icofont-star"></i>
                                                        </div>
                                                        <p class="m-b-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                        <div class="m-b-25">
                                                            <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media mt-2">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object img-radius comment-img" src="..\files\assets\images\avatar-2.jpg" alt="Generic placeholder image">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Mark Doe<span class="f-12 text-muted m-l-5">Just now</span></h6>
                                                <div class="stars-example-css review-star">
                                                    <i class="icofont icofont-star"></i>
                                                    <i class="icofont icofont-star"></i>
                                                    <i class="icofont icofont-star"></i>
                                                    <i class="icofont icofont-star"></i>
                                                    <i class="icofont icofont-star"></i>
                                                </div>
                                                <p class="m-b-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                <div class="m-b-25">
                                                    <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Right addon">
                                <span class="input-group-addon"><i class="icofont icofont-send-mail"></i></span>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- tab content end -->
        </div>
    </div>
</div>


@endsection


@section('scripts')
  <!-- Bootstrap date-time-picker js -->
  <script type="text/javascript" src="..\files\assets\pages\advance-elements\moment-with-locales.min.js"></script>
  <script type="text/javascript" src="..\files\bower_components\bootstrap-datepicker\js\bootstrap-datepicker.min.js"></script>
  <script type="text/javascript" src="..\files\assets\pages\advance-elements\bootstrap-datetimepicker.min.js"></script>
  <!-- Date-range picker js -->
  <script type="text/javascript" src="..\files\bower_components\bootstrap-daterangepicker\js\daterangepicker.js"></script>
  <!-- Date-dropper js -->
  <script type="text/javascript" src="..\files\bower_components\datedropper\js\datedropper.min.js"></script>
  <!-- data-table js -->
  <script src="..\files\bower_components\datatables.net\js\jquery.dataTables.min.js"></script>
  <script src="..\files\bower_components\datatables.net-bs4\js\dataTables.bootstrap4.min.js"></script>
  <script src="..\files\bower_components\datatables.net-responsive\js\dataTables.responsive.min.js"></script>
  <script src="..\files\bower_components\datatables.net-responsive-bs4\js\responsive.bootstrap4.min.js"></script>
  <!-- ck editor -->
  <script src="..\files\assets\pages\ckeditor\ckeditor.js"></script>
  <!-- echart js -->
  <script src="..\files\assets\pages\chart\echarts\js\echarts-all.js" type="text/javascript"></script>
  <!-- i18next.min.js -->
  <script type="text/javascript" src="..\files\bower_components\i18next\js\i18next.min.js"></script>
  <script type="text/javascript" src="..\files\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js"></script>
  <script type="text/javascript" src="..\files\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js"></script>
  <script type="text/javascript" src="..\files\bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>
  <script src="..\files\assets\pages\user-profile.js"></script>
  <script src="..\files\assets\js\pcoded.min.js"></script>
  <script src="..\files\assets\js\vartical-layout.min.js"></script>
  <script src="..\files\assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="..\files\assets\js\script.js"></script>
    
@endsection


