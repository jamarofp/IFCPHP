<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


function IFCPHP_autoloader($class) {
  //echo $class."\n";
  $elems = preg_split('/\\\/',$class);

//print_r($elems);
  if($elems[0] == 'IFCPHP') {
    @include implode('/',$elems). '.php';
  } 
}


spl_autoload_register('IFCPHP_autoloader');



$oIFC = new \IFCPHP\Reader('../ifc_files_examples/house.ifc');
?>
<html>
  <head>
    <title>Test</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <style>
      .ui-accordion .ui-accordion-content{
        padding: 0 0 0 10px !important;
      }
    </style>
  </head>
  <body>
    <?php
      echo $oIFC->getOElements('IFCPROJECT')[0]->render('html');
//      echo $oIFC->getOElements('IFCPROJECT')[0]->getValueString();
    ?>
  </body>

  <script type="text/javascript">
    $.fn.togglepanels = function(){
    return this.each(function(){
      $(this).addClass("ui-accordion ui-accordion-icons ui-widget ui-helper-reset")
    .find("h3:first")
      .addClass("ui-accordion-header ui-helper-reset ui-state-default ui-corner-top ui-corner-bottom")
      .hover(function() { $(this).toggleClass("ui-state-hover"); })
      .prepend('<span class="ui-icon ui-icon-triangle-1-e"></span>')
      .click(function(event) {
        console.log('click',$(this));
        if($(this).hasClass('delayedRender')) {
          console.log('yeah ajax ',$(this).attr('elementref'));
          $.ajax({
            url: "delayedRender.php?elementRef="+$(this).attr('elementref'),
            context: $(this)
          })
          .done(function( data ) {
            console.log(data);
            console.log($(this));
            $(this).next().html(data);

            $(this).next().find(".element").togglepanels();

            $(this)
              .toggleClass("ui-accordion-header-active ui-state-active ui-state-default ui-corner-bottom")
              .find("> .ui-icon").toggleClass("ui-icon-triangle-1-e ui-icon-triangle-1-s").end()
              .next().slideToggle();

          });
        } else {
          $(this)
            .toggleClass("ui-accordion-header-active ui-state-active ui-state-default ui-corner-bottom")
            .find("> .ui-icon").toggleClass("ui-icon-triangle-1-e ui-icon-triangle-1-s").end()
            .next().slideToggle();
          return false;
        }
      })
      .next()
        .addClass("ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom")
        .hide();
    });
  };
  $(".element").togglepanels();




  </script>
</html>