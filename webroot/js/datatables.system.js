// Call the dataTables jQuery plugin
$('#dataTable').DataTable( {
    language: {
        processing:     "Traitement en cours...",
        search:         "Buscar&nbsp;:",
        lengthMenu:    "Mostrar _MENU_ registros",
        info:           "Cantidad de registros: _TOTAL_",
        infoEmpty:      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
        infoFiltered:   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        infoPostFix:    "",
        loadingRecords: "Cargando registros...",
        zeroRecords:    "No existe el registro buscado",
        emptyTable:     "Aún no hay registros",
        paginate: {
            first:      "Primero",
            previous:   "Anterior",
            next:       "Siguiente",
            last:       "Último"
        }
    }
} );

$(document).ready(function() {
  $('#dataTable').DataTable();
});
