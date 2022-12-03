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
            <form>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Enter user name" autocomplete="off"> 
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">phone</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" placeholder="Enter phone number" autocomplete="off">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" placeholder="Enter Password">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">config Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" placeholder="Enter agin Password">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select name="select" class="form-control">
                            <option value="opt1">Select One Value Only</option>
                            <option value="opt2">Active</option>
                            <option value="opt3">Block</option>
                            
                        </select>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Photo</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control">
                    </div>
                </div>

               
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Dor</label>
                    <div class="col-sm-10">
                    
                    <input id="dropper-animation" class="form-control" type="text" placeholder="Select your animation">
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
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>$162,700</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
                <td>$372,000</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012/08/06</td>
                <td>$137,500</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Rhona Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010/10/14</td>
                <td>$327,900</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Colleen Hurst</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>2009/09/15</td>
                <td>$205,500</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Sonya Frost</td>
                <td>Software Engineer</td>
                <td>Edinburgh</td>
                <td>23</td>
                <td>2008/12/13</td>
                <td>$103,600</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Jena Gaines</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>30</td>
                <td>2008/12/19</td>
                <td>$90,560</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Quinn Flynn</td>
                <td>Support Lead</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2013/03/03</td>
                <td>$342,000</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>36</td>
                <td>2008/10/16</td>
                <td>$470,600</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Haley Kennedy</td>
                <td>Senior Marketing Designer</td>
                <td>London</td>
                <td>43</td>
                <td>2012/12/18</td>
                <td>$313,500</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Tatyana Fitzpatrick</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>19</td>
                <td>2010/03/17</td>
                <td>$385,750</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Michael Silva</td>
                <td>Marketing Designer</td>
                <td>London</td>
                <td>66</td>
                <td>2012/11/27</td>
                <td>$198,500</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Paul Byrd</td>
                <td>Chief Financial Officer (CFO)</td>
                <td>New York</td>
                <td>64</td>
                <td>2010/06/09</td>
                <td>$725,000</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Gloria Little</td>
                <td>Systems Administrator</td>
                <td>New York</td>
                <td>59</td>
                <td>2009/04/10</td>
                <td>$237,500</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Bradley Greer</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>41</td>
                <td>2012/10/13</td>
                <td>$132,000</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Dai Rios</td>
                <td>Personnel Lead</td>
                <td>Edinburgh</td>
                <td>35</td>
                <td>2012/09/26</td>
                <td>$217,500</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
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



