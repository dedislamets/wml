<script src="<?= base_url(); ?>assets/js/chart/Chart.min.js"></script>
<script src="<?= base_url(); ?>assets/js/flot/jquery.flot.js"></script>
<script src="<?= base_url(); ?>assets/js/flot-old/jquery.flot.resize.min.js"></script>
<script src="<?= base_url(); ?>assets/js/flot-old/jquery.flot.pie.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/google/loader.js"></script>

<script type="text/javascript">
  $(document).ready(function(){ 

  });
  
  /*var app = new Vue({
      el: "#app",
      mounted: function () {
        this.loadHistory();
        
      },
      updated: function () {
        var that = this;
        that.initialize();
      },
      data: {
        history: [],
        maps: [],
        overlay: false,
        status_update:'',
        id: '',
        last_status:''
      },
      methods: {
        loadHistory: function () {
            var that = this;

            jQuery.ajax({
              type: "GET",
              cache:false,
              url: '<?= base_url() ?>home/getMap',
              success: function(response) {          
                    that.history = response;
                    for (var i=0; i<response.length; i++){
                      if(response[i]['latitude'] != null){                        
                        that.maps.push({
                          lat: response[i]['latitude'],
                          lng: response[i]['longitude'],
                          status: response[i]['status'],
                          routing: response[i]['no_routing'],
                          updated: response[i]['created_date'],
                        });
                      }
                    }
                    that.initialize();      
              },
            });
        },
        initialize: function(){
          var that = this;
          var infoWindow = new google.maps.InfoWindow, marker,i;
          var bounds = new google.maps.LatLngBounds();
          var mapCanvas = document.getElementById('maps');
          var mapOptions = {
            mapTypeId: google.maps.MapTypeId.ROADMAP
          }     
          var map = new google.maps.Map(mapCanvas, {zoom: 6, center: new google.maps.LatLng(-6.228107, 106.80605039999999), gestureHandling: "greedy"});
         
          
          for(var i = 0; i < that.maps.length; i++)
          {
              var uluru = {
                lat: parseFloat(that.maps[i].lat), 
                lng: parseFloat(that.maps[i].lng)
              };
              pos = new google.maps.LatLng(that.maps[i].lat, that.maps[i].lng);
              bounds.extend(pos); // di dalam looping
              marker = new google.maps.Marker({
                  position: pos,
                  map: map,
                  content: '<h2>' + that.maps[i].routing + '</h2><div id="bodyContent"><p style="    margin-bottom: 0;">'+ that.maps[i].status   + '</p><p>Waktu : ' + that.maps[i].updated +'</p></div>',
                  // icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
                  label: { color: '#00aaff', fontWeight: 'bold', fontSize: '14px', text: that.maps[i].routing }
              });

              google.maps.event.addListener(marker, 'click', (function(marker, i) {
                  return function() {
                      infoWindow.setContent(marker['content']);
                      infoWindow.open(map, marker);
                  }
              })(marker, i));

          }
        },
        
      }
  })*/

  function initialize(){

  }
  

</script>
