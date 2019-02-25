<script type="text/javascript">
	$.notify({
		icon:"now-ui-icons ui-1_bell-53",
		message: "<?= $message ?>"
	},{
		allow_dismiss: false,
		type: 'warning',
		animate: {
			enter: 'animated fadeInDown',
			exit: 'animated fadeOutUp'
		},
		placement: {
			from: 'top',
			align: 'center'
		}
	});
</script>