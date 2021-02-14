@extends('layouts.app')

@section('title', 'Tambah Brankas')

@section('content')
    <!-- Form -->
	<div class="container-contact100 " style="padding-top: 170px; padding-bottom: 70px;">
		<div class="wrap-contact100">
			<form method="post" action="/brankas" class="contact100-form validate-form">
				@csrf
				<span class="contact100-form-title text-uppercase">
					Tambah Data
				</span>
				<div class="wrap-input100 validate-input bg1" data-validate = "Tolong Isikan Waktu Data">
					<span class="label-input100">Judul *</span>
					<input class="input100" type="text" name="judul" placeholder="Isikan Judul Kegiatan" required>
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" name="nama" data-validate="Tolong Isikan Nama Data">
					<span class="label-input100" name="nama">Nomor Dokumen</span>
					<input class="input100" type="text" name="no_dokumen" placeholder="Isikan Nomor Dokumen">
				</div>				
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Tolong Isikan Waktu Data">
					<span class="label-input100">Tahun *</span>
					<input class="input100" type="number" name="tahun" placeholder="Isikan Tahun" required>
				</div>
				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Brankas *</span>
					<div>
						<select class="js-select2" name="brankas">
							<option>Pilih Brankas</option>
							<option>Brankas L3A</option>
							<option>Brankas L3B</option>
							<option>Brankas L3C</option>
							<option>Brankas L3D</option>
							<option>Brankas L3E</option>
							<option>Brankas L3F</option>
							<option>Brankas L3G</option>
							<option>Brankas L3H</option>
							<option>Brankas L3I</option>
							<option>Brankas L3J</option>
							<option>Brankas L3K</option>
							<option>Brankas L3L</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>
				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Rincian *</span>
					<div>
						<select class="js-select2" name="rincian">
							<option>Pilih Rincian</option>
							<option>Arsip Capex</option>
							<option>Arsip Notulen</option>
							<option>Bacaan DOA</option>
							<option>Berita Acara</option>
							<option>Berkas Laporan</option>
							<option>Bon Pembelian Barang</option>
							<option>Count Product</option>	
							<option>Daftar Pertanggungan Kas</option>
							<option>Dokumen Penghapusan Asset KBM</option>
							<option>Form Nilai</option>
							<option>Ijin Bangunan</option>
							<option>Kartu Nama</option>	
							<option>Kontrak Sewa</option>
							<option>Laporan Kegiatan Komunitas Budaya</option>
							<option>Materi Pelatihan</option>
							<option>Nomor Telepon Pegawai</option>
							<option>Nota Dinas</option>
							<option>Rincian Anggaran Dana </option>	
							<option>Sertifikat</option>	
							<option>Surat Masuk</option>
							<option>Surat Sertifikat Tanah </option>
							<option>Surat Perjanjian</option>	
							<option>PBB</option>																																																																																																																																												
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>				
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" name="nama" data-validate="Tolong Isikan Nama Data">
					<span class="label-input100" name="nama">Nomor PO</span>
					<input class="input100" type="text" name="no_po" placeholder="Isikan Nomor PO">
				</div>				
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Tolong Isikan Waktu Data">
					<span class="label-input100">Nomor SPK</span>
					<input class="input100" type="text" name="no_spk" placeholder="Isikan Nomor SPK">
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate = "Tolong Isikan Waktu Data">
					<span class="label-input100">Lokasi</span>
					<input class="input100" type="text" name="lokasi" placeholder="Isikan Lokasi">
				</div>
				<div class="wrap-input100 validate-input bg0 rs1-alert-validate mt-3" data-validate = "Please Type Your Message">
					<span class="label-input100">Keterangan</span>
					<textarea class="input100" name="keterangan" placeholder="Tulis Pesanmu Disini..."></textarea>
				</div>
				<div class="container-contact100-form-btn" >
					<button class="contact100-form-btn" >
						<span href="brankas.php">
							Simpan
							<i class="fa fa-long-arrow-right m-l-7" type="submit" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>			
		</div>
	</div>
@endsection

@section('script')
<script src="{{ asset('vendors/select2/select2.min.js') }}"></script>
<script>
	$(".js-select2").each(function(){
		$(this).select2({
			minimumResultsForSearch: 20,
			dropdownParent: $(this).next('.dropDownSelect2')
		});
		$(".js-select2").each(function(){
			$(this).on('select2:close', function (e){
				if($(this).val() == "Please chooses") {
					$('.js-show-brankas').slideUp();
				}
				else {
					$('.js-show-brankas').slideUp();
					$('.js-show-brankas').slideDown();
				}
			});
		});
	})
</script>
<script src="{{ asset('vendors/daterangepicker/moment.min.js') }}"></script>
<script src="{{ asset('vendors/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('vendors/countdowntime/countdowntime.js') }}"></script>
<script src="{{ asset('vendors/noui/nouislider.min.js') }}"></script>
<script>
	var filterBar = document.getElementById('filter-bar');
	noUiSlider.create(filterBar, {
		start: [ 1500, 3900 ],
		connect: true,
		range: {
			'min': 1500,
			'max': 7500
		}
	});
	var skipValues = [
	document.getElementById('value-lower'),
	document.getElementById('value-upper')
	];
	filterBar.noUiSlider.on('update', function( values, handle ) {
		skipValues[handle].innerHTML = Math.round(values[handle]);
		$('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
		$('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	});
</script>
<script src="{{ asset('js/main.js') }}"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-23581568-13');
</script>
@endsection


	