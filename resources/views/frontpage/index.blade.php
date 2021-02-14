@extends('layouts.app')

@section('title', 'Index')

@section('content')
<header class="masthead">
    <div class="container">
        <div class="masthead-heading text-uppercase">Brankas Logistik</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="{{ route('frontpage.brankas.create') }}">Tambah Data</a>
    </div>
</header>
<!-- Profil-->
<section class="page-section" id="logistik">
    <div class="container">
        <div class="container align-items-center d-flex"  style="min-height: 500px">
            <div class="row justify-content-center">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="{{ asset('img/brankas.jpg') }}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-4 pt-3" data-aos="fade-left">
                    <h2 class="text-gray">Unit Logistik dan General Support</h2>
                    <p class="text-softgray"><i>Lantai 3 Telkom GajahMada Jember</i></p>
                    <p class="text-softgray">
                        Apa Itu Logistik dan General Support? Divisi Logistik & General Support adalah 
                        divisi yang mempunyai tugas melaksanakan kegiatan pengadaan barang keperluan 
                        perusahaan dan pengelolaan sarana dan prasarana, pemantauan kegiatan pemeriksaan, 
                        pelaksanaan dan pelaporan kegiatan logistik.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Penjelasan Fitur-->
<section class="page-section" id="fitur">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Website Brankas</h2>
            <h3 class="section-subheading text-muted">Pada website ini, staff logistik dapat melakukan beberapa kegiatan, diantaranya :</h3>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Tambah</h4>
                <p class="text-muted">Anda Dapat Menambah Dokumen Baru Yang Ada Dalam Brankas Logistik Hanya Dengan Menggunakan Fitur Tambah Dalam Web ini.</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-folder-open fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Lihat</h4>
                <p class="text-muted">Dokumen Yang Tertata Rapi Lebih Nyaman Dipandang. Disini Anda Dapat Melihat Semua Dokumen Yang Tersimpan di Dalam Brankas.</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-search fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Cari</h4>
                <p class="text-muted">Kesulitan Dalam Menemukan Dokumen? Sekarang Anda Dapat Melakukan Pencarian Dokumen Dengan Menggunakan Fitur Cari. </p>
            </div>
        </div>
    </div>
</section>
<!-- Denah-->
<section class="page-section bg-light" id="denah">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Denah</h2>
            <h3 class="section-subheading text-muted">Unit Logistik dan General Support</h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                        <img class="img-fluid" src="{{ asset('img/denah/denah.jpg') }}" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-subheading text-muted pt-3">Dua Dimensi</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                        <img class="img-fluid" src="{{ asset('img/denah/denah.png') }}" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-subheading text-muted pt-3">Tiga Dimensi</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio Denah-->
<!-- Denah 1-->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src="{{ asset('img/close-icon.svg') }}" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                            <h2 class="text-uppercase">Denah Dua Dimensi</h2>                                    
                            <img class="img-fluid d-block mx-auto" src="{{ asset('img/denah/denah.jpg') }}" alt="" />
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <ul class="list-inline">
                                <li>Tanggal: 3 Februari 2021</li>
                                <li>Lokasi: Unit Logistik</li>
                                <li>Kategori: 2 Dimensi</li>
                            </ul>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times mr-1"></i>
                                Tutup Denah
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Denah 2-->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src="{{ asset('img/close-icon.svg') }}" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                            <h2 class="text-uppercase">Denah Tiga Dimensi</h2>                                    
                            <img class="img-fluid d-block mx-auto" src="{{ asset('img/denah/denah.png') }}" alt="" />
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <ul class="list-inline">
                                <li>Tanggal: 3 Februari 2021</li>
                                <li>Lokasi: Unit Logistik</li>
                                <li>Kategori: 3 Dimensi</li>
                            </ul>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times mr-1"></i>
                                Tutup Denah
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('style')

@endsection

@section('script')
    
@endsection