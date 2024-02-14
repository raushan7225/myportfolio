// mobile menu show and hide
$(document).ready(function() {
  $("#shown").click(function() {
      $(".mobilenav").slideDown("slow");
  });
});

$(document).ready(function() {
  $("#hiden").click(function() {
      $(".mobilenav").slideUp("slow");
  });
});



// mobile menu dropdown toggle
$(document).ready(function() {
  $("#navdropper").click(function() {
      $("#navdown").toggle();
  });
});

