$(document).ready(function() {
$('#datatable').DataTable({
  "pagingType": "full_numbers",
  "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todos"]],
  responsive: true,
  language: {
        processing:     "Buscando...",
        search: "_INPUT_",
        searchPlaceholder: "Buscar...",
        lengthMenu:    "Mostrar _MENU_ registros",
        info:           "Cantidad de registros: _TOTAL_",
        infoEmpty:      "No se encontraron registros",
        infoFiltered:   "(Cantidad de registros filtrados: _MAX_)",
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
});

var table = $('#datatable').DataTable();



});
