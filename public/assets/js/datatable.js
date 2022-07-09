$(document).ready(function() {
    $('#generic-table').DataTable({
        responsive: true,
        autoWidth: true,
        language: {
            "url": "../../assets/DataTables/es_es.json"
        },
        dom: 'Blfrtp',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
});
