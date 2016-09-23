jQuery(document).ready(function($){

  $('.navicon').click(function(){
    
    if ( $('.navmenu').css('display') == 'none' ) {

      $('.navmenu').addClass('show');
      $('.navicon').removeClass('closed').addClass('open');
      $('.navicon').children('.fa').removeClass('fa-navicon').addClass('fa-close');

    } else {

      $('.navmenu').removeClass('show');
      $('.navicon').removeClass('open').addClass('closed');
      $('.navicon').children('.fa').removeClass('fa-close').addClass('fa-navicon');

    }

  });

  $('.video').magnificPopup({
  type: 'iframe',
  
  
  iframe: {
     markup: '<div class="mfp-iframe-scaler">'+
                '<div class="mfp-close"></div>'+
                '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
                '<div class="mfp-title">Some caption</div>'+
              '</div>'
  },
  callbacks: {
    markupParse: function(template, values, item) {
     values.title = item.el.attr('title');
    }
  }
  
  
});

});