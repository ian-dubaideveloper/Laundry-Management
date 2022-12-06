// Call the dataTables jQuery plugin
$(document).ready(function() {
    $('#dataTable').find('th td').addClass("px-2 py-1 align-middle")
    $('#dataTable').DataTable({
        rowCallback: function(row, data) {}
    });


});