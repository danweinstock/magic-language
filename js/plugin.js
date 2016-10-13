/**  Owl Slider */

 jQuery(document).ready(function() {

   jQuery('#owl-example').owlCarousel({
       navigation : true, // Show next and prev buttons
       navigationText : false,
       slideSpeed : 300,
       paginationSpeed : 400,
       singleItem: true,
       dots: false,
       pagination: false

   });


   jQuery('.location-part').on('click', function(){
       var locationId=jQuery(this).data("map");
       jQuery(".address-part").hide();
       jQuery("#map-info-"+ locationId).show();
   });
 });

/**  End Owl Slider */
