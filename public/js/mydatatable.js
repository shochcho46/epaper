$(document).ready(function () {

    var companyname = "Company Name";
    // Head Image dataTable
    $('#headimage').DataTable({
        "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
        dom: 'lBfrtip',
        buttons: [

            {
                extend: 'copy',
                className: 'btn btn-indigo btn-rounded',
                messageTop: companyname,
                title: companyname,
                exportOptions: {
                    columns: [0,1,2,3,4]
                }
            },
            {
                extend: 'csv',
                className: 'btn btn-indigo',
                messageTop: companyname,
                title: companyname,
                exportOptions: {
                    columns: [0,1,2,3,4]
                }
            },
            {
                extend: 'excel',
                className: 'btn btn-indigo',
                messageTop: companyname,
                title: companyname,
                exportOptions: {
                    columns: [0,1,2,3,4]

                }
            },
            {
                extend: 'pdf',
                className: 'btn btn-indigo',
                messageTop: companyname,
                title: companyname,
                exportOptions: {
                    columns: [0,1,2,3,4]

                }
            },
            {
                extend: 'print',
                className: 'btn btn-indigo btn-rounded',
                messageTop: companyname,
                title: companyname,
                exportOptions: {
                    columns: [0,1,2,3,4]

                }
            },

        ],



    });
// Head Image dataTable



// Newzpic dataTable
$('#picnewz').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    buttons: [

        {
            extend: 'copy',
            className: 'btn btn-indigo btn-rounded',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4]
            }
        },
        {
            extend: 'csv',
            className: 'btn btn-indigo',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4]
            }
        },
        {
            extend: 'excel',
            className: 'btn btn-indigo',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4]

            }
        },
        {
            extend: 'pdf',
            className: 'btn btn-indigo',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4]

            }
        },
        {
            extend: 'print',
            className: 'btn btn-indigo btn-rounded',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,1,2,3,4]

            }
        },

    ],



});
// Newzpic dataTable


// Addlist dataTable
$('#addlist').DataTable({
    "lengthMenu": [[10, 15, 20, 25, 30, 40, 50, -1], [10, 15, 20, 25, 30, 40, 50, "All"]],
    dom: 'lBfrtip',
    buttons: [

        {
            extend: 'copy',
            className: 'btn btn-indigo btn-rounded',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,2]
            }
        },
        {
            extend: 'csv',
            className: 'btn btn-indigo',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,2]
            }
        },
        {
            extend: 'excel',
            className: 'btn btn-indigo',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,2]

            }
        },
        {
            extend: 'pdf',
            className: 'btn btn-indigo',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,2]

            }
        },
        {
            extend: 'print',
            className: 'btn btn-indigo btn-rounded',
            messageTop: companyname,
            title: companyname,
            exportOptions: {
                columns: [0,2]

            }
        },

    ],



});
// Addlist dataTable

});
