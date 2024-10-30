(function( $ ){
    $scope = $('.fl-node-<?php echo $id; ?>');

    if($scope.find('.bp-markers').length) {
        map = new_map($scope.find('.bp-markers'));

        function new_map( $el ) {
            $wrapper = $scope.find('.bp-markers');
            var zoom = $wrapper.data('zoom');
            var $markers = $el.find('.marker');
            var styles = $wrapper.data('style');
            var prevent_scroll = $wrapper.data('scroll');
            // vars
            var args = {
                zoom		: zoom,
                center		: new google.maps.LatLng(0, 0),
                mapTypeId	: google.maps.MapTypeId.ROADMAP,
                styles		: styles
            };
            
            // create map
            var map = new google.maps.Map( $el[0], args);

            // add a markers reference
            map.markers = [];

            // add markers

            $markers.each(function(){
                add_marker( jQuery(this), map );
            });


            if($wrapper.data('cluster') == 'enable'){
                /* marker Clusterer Style */
                var clusterStyles = [
                    [],
                    [
                        { url: '<?php echo BP_BB_ASSETS_URL;?>images/people35.png', height: 35, width: 35, textColor: '#ffffff', textSize: 12 },
                        { url: '<?php echo BP_BB_ASSETS_URL;?>images/people45.png', height: 45, width: 45, textColor: '#ffffff', textSize: 13 },
                        { url: '<?php echo BP_BB_ASSETS_URL;?>images/people55.png', height: 55, width: 55, textColor: '#ffffff', textSize: 14 }
                    ],
                    [
                        { url: '<?php echo BP_BB_ASSETS_URL;?>images/conv30.png', height: 27, width: 30, anchor: [3, 0], textColor: '#ffffff', textSize: 10 },
                        { url: '<?php echo BP_BB_ASSETS_URL;?>images/conv40.png', height: 36, width: 40, anchor: [6, 0], textColor: '#ffffff', textSize: 11 },
                        { url: '<?php echo BP_BB_ASSETS_URL;?>images/conv50.png', width: 50, height: 50, anchor: [8, 0], textSize: 12 }
                    ],
                    [
                        { url: '<?php echo BP_BB_ASSETS_URL;?>images/heart30.png', height: 27, width: 30, textColor: '#ffffff', textSize: 10 },
                        { url: '<?php echo BP_BB_ASSETS_URL;?>images/heart40.png', height: 35, width: 40, textColor: '#ffffff', textSize: 11 },
                        { url: '<?php echo BP_BB_ASSETS_URL;?>images/heart50.png', width: 44, height: 50, textSize: 12}
                    ],
                    [
                        { url: '<?php echo BP_BB_ASSETS_URL;?>images/pin.png', height: 48, width: 30, anchor: [-18, 0], textColor: '#ffffff', textSize: 10, iconAnchor: [15, 48] }
                    ]
                ];
                var style = parseInt($wrapper.data('cluster-style'), 10);
                style = style === '0' ? null: style;

                var options = {
                    styles: clusterStyles[style],
                    imagePath: ' <?php echo BP_BB_ASSETS_URL;?>images/m'
                };

                //Add Marker clusterer
                var markerCluster = new MarkerClusterer(map, map.markers, options);
            }

            // center map
            center_map( map, zoom );

            // return
            return map;
        }

        function add_marker( $marker, map ) {
            var animate = $wrapper.data('animate')
            $wrapper = $scope.find('.bp-markers');
            var lat = parseFloat( $marker.attr("data-lat") ),
                lng = parseFloat( $marker.attr("data-lng") );

            var latlng = new google.maps.LatLng( lat, lng );

            icon_img = $marker.attr('data-icon');
            if(icon_img != ''){
                var icon = {
                    url : $marker.attr('data-icon'),
                    scaledSize: new google.maps.Size($marker.attr('data-icon-size'), $marker.attr('data-icon-size'))
                };

            }


            //var icon = $marker.attr('data-icon');

            // create marker
            var marker = new google.maps.Marker({
                position	: latlng,
                map			: map,
                icon        : icon,
                animation: google.maps.Animation.DROP
            });
            if(animate == 'animate-yes' && $marker.data('info-window') != 'yes'){
                marker.setAnimation(google.maps.Animation.BOUNCE);
            }
            if(animate == 'animate-yes'){
                google.maps.event.addListener(marker, 'click', function() {
                    marker.setAnimation(null);
                });
            }

            // add to array
            map.markers.push( marker );

            // if marker contains HTML, add it to an infoWindow

            if( $marker.html() )
            {
                // create info window
                var infowindow = new google.maps.InfoWindow({
                    content		: $marker.html()
                });

                // show info window on load
                if($marker.data('info-window') == 'yes'){
                    infowindow.open(map, marker);
                }

                // show info window when marker is clicked
                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.open( map, marker );
                });


            }
            if(animate == 'animate-yes') {
                google.maps.event.addListener(infowindow, 'closeclick', function () {
                    marker.setAnimation(google.maps.Animation.BOUNCE);
                });
            }
        }

        function center_map( map, zoom ) {


            // vars
            var bounds = new google.maps.LatLngBounds();

            // loop through all markers and create bounds
            jQuery.each( map.markers, function( i, marker ){
                var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
                bounds.extend( latlng );
            });

            // only 1 marker?
            if( map.markers.length == 1 )
            {
                // set center of map
                map.setCenter( bounds.getCenter() );
                map.setZoom( zoom );
            }
            else
            {
                // fit to bounds
                map.fitBounds( bounds );
            }
        }
    }


})(jQuery);

