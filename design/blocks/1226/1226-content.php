<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>


<!DOCTYPE html>
<html>
<head>
    <!-- <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <script type="text/javascript">

        var gmap = new google.maps.LatLng(10.852438, 106.758579);

        var marker;

        function initialize()

        {

            var mapProp = {

               center:new google.maps.LatLng(10.852438, 106.758579),

               zoom:16,

               mapTypeId:google.maps.MapTypeId.ROADMAP

           };



           var map=new google.maps.Map(document.getElementById("googleMap")

            ,mapProp);



           var styles = [

           {

              featureType: 'road.arterial',

              elementType: 'all',

              stylers: [

              { hue: '#fff' },

              { saturation: 100 },

              { lightness: -48 },

              { visibility: 'on' }

              ]

          },{

              featureType: 'road',

              elementType: 'all',

              stylers: [



              ]

          },

          {

            featureType: 'water',

            elementType: 'geometry.fill',

            stylers: [

            { color: '#adc9b8' }

            ]

        },{

            featureType: 'landscape.natural',

            elementType: 'all',

            stylers: [

            { hue: '#809f80' },

            { lightness: -35 }

            ]

        }

        ];



        var styledMapType = new google.maps.StyledMapType(styles);

        map.mapTypes.set('Styled', styledMapType);



        marker = new google.maps.Marker({

            map:map,

            draggable:true,

            animation: google.maps.Animation.DROP,

            position: gmap

        });

        google.maps.event.addListener(marker, 'click', toggleBounce);

    }



    function toggleBounce() {



      if (marker.getAnimation() !== null) {

        marker.setAnimation(null);

    } else {

        marker.setAnimation(google.maps.Animation.BOUNCE);

    }

}

google.maps.event.addDomListener(window, 'load', initialize);

</script>
</head>
<body> -->

    <div class="type-1226">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="maps">
                        <!-- <div id="googleMap" style="width: 550px; height: 300px;">Google Map</div> -->
                        <iframe class="col-md-6 col-xs-12 col-lg-12 col-sm-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4834147793326!2d106.75665731435122!3d10.850788992271113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527bd532d45d9%3A0x6b46595d312dcffe!2zNTMgVsO1IFbEg24gTmfDom4sIExpbmggQ2hp4buDdSwgVGjhu6cgxJDhu6ljLCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1523871240969" width="550" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>


                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info"> 
                        <h1>Contact: </h1> 
                        <h4><i class="fa fa-home" aria-hidden="true">&nbsp; &nbsp;&nbsp;&nbsp;|&nbsp; &nbsp; Address: HCM City</i></h4>
                        <h2><i class="fa fa-fax" aria-hidden="true">&nbsp;&nbsp;&nbsp; |&nbsp; 08.0808.0808</i></h2>
                        <h2><i class="fa fa-fax" aria-hidden="true">&nbsp;&nbsp;&nbsp; |&nbsp; 08.0808.0808</i></h2>
                        <h5><i class="fa fa-envelope-o" aria-hidden="true">&nbsp;&nbsp;&nbsp; |&nbsp; tdc.edu@gmail.com</i></h5>
                        <a href="#" class="hvr-sweep-to-top"><i class="fa fa-facebook" aria-hidden="true"></i></a>                                   
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- </body>
</html> -->