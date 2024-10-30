(function($){

    FLBuilder.registerModuleHelper( 'bp-imagebox', {

        init: function () {
            var form = $('.fl-builder-settings'),
                attachment = form.find('select[name=img_src]');
                attachment.on('change' , this._previewImage);
        },

        _previewImage: function( e ) {
            var preview		= FLBuilder.preview,
                node		= preview.elements.node,
                img			= null,
                form        = $( '.fl-builder-settings' ),
                attachment 	= form.find( 'select[name=photo_src]' ),
                img         = node.find( '.bp-imagebox-img' );
                img.attr( 'src', attachment.val() );
        },
    });
} ) (jQuery);