$(document).foundation();

$('.brand-list-item .more').click(function(){
  if (!$(this).hasClass('open')) {
    $(this).html('<i class="fa fa-caret-up"></i> &nbsp;LESS&nbsp; <i class="fa fa-caret-up"></i>');
    $(this).parent().parent().find('.more-content').show();
    $(this).addClass('open');
  } else {
    $(this).html('<i class="fa fa-caret-down"></i> &nbsp;MORE&nbsp; <i class="fa fa-caret-down"></i>');
    $(this).parent().parent().find('.more-content').hide();
    $(this).removeClass('open');
  }
});

// Edit Collection Gallery

$('.edit-property i').click(function(){
  if ($(this).prev().prop('readonly') == true) {
    $(this).removeClass('fa-pencil').addClass('fa-check').prev().prop('readonly', false).focus();
  } else {
    $(this).removeClass('fa-check').addClass('fa-pencil').prev().prop('readonly', true);
  }
});

$('.collection.edit .thumbs i.fa-remove').click(function(){
  var r = confirm("Delete this photo?");
  if (r == true) {
    console.log('yes')
  } else {
    console.log('no')
  }
});

$('.collection.edit .delete-button').click(function(){
  var r = confirm("Delete this collection?");
  if (r == true) {
    console.log('yes')
  } else {
    console.log('no')
  }
});

$('.collection.edit .save-button').click(function(){
  
});

$( ".sortable" ).sortable({placeholder: "ui-state-highlight"});
$( ".sortable" ).disableSelection();

$('.grid').isotope({
  itemSelector: '.grid-item'
});

$('#gallery-tabs').on('toggled', function() {
  $('.grid').isotope({
    itemSelector: '.grid-item'
  });
});

$('.scroll-pane').jScrollPane();


var months = ['', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

var max_value = 36; // We start tracking in Aug, month 8, month 36 is December, 37 is Jan, etc...

var month_count = max_value;

var remainder = month_count % 12;

var years = parseInt(month_count / 12);

var marginTop = -((13-remainder) * 36)  + 12 + 'px';

var currentYear = 2012 + Math.ceil(month_count/12);

$('#slider-vertical').height(month_count * 28.3); // 36px height per month

$('#date-slider-wrapper').css('background-position', 'center ' + marginTop).height(month_count * 28.33 + 40);

$( "#slider-vertical" ).slider({
  orientation: "vertical",
  range: "min",
  min: 8, // August 2013
  max: max_value,
  value: max_value,
  slide: function (event, ui) {
    if (ui.value > 12 ) {
      var month_value = ui.value%12;
      if (month_value==0) {
        month_value = 12;
      }
    } else {
      var month_value = ui.value;
    }
    var currentYear = 2012 + Math.ceil(ui.value/12);
    $('.ui-slider-handle').text(months[month_value] + ' ' + currentYear);
  }

});
    
if (max_value > 12 ) {
  var month_value =max_value%12;
  if (month_value==0) {
    month_value = 12;
  }

} else {
  var month_value = max_value;
}
$('.ui-slider-handle').text(months[month_value] + ' ' + currentYear);

