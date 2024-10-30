(function ($) {
    FLBuilder.registerModuleHelper('bp-flipbox', {

        init: function () {
            var tab = $('.fl-builder-bp-flipbox-settings').find('.fl-builder-settings-tabs a');

            tab.on('click', this._toggleBackTab);

            $('.fl-builder-content').on('fl-builder.layout-rendered', this._toggleAfterRender);
        },

        _toggleBackTab: function () {
            var anchorHref = $(this).attr('href');
            var node = jQuery(this).closest('form').attr('data-node');

            if (anchorHref == '#fl-builder-settings-tab-back_box') {
                jQuery('.fl-node-' + node + ' .bp-flipbox-inner').addClass('bp-hover');
            } else {
                jQuery('.fl-node-' + node + ' .bp-flipbox-inner').removeClass('bp-hover');
            }
        },

        _toggleAfterRender: function () {

            var anchorHref = jQuery('.fl-builder-settings-tabs').children('.fl-active').attr('href');
            var node = jQuery('.fl-builder-settings-tabs a').closest('form').attr('data-node');

            if (anchorHref == '#fl-builder-settings-tab-back_box') {
                jQuery('.fl-node-' + node + ' .bp-flipbox-inner').addClass('bp-hover');
            } else {
                jQuery('.fl-node-' + node + ' .bp-flipbox-inner').removeClass('bp-hover');
            }
        }

    });
})(jQuery);