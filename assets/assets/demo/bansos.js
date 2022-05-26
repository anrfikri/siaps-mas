// Call the dataTables jQuery plugin
$(document).ready(function() {
  var table = $('#dataTable').DataTable( {
        "scrollX": true,
        dom:
        "<'row'<'col-md-3'l>>" +
        "<'row'<'col-md-12'tr>>",
        lengthMenu:[
            [1],
            [1]
            ],
    } );
});