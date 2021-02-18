@extends('layouts.app')

@section('title', 'Tambah Data')

@section('content')
    <!-- Form -->
	<div class="container-contact100 " style="padding-top: 170px; padding-bottom: 70px;">
		<div class="wrap-contact100">
			<form method="post" action="{{ route('frontpage.brankas.store') }}" class="contact100-form validate-form">
				@csrf
				<span class="contact100-form-title text-uppercase">
					Tambah Data
				</span>
				<div class="wrap-input100 validate-input bg1" data-validate = "Harap Isi Data">
					<span class="label-input100">Judul *</span>
					<input class="input100" type="text" name="judul" placeholder="Isikan Judul Kegiatan" required>
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="Tidak Ada No. Dokumen, isi (-)">
					<span class="label-input100" >Nomor Dokumen</span>
					<input class="input100" type="text" name="no_dokumen" placeholder="Isikan Nomor Dokumen">
				</div>				
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Harap Isi Data">
					<span class="label-input100">Waktu *</span>
					<input class="input100" type="text" name="tahun" placeholder="Isikan Waktu" required>
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
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="Tidak Ada No. PO, isi (-)">
					<span class="label-input100">Nomor PO</span>
					<input class="input100" type="text" name="no_po" placeholder="Isikan Nomor PO">
				</div>				
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Tidak Ada No. SPK, isi (-)">
					<span class="label-input100">Nomor SPK</span>
					<input class="input100" type="text" name="no_spk" placeholder="Isikan Nomor SPK">
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate = "Tidak Ada Lokasi, isi (-)">
					<span class="label-input100">Lokasi</span>
					<input class="input100" type="text" name="lokasi" placeholder="Isikan Lokasi">
				</div>
				<div class="wrap-input100 validate-input bg1 mt-3" data-validate = "Tidak Ada Keterangan, isi (-)">
					<span class="label-input100">Keterangan</span>
					<input class="input100" type="text" name="keterangan" placeholder="Tulis Pesanmu Disini...">
				</div>
				<div class="container-contact100-form-btn" >
					<button class="contact100-form-btn" >
							Simpan
							<i class="fa fa-long-arrow-right m-l-7" type="submit" aria-hidden="true"></i>
					</button>
				</div>
			</form>			
		</div>
	</div>
@endsection

@section('script')

{{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}
<script src="{{ asset('vendors/select2/select2.min.js') }}"></script>
	<script>
		$(function(){
			$(".js-select2").each(function(){
				$(this).select2({
					minimumResultsForSearch: 10,
					dropdownParent: $(this).next()
				});				
			})			
		})

	</script>
@endsection


	