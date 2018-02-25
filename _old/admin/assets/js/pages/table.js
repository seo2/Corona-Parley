$(document).ready(function(){
	/* ---------- Datable ---------- */
	$('.datatable').dataTable({
		"order": [[ 0, "desc" ]],
		"pageLength": 50,
    language: {
        url: '//cdn.datatables.net/plug-ins/f2c75b7247b/i18n/Spanish.json'
    }} );
});