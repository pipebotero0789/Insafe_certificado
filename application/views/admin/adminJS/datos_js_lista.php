<script type="text/javascript">
	$('#demo-foo-row-toggler1').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print',
        ],
        "pageLength": 50,
		"language": {
    		"info": "Mostrando de _START_ a _END_ de _TOTAL_ registros",
    		"search": "Buscar:",
    		"infoEmpty": "Mostrando 0 a 0 de 0 Coincidencias",
    		"infoFiltered": "(Filtrado de _MAX_ total Registros)",
    		"zeroRecords": "No se encontro ningun registro",
    		"paginate": {
      			"previous": "Anterior",
      			"next": "Siguiente",
    		}
    	}
    });

</script>