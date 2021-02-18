@extends('layouts.app')

@section('title', 'Pencarian')
@section('content')
    <!-- Judul -->
    <header class="marsthead">
        <div class="container" style="margin-top: 40px;">
            <div class="marsthead-heading text-uppercase" style="margin-bottom: 20px;">Pencarian data</div> 
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="{{ route('frontpage.brankas.create') }}">Tambah Data</a>               
        </div>
    </header>         
    <!-- Tables -->
    <div class="container">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nomor PO</th>
                        <th>Judul</th>
                        <th>Waktu</th>
                        <th>Brankas</th>
                        <th>Action</th>                            				
                    </tr>
                </thead>				
                <tbody> 
                    @foreach($brankas as $b)
                    <tr>
                        <td>{{ $b['id'] }}</td>
                        <td>{{ $b['no_po'] }}</td>
                        <td>{{ $b['judul'] }}</td>
                        <td>{{ $b['tahun'] }}</td>
                        <td style="width: 100px">{{ $b['brankas'] }}</td>                        
                        <td style="width: 80px">                           
                            <a type="button" style="margin-bottom:5px" href="{{ route('frontpage.brankas.show', $b['id']) }}"><i class="fa fa-eye" ></i></a>
                                |
                            <a type="button" style="margin-bottom:5px" href="{{ route('frontpage.brankas.edit', $b['id']) }}"><i class="fas fa-edit" ></i></a>
                                |
                            <a type="button" href="{{ route('frontpage.brankas.hapus', $b['id']) }}"><i class="fa fa-trash mr-1" ></i></a>                            
                        </td>                    
                    </tr>
                    @endforeach
                </tbody>				
            </table>
        </div>
    </div>                 
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('vendors/datatable/datatable.min.css') }}">
@endsection

@section('script')
    <script src="{{ asset('vendors/datatable/datatable.min.js') }}"></script>
    <script src="{{ asset('vendors/datatable/datatable-bs.min.js') }}"></script>
    <script>
        $('#example').DataTable()
    </script>
@endsection