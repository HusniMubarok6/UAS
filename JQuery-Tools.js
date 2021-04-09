$(function () {
	$('[data-mask]').inputmask()
	$('.select2').select2()	
	$('input').iCheck({
		checkboxClass: 'icheckbox_flat-green',
		radioClass: 'iradio_polaris',
		increaseArea: '20%' // optional
	});
	$('#TAccount').DataTable()
});