@extends('layouts.app')

@section('title','Lihat Detail')
@section('content')
<!-- Judul -->
    <header class="marsthead" style="padding-bottom: 0px">
        <div class="container">
            <div class="marsthead-heading text-uppercase" style="margin-top: 50px">Detail Data</div>              
        </div>
    </header>
    <div class="container" style="margin-bottom: 50px">
        <table class="table table-bordered no margin" >
            <tbody>
                <tr>
                    <th style="">Judul</th>
                    <td><span id="judul">{{ $brankas->judul }}</span></td>
                </tr>
                <tr>
                    <th style="">Nomor Dokumen</th>
                    <td><span id="no_dokumen">{{ $brankas->no_dokumen }}</span></td>
                </tr>
                <tr>
                    <th style="">Waktu</th>
                    <td><span id="tahun">{{ $brankas->tahun }}</span></td>
                </tr>
                <tr>
                    <th style="">Brankas</th>
                    <td><span id="brankas">{{ $brankas->brankas }}</span></td>
                </tr>
                <tr>
                    <th style="">Rincian</th>
                    <td><span id="rincian">{{ $brankas->rincian }}</span></td>
                </tr>
                <tr>
                    <th style="">Nomor PO</th>
                    <td><span id="no_po">{{ $brankas->no_po }}</span></td>
                </tr>
                <tr>
                    <th style="">Nomor SPK</th>
                    <td><span id="no_spk">{{ $brankas->no_spk }}</span></td>
                </tr>
                <tr>
                    <th style="">Lokasi</th>
                    <td><span id="lokasi">{{ $brankas->lokasi }}</span></td>
                </tr>
                <tr>
                    <th style="">Keterangan</th>
                    <td><span id="keterangan">{{ $brankas->keterangan }}</span></td>
                </tr>
            </tbody>
        </table>
        <a class="btn btn-primary" type="button" href="{{ route('frontpage.brankas') }}">
            <i class="fas fa-times mr-1" ></i>
            Kembali
        </a>
    </div>
    </div>     
@endsection