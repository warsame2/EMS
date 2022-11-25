<script type="text/javascript" src="{{ URL::to('files\bower_components\jquery\js\jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('files\bower_components\jquery-ui\js\jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('files\bower_components\popper.js\js\popper.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('files\bower_components\bootstrap\js\bootstrap.min.js') }}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{ URL::to('files\bower_components\jquery-slimscroll\js\jquery.slimscroll.js') }}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{ URL::to('files\bower_components\modernizr\js\modernizr.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('files\bower_components\modernizr\js\css-scrollbars.js') }}"></script>
<!-- Chart js -->
<script type="text/javascript" src="{{ URL::to('files\bower_components\chart.js\js\Chart.js') }}"></script>
<!-- Google map js -->
<script src="{{ URL::to('https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('https://maps.google.com/maps/api/js?sensor=true') }}"></script>
<script type="text/javascript" src="{{ URL::to('files\assets\pages\google-maps\gmaps.js') }}"></script>
<!-- gauge js -->
<script src="{{ URL::to('files\assets\pages\widget\gauge\gauge.min.js') }}"></script>
<script src="{{ URL::to('files\assets\pages\widget\amchart\amcharts.js') }}"></script>
<script src="{{ URL::to('files\assets\pages\widget\amchart\serial.js') }}"></script>
<script src="{{ URL::to('files\assets\pages\widget\amchart\gauge.js') }}"></script>
<script src="{{ URL::to('files\assets\pages\widget\amchart\pie.js') }}"></script>
<script src="{{ URL::to('files\assets\pages\widget\amchart\light.js') }}"></script>
<!-- Custom js -->
<script src="{{ URL::to('files\assets\js\pcoded.min.js') }}"></script>
<script src="{{ URL::to('files\assets\js\vartical-layout.min.js') }}" ></script>
<script src="{{ URL::to('files\assets\js\jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('files\assets\pages\dashboard\crm-dashboard.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('files\assets\js\script.js') }}"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="{{ URL::to('https://www.googletagmanager.com/gtag/js?id=UA-23581568-13') }}"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-23581568-13');
</script>


@yield('scripts')

























