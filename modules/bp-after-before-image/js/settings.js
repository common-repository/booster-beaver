(function ($) {
    FLBuilder.registerModuleHelper('bp-after-before-image', {
        init: function () {
            var pos_a1 = $('.fl-builder-bp-after-before-image-settings').find('[name="slider_position"]');
            var pos_b1 = $('.fl-builder-bp-after-before-image-settings').find('[name="separator_alignment"]');
            pos_a1.on('change keyup paste', this._sliderMaxValue);
            pos_b1.on('change keyup paste', this._separatorMaxValue);

        },
        _sliderMaxValue: function () {
            var node = jQuery(this).closest('form').attr('data-node');
            jQuery('[name="slider_position"]').attr('max', '90');

        },
        _separatorMaxValue: function () {
            var node = jQuery(this).closest('form').attr('data-node');
            jQuery('[name="separator_alignment"]').attr('max', '90');
        }
    });
})(jQuery);


