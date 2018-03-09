<?php
function insert_table(items)
{
    $.each(items,function(index,e){
        $('#input_table tbody').append("<tr>" +
          "<td>" + e.id + "</td>" +
          "<td>" + e.name + "</td>" +
          "</tr>"
     );
   });
}
 
$.getJSON('get_table.php', function(data){
insert_table(data);
});

?>