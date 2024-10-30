(function ($) {
    $nodeId = $('.fl-node-<?php echo $id; ?>');

    var $scope = $nodeId.find('.bp-img-comp-container');

    $.each($scope,function () {
        $scope.imagesLoaded().done(function (){
            var ab_style = $scope.data("ab-style");
            var slider_pos = $scope.data("slider-pos");

            if (ab_style == "horizontal") {
                var separator_width = parseInt($scope.find('.bp-after-image').css("border-right-width"));
                horizontal($scope,slider_pos,separator_width);

            } else {
                var separator_width = parseInt($scope.find('.bp-after-image').css("border-bottom-width"));
                vertical($scope,slider_pos,separator_width);

            }
        });
   });




    function horizontal($scope,slider_pos,separator_width) {
        var x, i, start_pos;
        /*find all elements with an "overlay" class:*/
        x = $scope.find(".bp-after-image");
        start_pos = x.width();
        start_pos = start_pos * slider_pos / 100;
        compareImages(x[0]);

        function compareImages(img) {
            var slider, clicked = 0, w, h;
            /*get the width and height of the img element*/
            w = img.offsetWidth;
            h = img.offsetHeight;
            /*set the width of the img element to 50%:*/
            img.style.width = start_pos + "px";
            /*create slider:*/
            slider = $scope.find(".bp-img-comp-slider");
            slider = slider[0];
            /*position the slider in the middle:*/

            slider.style.top = (h / 2) - (slider.offsetHeight / 2) + "px";
            slider.style.left = start_pos - (slider.offsetWidth / 2) - (separator_width / 2) + "px";
            /*execute a function when the mouse button is pressed:*/

            slider.addEventListener("mousedown", slideReady);


            /*and another function when the mouse button is released:*/
            window.addEventListener("mouseup", slideFinish);

            /*or touched (for touch screens:*/
            slider.addEventListener("touchstart", slideReady);
            /*and released (for touch screens:*/
            window.addEventListener("touchstop", slideFinish);

            function slideReady(e) {
                /*prevent any other actions that may occur when moving over the image:*/
                e.preventDefault();
                /*the slider is now clicked and ready to move:*/
                clicked = 1;
                /*execute a function when the slider is moved:*/
                window.addEventListener("mousemove", slideMove);

                slider.addEventListener("touchmove", touchMoveaction);
            }

            function slideFinish() {
                /*the slider is no longer clicked:*/
                clicked = 0;
            }

            function slideMove(e) {
                var pos;
                /*if the slider is no longer clicked, exit this function:*/
                if (clicked == 0) return false;
                /*get the cursor's x position:*/
                pos = getCursorPos(e);
                /*prevent the slider from being positioned outside the image:*/
                if (pos < 0) pos = 0;
                if (pos > w) pos = w;
                /*execute a function that will resize the overlay image according to the cursor:*/
                slide(pos);
            }

            function touchMoveaction(e) {
                var pos;
                /*if the slider is no longer clicked, exit this function:*/
                if (clicked == 0) return false;
                /*get the cursor's x position:*/
                pos = getTouchPos(e);

                /*prevent the slider from being positioned outside the image:*/
                if (pos < 0) pos = 0;
                if (pos > w) pos = w;
                /*execute a function that will resize the overlay image according to the cursor:*/
                slide(pos);
            }

            function getTouchPos(e) {
                var a, x = 0;
                a = img.getBoundingClientRect();

                /*calculate the cursor's x coordinate, relative to the image:*/
                x = e.changedTouches[0].clientX - a.left;
                return x;
            }

            function getCursorPos(e) {
                var a, x = 0;
                e = e || window.event;
                /*get the x positions of the image:*/
                a = img.getBoundingClientRect();
                /*calculate the cursor's x coordinate, relative to the image:*/
                x = e.pageX - a.left;

                /*consider any page scrolling:*/

                return x;
            }

            function slide(x) {
                /*resize the image:*/
                img.style.width = x + "px";
                /*position the slider:*/
                slider.style.left = img.offsetWidth - (slider.offsetWidth / 2) - (separator_width / 2) + "px";
            }
        }
    }

    function vertical($scope,slider_pos,separator_width) {
        var x, i;
        /*find all elements with an "overlay" class:*/
        x = $scope.find(".bp-after-image");
        start_pos = x.height();
        start_pos = start_pos * slider_pos / 100;
        compareImages(x[0]);


        function compareImages(img) {
            var slider, img, clicked = 0, w, h;
            /*get the width and height of the img element*/
            w = img.offsetWidth;
            h = img.offsetHeight;
            /*set the width of the img element to 50%:*/
            img.style.height = start_pos + "px";
            /*create slider:*/
            slider = $scope.find(".bp-img-comp-slider");
            slider = slider[0];

            /*position the slider in the middle:*/
            slider.style.top = start_pos - (slider.offsetHeight / 2) - (separator_width / 2) + "px";
            slider.style.left = (w / 2) - (slider.offsetWidth / 2) + "px";

            /*execute a function when the mouse button is pressed:*/
            slider.addEventListener("mousedown", slideReady);
            /*and another function when the mouse button is released:*/
            window.addEventListener("mouseup", slideFinish);
            /*or touched (for touch screens:*/
            slider.addEventListener("touchstart", slideReady);
            /*and released (for touch screens:*/
            window.addEventListener("touchstop", slideFinish);

            function slideReady(e) {
                /*prevent any other actions that may occur when moving over the image:*/
                e.preventDefault();
                /*the slider is now clicked and ready to move:*/
                clicked = 1;
                /*execute a function when the slider is moved:*/
                window.addEventListener("mousemove", slideMove);
                slider.addEventListener("touchmove", touchMoveaction);
            }

            function slideFinish() {
                /*the slider is no longer clicked:*/
                clicked = 0;
            }

            function slideMove(e) {
                var pos;
                /*if the slider is no longer clicked, exit this function:*/
                if (clicked == 0) return false;
                /*get the cursor's x position:*/
                pos = getCursorPos(e)
                /*prevent the slider from being positioned outside the image:*/
                if (pos < 0) pos = 0;
                if (pos > h) pos = h;
                /*execute a function that will resize the overlay image according to the cursor:*/
                slide(pos);
            }

            function getCursorPos(e) {
                var a, x = 0;
                e = e || window.event;
                /*get the x positions of the image:*/
                a = img.getBoundingClientRect();
                /*calculate the cursor's x coordinate, relative to the image:*/
                x = e.pageY - a.top;
                /*consider any page scrolling:*/
                x = x - window.pageYOffset;

                return x;
            }

            function touchMoveaction(e) {
                var pos;
                /*if the slider is no longer clicked, exit this function:*/
                if (clicked == 0) return false;
                /*get the cursor's x position:*/
                pos = getTouchPos(e);

                /*prevent the slider from being positioned outside the image:*/
                if (pos < 0) pos = 0;
                if (pos > w) pos = w;
                /*execute a function that will resize the overlay image according to the cursor:*/
                slide(pos);
            }

            function getTouchPos(e) {
                var a, x = 0;
                a = img.getBoundingClientRect();

                /*calculate the cursor's x coordinate, relative to the image:*/
                x = e.changedTouches[0].clientY - a.top;

                return x;
            }

            function slide(x) {
                /*resize the image:*/
                img.style.height = x + "px";

                /*position the slider:*/
                slider.style.top = img.offsetHeight - (slider.offsetHeight / 2) - (separator_width / 2) + "px";
            }
        }
    }

})(jQuery);