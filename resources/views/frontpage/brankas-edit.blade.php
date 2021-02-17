@extends('layouts.app')

@section('title', 'Tambah Brankas')

@section('content')
    <!-- Form -->
	<div class="container-contact100 " style="padding-top: 170px; padding-bottom: 70px;">
		<div class="wrap-contact100">
			<form method="post" action="{{ route('frontpage.brankas.update') }}" class="contact100-form validate-form">
				@csrf
				<span class="contact100-form-title text-uppercase">
					Edit Data
				</span>
				<div class="wrap-input100 validate-input bg1" data-validate = "Harap Isi Data">
					<span class="label-input100">Judul *</span>
					<input class="input100" type="text" name="judul" value="{{ $brankas->judul }}">
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="Tidak Ada No. Dokumen, isi (-)">
					<span class="label-input100" >Nomor Dokumen</span>
					<input class="input100" type="text" name="no_dokumen" value="{{ $brankas->no_dokumen }}">
				</div>				
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Harap Isi Data">
					<span class="label-input100">Waktu *</span>
					<input class="input100" type="text" name="tahun" value="{{ $brankas->tahun }}">
				</div>
				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Brankas *</span>
					<div>
						<select class="js-select2" name="brankas">
							<option>{{ $brankas->brankas }}</option>
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
							<option>{{ $brankas->rincian }}</option>
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
					<input class="input100" type="text" name="no_po" value="{{ $brankas->no_po }}">
				</div>				
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Tidak Ada No. SPK, isi (-)">
					<span class="label-input100">Nomor SPK</span>
					<input class="input100" type="text" name="no_spk" value="{{ $brankas->no_spk }}">
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate = "Tidak Ada Lokasi, isi (-)">
					<span class="label-input100">Lokasi</span>
					<input class="input100" type="text" name="lokasi" value="{{ $brankas->lokasi }}">
				</div>
				<div class="wrap-input100 validate-input bg0 rs1-alert-validate mt-3" data-validate = "Tidak Ada Keterangan, isi (-)">
					<span class="label-input100">Keterangan</span>
					<textarea class="input100" name="keterangan" value="{{ $brankas->keterangan }}"></textarea>
				</div>
				<div class="container-contact100-form-btn" >
					<button class="contact100-form-btn" >
							Simpan
							<i class="fa fa-long-arrow-right m-l-7" type="submit" value="Simpan" aria-hidden="true"></i>
					</button>
				</div>
			</form>			
		</div>
	</div>
@endsection

@section('script')

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