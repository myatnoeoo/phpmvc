$(function () {
    var range = $('.input-range'),
        value = $('.range-value');

    value.html(range.attr('value') + ' %');

    range.on('mouseup', function () {
        console.log(this.value); 
        // $("#zoomDiv").width(this.value+"%").height((this.value/2)+50+"px");              
    });

     $("#minimize").click( function() {             	
         $("#range").val(0);
     });
      $("#maximize").click( function() {             	
         $("#range").val(100);
     });
});