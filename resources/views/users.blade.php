@extends('layouts.master')

@section('css')
  <!-- Favicon icon -->
  <link rel="icon" href="..\files\assets\images\favicon.ico" type="image/x-icon">
  <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
  <!-- Required Fremwork -->
  <link rel="stylesheet" type="text/css" href="..\files\bower_components\bootstrap\css\bootstrap.min.css">
  <!-- themify-icons line icon -->
  <link rel="stylesheet" type="text/css" href="..\files\assets\icon\themify-icons\themify-icons.css">
  <!-- ico font -->
  <link rel="stylesheet" type="text/css" href="..\files\assets\icon\icofont\css\icofont.css">
  <!-- feather Awesome -->
  <link rel="stylesheet" type="text/css" href="..\files\assets\icon\feather\css\feather.css">
  <!-- Style.css -->
  <link rel="stylesheet" type="text/css" href="..\files\assets\css\style.css">

  <link rel="stylesheet" type="text/css" href="..\files\assets\css\jquery.mCustomScrollbar.css">



  <link rel="stylesheet" type="text/css" href="..\files\bower_components\datatables.net-bs4\css\dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="..\files\assets\pages\data-table\css\buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="..\files\bower_components\datatables.net-responsive-bs4\css\responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="..\files\assets\pages\data-table\extensions\buttons\css\buttons.dataTables.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="..\files\assets\css\style.css">
    <link rel="stylesheet" type="text/css" href="..\files\assets\css\jquery.mCustomScrollbar.css">

    
 <!-- Date-Dropper css -->
 <link rel="stylesheet" type="text/css" href="..\files\bower_components\datedropper\css\datedropper.min.css">

@endsection

 @section('contant')
  
<div class="col-sm-12">
    <!-- Basic Form Inputs card start -->
    <div class="card">
      
        <div class="card-block">
            <h4 class="sub-title">Add users</h4>
            <form  action="{{route('user.insert')}}" method="POST">


                @csrf
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">username</label>
                    <div class="col-sm-10">
                        <input type="text"  name="username"   class="form-control" placeholder="Enter user name" autocomplete="off" class="@error('username') is-invalid @enderror" value="{{ old('username') }}"> 

                        @error('username')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">phone</label>
                    <div class="col-sm-10">
                        <input type="number" name="phone"  class="form-control" placeholder="Enter phone number" autocomplete="off"  class="@error('phone') is-invalid @enderror"value="{{ old('phone') }}">
                   
                        @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>

                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password"  class="form-control" placeholder="Enter Password"  class="@error('password') is-invalid @enderror">
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>

                  
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">config Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="configpassword" class="form-control" placeholder="Enter agin Password"  class="@error('configpassword') is-invalid @enderror">
                        @error('configpassword')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>

                </div>

                <div class="form-group row">
                    <label   class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select name="status" class="form-control"   class="@error('status') is-invalid @enderror" value="{{old('status')}}">
                            <option value="">Select One Value Only</option>
                            <option value="Active">Active</option>
                            <option value="Block">Block</option>
                            
                        </select>
                        @error('status')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                 
                </div>


                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Photo</label>
                    <div class="col-sm-10">
                        <input type="file"  name="photo" class="form-control"  class="@error('photo') is-invalid @enderror" value="{{old('photo')}}">
                           @error('photo')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                    </div>
                 
                </div>

               
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Dor</label>
                    <div class="col-sm-10">
                    
                    <input id="dropper-animation" name="dor" class="form-control" type="text" placeholder="Select your date"  class="@error('dor') is-invalid @enderror" value="{{ old('dor') }}">
                        @error('dor')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
                </div>
            
            </div>


                <div class="col-sm-7">
                    <div class="form-group row">
                        
                        <button class="btn btn-primary btn-outline-primary btn-block"><i class="icofont icofont-user-alt-3"></i>Border Button</button>
                    </div>
                </div>


            </form>
          
        </div>
    </div>
    <!-- Basic Form Inputs card end -->
    <!-- Input Grid card start -->
    
</div>
<!-- Input Grid card end -->


<div class="card">
    
    <div class="card-block">
        <div class="dt-responsive table-responsive">
            <table id="cbtn-selectors" class="table table-striped table-bordered nowrap">
                <thead>
                    <tr>
                        <th>userName</th>
                        <th>Phone</th>
                        <th>Password</th>
                        <th>Status</th>
                        <th>photo</th>
                        <th>Dor</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $users as $us)  
            <tr>
             <td>{{$us->username}} </td>
             <td>{{$us->phone}} </td>
             <td>{{$us->password}} </td>
             <td>{{$us->status}} </td>
             <td>{{$us->photo}} </td>
             <td>{{$us->dor}} </td>




            </tr>
            @endforeach
           
        </tbody>
                <tfoot>
                    <tr>
                        <th>userName</th>
                        <th>Phone</th>
                        <th>Password</th>
                        <th>Status</th>
                        <th>photo</th>
                        <th>Dor</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    
   <!-- data-table js -->
   <script src="..\files\bower_components\datatables.net\js\jquery.dataTables.min.js"></script>
   <script src="..\files\bower_components\datatables.net-buttons\js\dataTables.buttons.min.js"></script>
   <script src="..\files\assets\pages\data-table\js\jszip.min.js"></script>
   <script src="..\files\assets\pages\data-table\js\pdfmake.min.js"></script>
   <script src="..\files\assets\pages\data-table\js\vfs_fonts.js"></script>
   <script src="..\files\assets\pages\data-table\extensions\buttons\js\dataTables.buttons.min.js"></script>
   <script src="..\files\assets\pages\data-table\extensions\buttons\js\buttons.flash.min.js"></script>
   <script src="..\files\assets\pages\data-table\extensions\buttons\js\jszip.min.js"></script>
   <script src="..\files\assets\pages\data-table\extensions\buttons\js\vfs_fonts.js"></script>
   <script src="..\files\assets\pages\data-table\extensions\buttons\js\buttons.colVis.min.js"></script>
   <script src="..\files\bower_components\datatables.net-buttons\js\buttons.print.min.js"></script>
   <script src="..\files\bower_components\datatables.net-buttons\js\buttons.html5.min.js"></script>
   <script src="..\files\bower_components\datatables.net-bs4\js\dataTables.bootstrap4.min.js"></script>
   <script src="..\files\bower_components\datatables.net-responsive\js\dataTables.responsive.min.js"></script>
   <script src="..\files\bower_components\datatables.net-responsive-bs4\js\responsive.bootstrap4.min.js"></script>
   <!-- i18next.min.js -->
   <script type="text/javascript" src="..\files\bower_components\i18next\js\i18next.min.js"></script>
   <script type="text/javascript" src="..\files\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js"></script>
   <script type="text/javascript" src="..\files\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js"></script>
   <script type="text/javascript" src="..\files\bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>
   <!-- Custom js -->
   <script src="..\files\assets\pages\data-table\extensions\buttons\js\extension-btns-custom.js"></script>
   <script src="..\files\assets\js\pcoded.min.js"></script>
   <script src="..\files\assets\js\vartical-layout.min.js"></script>
   <script src="..\files\assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
   <script type="text/javascript" src="..\files\assets\js\script.js"></script>





 <!-- Bootstrap date-time-picker js -->
 <script type="text/javascript" src="..\files\assets\pages\advance-elements\moment-with-locales.min.js"></script>
 <script type="text/javascript" src="..\files\bower_components\bootstrap-datepicker\js\bootstrap-datepicker.min.js"></script>
 <script type="text/javascript" src="..\files\assets\pages\advance-elements\bootstrap-datetimepicker.min.js"></script>
 <!-- Date-range picker js -->
 <script type="text/javascript" src="..\files\bower_components\bootstrap-daterangepicker\js\daterangepicker.js"></script>
 <!-- Date-dropper js -->
 <script type="text/javascript" src="..\files\bower_components\datedropper\js\datedropper.min.js"></script>
 <!-- Color picker js -->
 <script type="text/javascript" src="..\files\bower_components\spectrum\js\spectrum.js"></script>
 <script type="text/javascript" src="..\files\bower_components\jscolor\js\jscolor.js"></script>
 <!-- Mini-color js -->
 <script type="text/javascript" src="..\files\bower_components\jquery-minicolors\js\jquery.minicolors.min.js"></script>
 <!-- i18next.min.js -->
 <script type="text/javascript" src="..\files\bower_components\i18next\js\i18next.min.js"></script>
 <script type="text/javascript" src="..\files\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js"></script>
 <script type="text/javascript" src="..\files\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js"></script>
 <script type="text/javascript" src="..\files\bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>
 <!-- Custom js -->

 <script type="text/javascript" src="..\files\assets\pages\advance-elements\custom-picker.js"></script>
 <script src="..\files\assets\js\pcoded.min.js"></script>
 <script src="..\files\assets\js\vartical-layout.min.js"></script>
 <script src="..\files\assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
 <script type="text/javascript" src="..\files\assets\js\script.js"></script>













@endsection



