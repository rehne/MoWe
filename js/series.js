$(document).ready(function(){
  $("#ajax").click(function(){
    $.ajax({
      url: "series.json",
      type: "GET",
      success: function(data){
        $('#thead').append('<th>Name</th><th>Serienstart</th><th>Rating</th>');
        for (var i = 0; i < data.length; i++) {
          $('#series').append('<tr><td>' + data[i].name + '</td>' +
                              '<td>' + data[i].serienstart + '</td>' +
                              '<td>' + data[i].rating + '</td></tr>');
        }
      },
      error: function(){
        alert('error');
      }
    });
  });
});
