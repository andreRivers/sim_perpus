<!--===============================================================================================-->	
<script src="<?= base_url('assets/login/'); ?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/'); ?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url('assets/login/'); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/'); ?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/'); ?>vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/'); ?>js/main.js"></script>
	<script src="<?= base_url('assets/'); ?>sweetalert/dist/sweetalert2.all.min.js"></script>
<script src="<?= base_url('assets/'); ?>sweetalert/js/myscript.js"></script>

<script>
    $(document).ready(function() { // Ketika halaman sudah siap (sudah selesai di load)
        // Kita sembunyikan dulu untuk loadingnya
        $("#loading").hide();

        $("#kode_fakultas").change(function() { // Ketika user mengganti atau memilih data provinsi
            $("#kode_prodi").hide(); // Sembunyikan dulu combobox kota nya
            $("#loading").show(); // Tampilkan loadingnya

            $.ajax({
                type: "POST", // Method pengiriman data bisa dengan GET atau POST
                url: "<?php echo base_url("auth/listProdi"); ?>", // Isi dengan url/path file php yang dituju
                data: {
                    kode_fakultas: $("#kode_fakultas").val()
                }, // data yang akan dikirim ke file yang dituju
                dataType: "json",
                beforeSend: function(e) {
                    if (e && e.overrideMimeType) {
                        e.overrideMimeType("application/json;charset=UTF-8");
                    }
                },
                success: function(response) { // Ketika proses pengiriman berhasil
                    $("#loading").hide(); // Sembunyikan loadingnya

                    // set isi dari combobox kota
                    // lalu munculkan kembali combobox kotanya
                    $("#kode_prodi").html(response.list_prodi).show();
                },
                error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                }
            });
        });
    });
</script>
</body>
</html>
