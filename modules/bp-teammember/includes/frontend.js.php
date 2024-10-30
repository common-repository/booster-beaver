(function( $ ) {
    var $scope = $('.fl-node-<?php echo $id; ?>');

    var load_masonry = function($scope){

        var grid = $scope.find('.bp-grid');
        var $grid_obj = grid.masonry({
        });

        $grid_obj.imagesLoaded().progress(function(){
            $grid_obj.masonry('layout');
        })
    }

    if($scope.find('.bp-grid-wrapper').hasClass('bp-masonry-yes')){
        load_masonry($scope);
    }

})(jQuery);