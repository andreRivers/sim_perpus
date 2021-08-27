const flashData = $('.flash-data').data('flashdata');

if (flashData) {
	Swal.fire({
		icon: 'success',
		title: 'Successfully',
		showConfirmButton: false,
		timer: 1500
	});
}

$('.tombol-hapus').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Are you sure?',
		text: "Hapus Data?",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes, delete it!'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	});

});


$('.tombol-tanya').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Are you sure?',
		text: "Reset Password ?",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes, Reset it!'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	});

});
