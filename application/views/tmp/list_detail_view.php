  <link href="<?=base_url()?>assets/theme/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->

  <style media="screen">
  input[type="checkbox"]{
    width: 30px; /*Desired width*/
    height: 30px; /*Desired height*/
  }
  </style>

  <style>
        /* Set the size of the div element that contains the map */
         #map {
           height: 200px;  /* The height is 400 pixels */
           width: 100%;  /* The width is the width of the web page */
          }

         #map1 {
           height: 300px;  /* The height is 400 pixels */
           width: 100%;  /* The width is the width of the web page */
        }

  </style>


<h1 class="h3 mb-2 text-gray-800">List Detail</h1>
<!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
              <div class="row">

                <div class="col-sm-6">
                 <h5 class="m-0"><b>Site ID:</b> 000001</h5>
                 <br>
                 <h5 class="m-0"><b>Lat:</b> 7.13 N &nbsp;&nbsp;<b>Long:</b> 100.25 E</h5>
                 <!-- <br> -->
                 <h5 class="m-0"></h5>
                 <br>
                 <h5 class="m-0"><b>Location:</b> Amphoe Mueng</h5>
                 <br>
                 <div style="float:right; padding-right:25%;">
                   <button type="button" class="btn btn-info btn-sm" name="button">Add member</button>
                 </div>
                 <br>
                 <br>
                 <table class="table table-bordered" style="width:75%;">
                   <thead>
                     <tr>
                       <th>Member List</th>
                     </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <td>-Avery Breitenstein</td>
                     </tr>
                     <tr>
                       <td>-Jonathon Wieczorek</td>
                     </tr>
                   </tbody>
                 </table>
                 <br>
                </div>

                <div id="map1" class="col-sm-6"></div>

                <!-- <div class="col-sm-3">
                 <h5 class="m-0"><b>Lat:</b> 7.13 N</h5>
                </div>

                <div class="col-sm-3">
                 <h5 class="m-0"><b>Long:</b> 100.25 E</h5>
                </div>

                <br><br>

                <div class="col-sm-6">
                 <h5 class="m-0"><b>Location:</b> Amphoe Mueng</h5>
                </div> -->

                <br>



                <br>
                <br>
                <br>

                <div class="col-sm-12">
                  <br>
                  <h4 class="small font-weight-bold">&nbsp; <span class="float-right">100%</span></h4>
                  <div class="progress mb-6">
                      <div class="progress-bar bg-danger"
                           role="progressbar" style="width: 100%"
                           aria-valuenow="100"
                           aria-valuemin="0"
                           aria-valuemax="100">
                      </div>
                  </div>
                </div>


              </div>
            </div>

            <br>

            <div class="card-body">
              <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                  <a class="nav-link" href="#">1. Site by site Design Stage</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">2. Construction Stage</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">3. Site Acceptance</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">4. BOQ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#">5. Documentation</a>
                </li>
              </ul>

              <br><br><br>

              <div class="container">
                <div class="row">

                  <div class="col-md-4">
                    a. Permit Application Documentation
                  </div>
                  <div class="col-md-4 text-center">
                    <button type="button" class="btn btn-info btn-sm" name="button">View</button>
                      &nbsp;&nbsp;&nbsp;
                    <button type="button" class="btn btn-info btn-sm" name="button">Upload</button>
                  </div>
                  <div class="col-md-4 text-center">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked1">
                        <label class="custom-control-label" for="defaultUnchecked1"></label>
                    </div>
                  </div>

                  <br><br>

                  <div class="col-md-4">
                    b. Power Supply Contract
                  </div>
                  <div class="col-md-4 text-center">
                    <button type="button" class="btn btn-info btn-sm" name="button">View</button>
                      &nbsp;&nbsp;&nbsp;
                    <button type="button" class="btn btn-info btn-sm" name="button">Upload</button>
                  </div>
                  <div class="col-md-4 text-center">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked2">
                        <label class="custom-control-label" for="defaultUnchecked2"></label>
                    </div>
                  </div>

                  <br><br>

                  <div class="col-md-4">
                    c. Energy Regulatory Commission Document
                  </div>
                  <div class="col-md-4 text-center">
                    <button type="button" class="btn btn-info btn-sm" name="button">View</button>
                      &nbsp;&nbsp;&nbsp;
                    <button type="button" class="btn btn-info btn-sm" name="button">Upload</button>
                  </div>
                  <div class="col-md-4 text-center">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked3">
                        <label class="custom-control-label" for="defaultUnchecked3"></label>
                    </div>
                  </div>

                  <br><br>

                  <div class="col-md-4">
                    d. Service & Warrantee
                  </div>
                  <div class="col-md-4 text-center">
                    <button type="button" class="btn btn-info btn-sm" name="button">View</button>
                      &nbsp;&nbsp;&nbsp;
                    <button type="button" class="btn btn-info btn-sm" name="button">Upload</button>
                  </div>
                  <div class="col-md-4 text-center">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked4">
                        <label class="custom-control-label" for="defaultUnchecked4"></label>
                    </div>
                  </div>

                  <br><br>

                  <div class="col-md-4">
                    e. Structure Warranty Certificate
                  </div>
                  <div class="col-md-4 text-center">
                    <button type="button" class="btn btn-info btn-sm" name="button">View</button>
                      &nbsp;&nbsp;&nbsp;
                    <button type="button" class="btn btn-info btn-sm" name="button">Upload</button>
                  </div>
                  <div class="col-md-4 text-center">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked5">
                        <label class="custom-control-label" for="defaultUnchecked5"></label>
                    </div>
                  </div>

                  <br><br>

                  <div class="col-md-4">
                    f. Equipment Certificate
                  </div>
                  <div class="col-md-4 text-center">
                    <button type="button" class="btn btn-info btn-sm" name="button">View</button>
                      &nbsp;&nbsp;&nbsp;
                    <button type="button" class="btn btn-info btn-sm" name="button">Upload</button>
                  </div>
                  <div class="col-md-4 text-center">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked6">
                        <label class="custom-control-label" for="defaultUnchecked6"></label>
                    </div>
                  </div>

                  <br><br>



                </div>
              </div>

            </div>
          </div>




<script src="<?=base_url()?>assets/theme/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/theme/vendor/datatables/dataTables.bootstrap4.min.js"></script>


<!-- <script type="text/javascript">
    $(document).ready(function() {
      $('#dataTable').DataTable();
    });
</script> -->

<script>
    var customLabel = {
      restaurant: {
        label: 'R'
      },
      bar: {
        label: 'B'
      }
    };

      function initMap() {
      var map = new google.maps.Map(document.getElementById('map1'), {
        center: new google.maps.LatLng(-33.863276, 151.207977),
        zoom: 12
      });
      var infoWindow = new google.maps.InfoWindow;

        // Change this depending on the name of your PHP or XML file
        downloadUrl('https://storage.googleapis.com/mapsdevsite/json/mapmarkers2.xml', function(data) {
          var xml = data.responseXML;
          var markers = xml.documentElement.getElementsByTagName('marker');
          Array.prototype.forEach.call(markers, function(markerElem) {
            var id = markerElem.getAttribute('id');
            var name = markerElem.getAttribute('name');
            var address = markerElem.getAttribute('address');
            var type = markerElem.getAttribute('type');
            var url = '<?=site_url();?>/List_ctrl';
            var point = new google.maps.LatLng(
                parseFloat(markerElem.getAttribute('lat')),
                parseFloat(markerElem.getAttribute('lng')));

            var infowincontent = document.createElement('div');
            var strong = document.createElement('strong');
            strong.textContent = name
            infowincontent.appendChild(strong);
            infowincontent.appendChild(document.createElement('br'));

            var text = document.createElement('text');
            text.textContent = address
            infowincontent.appendChild(text);
            var icon = customLabel[type] || {};
            var marker = new google.maps.Marker({
              map: map,
              position: point,
              label: icon.label
            });
            marker.addListener('click', function() {
              infoWindow.setContent(infowincontent);
              infoWindow.open(map, marker);

            });

             marker.addListener('dblclick', function() {
              infoWindow.setContent(infowincontent);
              infoWindow.open(map, marker);
              //console.log("marker click, this.url="+url);
                //go to url
                window.location.href = url;
            });
          });
        });
      }

    // marker.addListener('click', function() {
    //   infoWindow.setContent(infowincontent);
    //   infoWindow.open(map, marker);
    //   console.log("marker click, this.url="+this.url);
    //   if (!!this.url) {
    //     window.location.href = this.url;
    //   }
    // });


    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;

      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request, request.status);
        }
      };

      request.open('GET', url, true);
      request.send(null);
    }

    function doNothing() {}
  </script>

  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8tRTizRbbB1ExxYYhJ0WS54gCggYk88Q&callback=initMap">
  </script>
