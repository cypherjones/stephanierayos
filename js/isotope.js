$( document ).ready(function() {
  /* activate jquery isotope */
  var $container = $('#posts').isotope({
    itemSelector : '.item',
    isFitWidth: true
  });

  $(window).smartresize(function(){
    $container.isotope({
      columnWidth: '.col-sm-4'
    });
  });
  
  $container.isotope({ filter: '*' });

    // filter items on button click
  $('#filters').on( 'click', 'a', function() {
    var filterValue = $(this).attr('data-filter');
    $container.isotope({ filter: filterValue });
  });
});
