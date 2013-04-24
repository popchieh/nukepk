<?php

$pk = $_GET['pk'];

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta charset="utf-8">

<title>bootstrap-wysihtml5</title>

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="lib/css/bootstrap.min.css"></link>
<link rel="stylesheet" type="text/css" href="lib/css/prettify.css"></link>
<link rel="stylesheet" type="text/css" href="src/bootstrap-wysihtml5.css"></link>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->

<!-- link_parser -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<style>
  #atc_bar{width:600px;}
  #attach_content{border:1px solid #ccc;padding:10px;margin-top:10px;}
  #atc_images {width:100px;height:120px;overflow:hidden;float:left;}
  #atc_info {width:350px;float:left;height:150px;text-align:left; padding:10px;}
  #atc_title {font-size:14px;display:block;}
  #atc_url {font-size:10px;display:block;}
  #atc_desc {font-size:12px;}
  #atc_total_image_nav{float:left;padding-left:20px}
  #atc_total_images_info{float:left;padding:4px 10px;font-size:12px;}
</style>
        
</head>

<body>
<div class="container">
<form class="form-horizontal" id="form1" method="post" action="addpost_process.php?pk=<?php echo $pk; ?>">
  <fieldset>
    <?php if($pk == 0) { ?>
    <legend>撰寫"挺"核文</legend>
    <?php } else if($pk == 1) {?>
    <legend>撰寫"反"核文</legend>
    <?php } ?>
    <div class="control-group">
      <label class="control-label" for="textfield"></label>
      <div class="controls">
        <div class="btn-group" data-toggle="buttons-radio" data-toggle-name="nuke4">
          <button type="button" class="btn active" value="0">非針對核四</button>
          <input type="hidden" name="nuke4" value="0" />
          <button type="button" class="btn" value="1">針對核四</button>
        </div>
      </div>
      <br />
      <div class="controls">
        <div class="btn-group" data-toggle="buttons-radio" data-toggle-name="STYPE">
          <button type="button" class="btn active" value="0">連結</button>
          <input type="hidden" name="STYPE" value="0" />
          <button type="button" class="btn" value="1">文章</button>
        </div>
      </div>
      <br />
      <label class="control-label" for="textfield2">標題</label>
      <div class="controls">
        <input id="title" type="text" class="input-xlarge" id="textfield" name="STITLE" />
        <!-- <p class="help-block">Supporting help text</p> -->
      </div>
      <br />

      <label id="article_label" class="control-label" for="resizable">文章內容</label>
      <div id="article" class="controls">
        <textarea id="story" class="textarea" placeholder="撰寫文章 ..." style="width: 750px; height: 200px" name="SCONTENT"></textarea>
        <!-- <p class="help-block">Supporting help text</p> -->
      </div>

      <label id="link_label" class="control-label" for="textfield3">連結</label>
      <div id="link" class="controls">
        <input type="text" class="input-xlarge" id="textfield2" name="SCONTENT" />
      </div>      

<div align="center">
  <h1>Parse a Link Like Facebook with PHP and Jquery</h1>
  <div id="atc_bar" align="center">
    Paste Link Here: <input type="text" name="url" size="40" id="url" value="http://www.louisgarneau.com/us-en/product/310735/1493805/Bags_%26amp%3B_Belts/TRI_WHEEL_T-60_BAG" />
    <input type="button" name="attach" value="Parse" id="attach" />
    <input type="hidden" name="cur_image" id="cur_image" />
    <div id="loader">
  
      <div align="center" id="atc_loading" style="display:none"><img src="load.gif" alt="Loading" /></div>
      <div id="attach_content" style="display:none">
        <div id="atc_images"></div>
        <div id="atc_info">
         
          <label id="atc_title"></label>
          <label id="atc_url"></label>
          <br clear="all" />
          <label id="atc_desc"></label>
          <br clear="all" />
        </div>
        <!-- <div id="atc_total_image_nav" >
          <a href="#" id="prev"><img src="prev.png"  alt="Prev" border="0" /></a><a href="#" id="next"><img src="next.png" alt="Next" border="0" /></a>
        </div>
       
        <div id="atc_total_images_info" >
          Showing <span id="cur_image_num">1</span> of <span id="atc_total_images">1</span> images
        </div> -->
        <br clear="all" />
      </div>
    </div>
    <br clear="all" />
  </div>
</div>

      <br />
      <div class="controls pull-right">
        <div class="submit-group" submit-name="submit">
          <button type="submit" class="btn btn-primary">發佈</button>
        </div>
      </div>

    </div>
  </fieldset>
</form>
</div>

<script src="lib/js/wysihtml5-0.3.0.js"></script>
<script src="lib/js/jquery-1.7.2.min.js"></script>
<script src="lib/js/prettify.js"></script>
<script src="lib/js/bootstrap.min.js"></script>
<script src="src/bootstrap-wysihtml5.js"></script>
<script src="assets/js/form.js"></script>

<script type="text/javascript">
  $('.textarea').wysihtml5();
</script>

<script type="text/javascript" charset="utf-8">
  $(prettyPrint);
</script>

<script>

  $(document).ready(function(){ 
 
    // delete event
    $('#attach').bind("click", parse_link);
    
    function parse_link ()
    {
      if(!isValidURL($('#url').val()))
      {
        alert('請輸入連結！');
        return false;
      }
      else
      {
        $('#atc_loading').show();
        // url hide
        // $('#atc_url').html($('#url').val());
        $.post("fetch.php?url="+escape($('#url').val()), {}, function(response){
          
          //Set Content
          $('#atc_title').html(response.title);
          $('#atc_desc').html(response.description);
          $('#atc_total_images').html(response.total_images);
          
          $('#atc_images').html(' ');
          $.each(response.images, function (a, b)
          {
            $('#atc_images').append('<img src="'+b.img+'" width="100" id="'+(a+1)+'">');
          });
          $('#atc_images img').hide();
          
          //Flip Viewable Content 
          $('#attach_content').fadeIn('slow');
          $('#atc_loading').hide();

          // images hide
          
          // //Show first image
          // $('img#1').fadeIn();
          // $('#cur_image').val(1);
          // $('#cur_image_num').html(1);
          
          // // next image
          // $('#next').unbind('click');
          // $('#next').bind("click", function(){
           
          //  var total_images = parseInt($('#atc_total_images').html());      
          //  if (total_images > 0)
          //  {
          //    var index = $('#cur_image').val();
          //    $('img#'+index).hide();
          //    if(index < total_images)
          //    {
          //      new_index = parseInt(index)+parseInt(1);
          //    }
          //    else
          //    {
          //      new_index = 1;
          //    }
              
          //    $('#cur_image').val(new_index);
          //    $('#cur_image_num').html(new_index);
          //    $('img#'+new_index).show();
          //  }
          // });  
          
          // // prev image
          // $('#prev').unbind('click');
          // $('#prev').bind("click", function(){
           
          //  var total_images = parseInt($('#atc_total_images').html());        
          //  if (total_images > 0)
          //  {
          //    var index = $('#cur_image').val();
          //    $('img#'+index).hide();
          //    if(index > 1)
          //    {
          //      new_index = parseInt(index)-parseInt(1);;
          //    }
          //    else
          //    {
          //      new_index = total_images;
          //    }
              
          //    $('#cur_image').val(new_index);
          //    $('#cur_image_num').html(new_index);
          //    $('img#'+new_index).show();
          //    }
          // });  
        });
      }
    };  
  });

  function isValidURL(url)
  {
    var RegExp = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
    
    if(RegExp.test(url)){
      return true;
    }else{
      return false;
    }
  }
</script>

</body>
</html>
