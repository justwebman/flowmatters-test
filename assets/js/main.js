jQuery( document ).ready( function( $ ) {

    // Fixed Menu & Right Sidebar

    var actionsBar = $( '.actions-bar__wrapper' );
    var rightSidebar = $( '.right-sidebar' );
    var actionsBarPos = $( '.cover-image' ).outerHeight();

    if ( $( document ).scrollTop() > actionsBarPos ) {
        actionsBar.addClass( 'actions-bar__wrapper--sticky' );
        rightSidebar.addClass( 'right-sidebar--sticky' );
    }

    $( document ).scroll( function() {
        var scrollPos = $( document ).scrollTop();
        actionsBar.toggleClass( 'actions-bar__wrapper--sticky', scrollPos > actionsBarPos );
        rightSidebar.toggleClass( 'right-sidebar--sticky', scrollPos > actionsBarPos );
    } );

    // Post Slider

    $( '.js-post-slider' ).slick( {
        infinite: true,
        speed: 300,
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        draggable: true
    } );

    // Image modal

    function appendModal( imageURL ) {
        var modalHTML = '<div class="image-modal">' +
            '<div class="image-modal__inner">' +
            '<img src="' + imageURL + '" alt="modal image" />' +
            '<span class="image-modal__close">Close</span>' +
            '</div></div>';

        $( 'body' ).append( modalHTML );
    }

    $( '.grid-photos img' ).on( 'click', function() {
        var imageURL = $( this ).attr( 'src' );
        appendModal( imageURL );
    } );

    $( document ).on( 'click', '.image-modal__close', function() {
        $( this ).closest( '.image-modal' ).remove();
    } );
} );