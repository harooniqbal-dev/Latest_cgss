
			<script src="js/jquery.min.js"></script><script src="js/bootstrap.min.js"></script>
            {{-- <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> --}}
                      <script defer src="js/owl.carousel.min.js"type="text/javascript"></script>
                     <script  defer
              src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGrI5mdHSxIrhwNPWub4sFbPqT5iwSwTw&callback=initMap">
              </script>
                      <script defer type="text/javascript">
                                $(document).ready(function() {
                                var slider1 = $("#owl-c");
                                    slider1.owlCarousel({
                                loop:true,
                                    navigation : true, // Show next and prev buttons
                                    //slideSpeed : 50,
                                    //paginationSpeed : 50,
                                    singleItem:true,
                                    autoplay:true,
                                    dots:true,
                                    rewind:true,
                                    nav:true,
                                    autoplay:true,
                                    autoplayTimeout:5000,
                                    //navText:['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-left"></i>'],
                                    // "singleItem:true" is a shortcut for:
                                    items : 1,
                                    itemsDesktop : false,
                                    itemsDesktopSmall : false,
                                    itemsTablet: false,
                                    itemsMobile : false

                            });
                                    slider1.on("changed.owl.carousel", function(event){
                                        var item = event.item.index-2;
                                        $('h1').removeClass('animated heartBeat');
                                        $('.owl-item').not('.cloned').eq(item).find('h1').addClass('.animated heartBeat');
                                        $('p').removeClass(' animated bounceInLeft');
                                        $('.owl-item').not('.cloned').eq(item).find('p').addClass('. animated bounceInLeft');
                                    });

                                    var val= $('#activi').val();
                                    if (val == 1) {

                                    $('#show_modal').modal('show');
                                    $('#container').html($('#about').val());
                                }



                        });
                                        function initMap() {
                            // The location of Uluru

                            var uluru = {lat: 32.2887615,lng:72.2724645 };


                            // The map, centered at Uluru
                            var map = new google.maps.Map(
                                document.getElementById('map'), {zoom: 10, center: uluru});

                            var image =  '{{URL::asset('Images/ico3.png')}}';
                            var img2  = '{{URL::asset('Images/icosec.png')}}';
                            var img3 = '{{URL::asset('Images/icofor.png')}}';
                            var img4 = '{{URL::asset('Images/icothr.png')}}';
                                var beachMarker = new google.maps.Marker({
                                    position: {lat:32.0467518, lng:72.6945634},
                                    map: map,
                                    icon: image,
                                    title: 'CGSS'
                                });
                                var beachMarker2 = new google.maps.Marker({
                                    position: {lat: 32.0597813,lng:72.6750199 },
                                    map: map,
                                    icon: img2,
                                    title: 'CGSS'
                                });
                                var beachMarker3 = new google.maps.Marker({
                                    position: {lat: 32.078503,lng:72.6752103 },
                                    map: map,
                                    icon: img3,
                                    title: 'CGSS'
                                });
                                var beachMarker4 = new google.maps.Marker({
                                    position: {lat: 32.2887615,lng:72.2724645 },
                                    map: map,
                                    icon: img4,
                                    title: 'CGSS'
                                });



                        }


          // 		</script>
