@extends('layout.nav')
@section('content')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <div class="container">
        {{-- <header class="header clear" role="banner"> --}}
        <div class="logo">
            <amp-img src="asset\img\carikodepos.png" width="350" height="100" alt="Logo Kode Pos"
                class="logo-img" scale="0"></amp-img>
        </div>
    </div>

    <div>
        <main role="main">
            <div class="wrapper container">
                <section>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <input type="text" class="form-control mr-3" id="myInput" placeholder="Search for names..">
                        <button class="btn btn-dark btn-lg mb-2 " onclick="searchTable()">Search</button>
                    </div>
                    <div class="table-responsive">
                        <table id="dataTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Provinsi</th>
                                    <th scope="col">Kota/Kab.</th>
                                    <th scope="col">Kecamatan</th>
                                    <th scope="col">Kelurahan</th>
                                    <th scope="col">Kodepos</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $counter = 0;
                                @endphp
                                @forelse ($tbl_kodepos as $key => $value)
                                @if ($counter < 10)
                                    <tr>
                                        <td>{{ $value->provinsi }}</td>
                                        <td>{{ $value->kabupaten }}</td>
                                        <td>{{ $value->kecamatan }}</td>
                                        <td>{{ $value->kelurahan }}</td>
                                        <td>{{ $value->kodepos }}</td>
                                    </tr>
                                    @php
                                    $counter++;
                                    @endphp
                                    @else
                                        @break
                                    @endif
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No data</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </main>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script src="https://kit.fontawesome.com/e943d7506e.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        var table; // Definisikan variabel table di luar $(document).ready()
    
        $(document).ready(function() {
            table = $('#dataTable').DataTable({
                responsive: true
            });
        });
    
        function searchTable() {
            var searchText = $('#myInput').val();
            table.search(searchText).draw();
        }
    </script>
@endpush
