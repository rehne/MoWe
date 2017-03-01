$(document).ready(function(){
  $("#ajax").click(function(){
    $.ajax({
      url: "/series.json",
      type: "GET",
      success: function(data){
        for (var i = 0; i < data.length; i++) {
          $('#series').append('<p>Name: ' + data[i].name +
                              ' | Serienstart: ' + data[i].serienstart +
                              ' | Rating: ' + data[i].rating + '</p>');
        }
      },
      error: function(){
        alert('error');
      }
    });
  });
});
