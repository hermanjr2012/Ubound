jQuery(document).ready(function() {
  jQuery(".formstep1").show();
  jQuery(".formstep2").hide();
   jQuery("#formstep1next").click(function() {
     jQuery(".formstep1").hide('slow');
     jQuery(".formstep2").show();
     jQuery("#widget-forms h2").hide();
     
   });
 });