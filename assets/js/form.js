jQuery(function($) {
  $('div.btn-group[data-toggle-name=type]').each(function(){
    var group   = $(this);
    var form    = group.parents('form').eq(0);
    var name    = group.attr('data-toggle-name');
    var hidden  = $('input[name="' + name + '"]', form);
    $('button', group).each(function(){
      var button = $(this);
      button.live('click', function(){
          hidden.val($(this).val());
        // for hide another form
        if(button.val() == 1) {
          $("#article_label").show();
          $("#article").show(); 
          $("#link_label").hide();
          $("#link").hide();
        } else {
          $("#article_label").hide();
          $("#article").hide(); 
          $("#link_label").show();
          $("#link").show ();
        }
       });
      if(button.val() == hidden.val()) {
        button.addClass('active');
      }
    });
  });
});

jQuery(function($) {
  // originally hide article
  $("#article_label").hide();
  $("#article").hide();
});
