// Call the dataTables jQuery plugin
$(document).ready(function() {
  var table = $('#dataTable').DataTable( {
        "scrollX": true,
        dom:
        "<'row'<'col-md-3'l><'col-md-9'f>>" +
        "<'row'<'col-md-12'tr>>" +
        "<'row'<'col-md-4'i><'col-md-8'p>>",
        lengthMenu:[
            [5,10,25,50,100,-1],
            [5,10,25,50,100,"All"]
            ],
    } );
});