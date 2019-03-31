$(document).ready(function() {
  $("#movie").change(function() {
    var movieID = $(this).val();
    if(movieID != "") {
      $.ajax({
        url:"getsessions.php",
        data:{c_id:movieID},
        type:'POST',
        success:function(response) {
          var resp = $.trim(response);
          $("#session").html(resp);
        }
      });
    } else {
      $("#session").html("<option value=''>------- Select --------</option>");
    }
  });
});
//code to show and hide the movie and session select
