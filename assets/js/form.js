jQuery(function($) {
  $('div.btn-group[data-toggle-name=STYPE]').each(function(){
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
          $("input[id='link']").val('');
        } else {
          $("#article_label").hide();
          $("#article").hide(); 
          $("#link_label").show();
          $("#link").show ();
          $("textarea[id='article']").val('');
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

jQuery(function($) {
  $('div.submit-group[submit-name=submit]').each(function(){
    var button = $(this);
    button.live('click', function(){
      // $("#article_label").val($("#act_title").text());
      // $("#artcle").val($("#act_desc").text());
      // $("#title").val("fjos");
      // $("#story").text("jdnrgkwnle");

    });
  });         
});
