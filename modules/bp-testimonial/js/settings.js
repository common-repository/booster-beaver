( function( $ ) {

    FLBuilder.registerModuleHelper( 'bp-testimonial', {

        resizeTimeout: null,

        init: function() {

            var form = $( '.fl-builder-bp-testimonial-settings' ),
                resizeFields = form.find( '.fl-field-responsive-toggle' );

            resizeFields.on( 'click', this._resizeLayout.bind( this ) );
            $( 'body' ).delegate( '.fl-responsive-preview-message button', 'click', this._resizeLayout.bind( this ) );

        },

        _resizeLayout: function( e ) {

            clearTimeout( this.resizeTimeout );
            this.resizeTimeout = setTimeout( this._doResizeLayout.bind( this ), 1500 );

        },

        _doResizeLayout: function( e ) {

            var form = $( '.fl-builder-bp-testimonial-settings' ),
                layout = form.find( '[name=masonry_layout]' ).val(),
                preview = FLBuilder.preview;
            if ( 'yes' !== layout) {
                return;
            }
            var masonry = preview.elements.node.find( '.bp-grid.masonry' ).data('masonry');
            if ( masonry && masonry.layout ) {
                masonry.layout();
            }

        }

    } );

} )( jQuery );
