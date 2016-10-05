<?php $this->layout = 'fordschool_map'; ?>
<!--<script src="/scripts/tablesorter/jquery.min.js"></script>-->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<script>

  $(document).ready(function() {
    $('#alert').css("width",($(window).width()-538)+"px");
    });

  $(window).resize(function() {
    //resizes alert window
      $('#alert').css("width",($(window).width()-538)+"px");
  });

</script>


<style type="text/css">

#alert{

  position:absolute;
  left:526px;
  height:86px;
  width:auto;
  background-color:red;
  z-index:14000;
  color:white;
  padding-top:10px; 
  padding-left:10px;
  border:white solid 1px; 
  font-size:12px;
  overflow:hidden;

}

#alert a {

  text-decoration:underline;
  color:f1f1f1;

}

</style>

<ul class="accessibility_jumpers">
  <li>
    <a accesskey="1" title="Jump to the start of page content" href="#content">Jump to content</a>
  </li>
  <li>
    <a accesskey="2" title="Jump to the site navigation" href="#menuColumn">Jump to audience-based site-wide navigation</a>
  </li>
  <li>
    <a accesskey="3" title="Jump to the Ford School contact link" href="#f-contact">Jump to the Ford School contact information</a>
  </li>
  <li>
    <a accesskey="4" title="Jump to the search box" href="#f-search">Jump to search box</a>
  </li>
  <li>
    <a accesskey="5" title="Jump to the quick info" href="#f-quick">Jump to quick links</a>
  </li>
</ul>

<div id="page-container">

  <style type="text/css">
    #breadCrumbsBar { 
      background-color: #FFF;
      border: 0 none;
      float: none;
      left: 187px;
      width: 535px;
      margin-bottom: 2px;
      margin-top: -2px;
      padding-bottom: 4px;
      padding-left: 5px;
      position: absolute;
      top: 16px;
      font-weight: normal;
      text-wrap: normal;
      z-index: 1;
    }
    .breadcrumbs {  
      font-size: 11px; 
      line-height: 11px;
      font-weight: normal;
      color: #36639C;
    }
    
    .breadcrumbslink {  
      font-size: 11px; 
      line-height: 11px;
      font-weight: normal;
      color: #4E88D3;
    }   
    
    #insideContentColumn {
      padding-top: 35px;
    }
  
  </style>




  <script type="text/javascript">
	//<![CDATA[

	if (GBrowserIsCompatible()) { 					  
	  var request = GXmlHttp.create();
	  var xml = request.open("GET", "map_goog_xml.php", true);			  //was map_goog_xml.php
	}
	
	// display a warning if the browser was not compatible
	else {
	  alert("Sorry, the Google Maps API is not compatible with this browser");
	}
	
	//]]>
	</script>
	
	
	
	
	<!-- map formatting style -->

	<style type='text/css'>   
    #mapContentColumn { 
      padding: 4px;
      margin-left: 0px; 
      margin-top: 0px; 
      margin-bottom: 4px; 
      border: 0;               
      min-height: 500px;
      background-color: white;
      padding-top: 35px;
    }     
    
    #map_wrapper{
      width: 750px;
    }
    #map {    
      width: 750px; 
      height: 500px;  
      float: left;
    }     
    
    div.gmnoprint div.gmnoprint {
      background-color: white;
    }
              
    #bubbleContainer {
      width: 568px;
      margin: 0; 
      padding: 0;
      
    }
      
    #bubbleImageContainer {
      float: left; 
      border: none;
      margin: 3px;
    } 
      
    #bubblePersonImage {
    margin-top: 6px;     border: 1px solid #dddddd;
    }
      
    #bubbleTitleContainer {
      border: none; 
      padding: 0px; 
      margin: 0px;
    }
    
    .bubbleTitle {
      line-height: 1.5em; 
      padding: 3px;
    }
    
    .bubbleHR {
      width: 96%;
      margin: 0;
      padding: 0;
      clear: both;
      text-align: left;
    }
    
    #bubbleBioContainer {
      border: none; 
      margin: 0px; 
      height: 210px;
      overflow: auto;
    }
    
    .bubbleBio {
      margin: 2px; 
      padding: 2px;
    }
    
    .bubbleBio, .bubbleTitle {
      font-family: 'ArmataRegular', Verdana, Helvetica, Arial, Helvetica, sans-serif;
      font-size: 11px;
    }
    
    .sidebarLabel {
      line-height: 11px; 
      font-size: 11px; 
      padding: 2px; 
      margin: 2px;
    }
    
    
    .linkColor {
      color:#0000aa;
    }
    
    
    
    #map_data-table {
      width: 750px;
      margin-top: 10px;
      border-spacing: 0;
    }

    #map_data-table thead {
      background-color: #232b58;
      color: #fff;
    }

    #map_data-table th, #map_data-table td  {
      width: 25%;
      text-align: left;
    }
    
    #map_data-table td  {
      padding: .5em;
      vertical-align: top;
    }
    
    #map_data-table tbody tr  {
      color: #213869;
      cursor: pointer;
    }
    
    #map_data-table .odd {
      background-color: #ededde;
    }
    
    #map_data-table tbody tr:hover  {
      color: #4e88d3;
      text-decoration: underline;
    }
    
    
    .style1 {font-weight: bold}
  </style>


<div id="content">  

  <div id="mapContentColumn">



<!-- page title -->
		
		
	<!-- google map -->	

    <h1>Ford School Grads and Interns at Work in the World</h1>
        <div style="clear:both;"></div> 
        <p style="width:681px;">The Ford School MPP degree provides an exceptionally flexible
          professional education, preparing students for careers in domestic or
          international affairs across a wide range of policy areas. Our MPP
          curriculum provides a set of research, analytical, and management
          skills that are widely transferable across sectors and issue areas,
          and graduates often move back and forth between the public, private,
          and nonprofit sectors over the course of their careers. In addition to
          the rigorous coursework, the Ford School curriculum provides students
          with hands-on, practical policy experience, in part by requiring a
          policy-related summer internship to give students the opportunity to
          develop and enhance their skills in a real-world setting.</p> 
		  <p style="width:681px;">Below is a map showing the locations of many internships and jobs held by Ford School students and alumni. Click on the student/alum name for complete details.</p>
          <a id="map_anchor"></a>
      <div id="map_wrapper">
        <div id="map" align='left'></div>
      </div>
          
            <table id="map_data-table">
        <thead>
              </thead>
                <tbody>
                </tbody>
            </table>

    
      <script type="text/javascript">
    
      if (GBrowserIsCompatible()) { 
      
        var map_dataTableHead_html = "<tr><td class='name'>Name</td><td class='organization'>Organization</td><td class='position'>Position</td><td class='location'>Location</td></tr>";
        var map_dataTableBody_html = "";
        
        // arrays to hold copies of the markers and html used by the data-table
        // because the function closure trick doesnt work there
        var gmarkers = [];
        var htmls = [];
        var i = 0;
        var baseIcon = new GIcon(G_DEFAULT_ICON);
        baseIcon.shadow = "/demo/fordschool/images/map-marker.png";
        baseIcon.image = "/demo/fordschool/images/map-marker.png";
        baseIcon.iconSize = new GSize(20, 34);
        baseIcon.shadowSize = new GSize(20, 34);
        baseIcon.iconAnchor = new GPoint(0, 45);
        
        var markerOptions = { icon:baseIcon };
			  
			  
			  // A function to create the marker and set up the event window
				function createMarker(point,name,html,label) {
					var marker = new GMarker(point, markerOptions);
					GEvent.addListener(marker, "click", function() {	marker.openInfoWindowHtml(html);	} );
					
					// save the info we need to use later for the side_bar
					gmarkers[i] = marker;
					htmls[i] = html;
					
					// Add a line to the map_data-table html
          map_dataTableBody_html += '<tr id="' + i + '">' + label + '</tr>';
						
					i++;
					
					return marker;
				
				}
			  
			  // Set map options
        var mapOptions = {
        backgroundColor: "#A5BFDD"
        };
        
        var center = new GLatLng(0,0);
        
        // Display the map, and set its initial location
        var map = new GMap2(document.getElementById("map"), mapOptions);
        map.setCenter(center,2);
        
        // Constrain the zoom levels of the map
        var mapTypes = map.getMapTypes();
        mapTypes[0].getMaximumResolution = (function() {return 13;});
        mapTypes[0].getMinimumResolution = (function() {return 2;});
        
        // Remove excess GUI controls from the map
        var customUI = map.getDefaultUI();
        customUI.controls.scalecontrol = false;
        customUI.controls.hierarchicalmaptypecontrol = false;
        customUI.zoom.scrollwheel = false;
        map.setUI(customUI);
        
        // Constrain the map's boundaries
        var maxLat = 82;
        var minLat = -66;
        
        function checkBounds() {
            
          var mapLat = map.getCenter().lat();
          var mapLng = map.getCenter().lng();
          
          //if the center of the map goes outside the bounds, move the map back to the boundary-line
          if (mapLat > maxLat) {
          map.setCenter(new GLatLng(maxLat, mapLng));
          }
          
          else if (mapLat < minLat) {
          map.setCenter(new GLatLng(minLat, mapLng));
          }
        }
          
        // Event listener to enforce map boundaries when the map is moved
        GEvent.addListener(map, "move", checkBounds);
			
		
		
			  // This function picks up the click and opens the corresponding info window
			  function myclick(i) {
				gmarkers[i].openInfoWindowHtml(htmls[i]);
			  }
		
			  request.onreadystatechange = function() {
        
        if (request.readyState == 4) {
          var xmlDoc = GXml.parse(request.responseText);
          // obtain the array of markers and loop through it
          var markers = xmlDoc.documentElement.getElementsByTagName("marker");
          var mapAnchor = document.getElementById("map_wrapper");
          for (var i = 0; i < markers.length; i++) {
          // obtain the attribues of each marker
          var lat = parseFloat(markers[i].getAttribute("lat"));
          var lng = parseFloat(markers[i].getAttribute("lng"));
          var point = new GLatLng(lat,lng);
          var html = markers[i].getAttribute("html");
          var label = markers[i].getAttribute("label");
          // create the marker
          var marker = createMarker(point,label,html,label);
          map.addOverlay(marker);
          } // close for loop
          
          //insert the data into the html table
          $("#map_data-table thead").html(map_dataTableHead_html);
          $("#map_data-table tbody").html(map_dataTableBody_html);
          $("#map_data-table tbody tr:odd").addClass("odd");
          
          // scroll to the map and bio when you click on a row of data
          $("#map_data-table tbody tr").click(function() {
            var id = Number( $(this).attr("id") );
            myclick( id );
            mapAnchor.scrollIntoView(true);
          });
        } // close if 4
        
        } // close function
        
        request.send(null);
		
			}
		
			</script>

		<!-- end google map -->
 
	<span class="quickSmaller">&nbsp; &nbsp; *note:  Supported Browsers: IE7+, Firefox 2+, and Safari 2+.  IE6 users may experience display bugs.</span> <br />
 <p>Browse the map above to read what Ford School alumni and students have to
say about their work experiences and about the preparation provided by their
Ford School education.</p>
  </div>   
  <!-- close mapContentColumn -->

</div><!-- close content -->
</div><!-- close page-container -->

<!-- Printing Header Images -->
<img id="printing-wordmark" src="/demo/fordschool/images/printing/ford-school-wordmark.png" />
<img id="printing-block-m" src="/demo/fordschool/images/printing/block-m.png" />