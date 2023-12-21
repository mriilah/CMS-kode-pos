@extends('layout.nav-amp')
@section('content')
    
    {{-- <div class="container">
        <div class="logo">
            <amp-img src="{{ asset('/asset/img/carikodepos.png') }}" width="350" height="100" alt="Logo Kode Pos"
                class="logo-img"></amp-img>
        </div>
    </div> --}}

    <div>
        <main role="main" class="">
            <div class="wrapper container">
                <section>
                    <form action="{{ url(url()->current()) }}" method="GET">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <input type="text" class="form-control mr-3" name="search" id="myInput" placeholder="Search for names..">
                            <button class="btn btn-dark  " type="submit">Search</button>
                        </div>
                    </form>
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
                                @if ($counter < 40)
                                    <tr>
                                        <td><a href="{{ url('provinsi') . '/' . \Str::lower($value->provinsi) }}">{{ $value->provinsi }}</a></td>
                                        <td><a href="{{ url('kabupaten') . '/' . \Str::lower($value->kabupaten) }}">{{ $value->kabupaten }}</a></td>
                                        <td><a href="{{ url('kecamatan') . '/' . \Str::lower($value->kecamatan) }}">{{ $value->kecamatan }}</a></td>
                                        <td><a href="{{ url('kelurahan') . '/' . \Str::lower($value->kelurahan) }}">{{ $value->kelurahan }}</a></td>
                                        <td><a href="{{ url('kodepos') . '/' . \Str::lower($value->kodepos) }}">{{ $value->kodepos }}</a></td>
                                    </tr>
                                    @php
                                        $counter++;
                                    @endphp
                                @else
                                    @break
                                @endif
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">Tidak ada data</td>
                                </tr>
                            @endforelse
                        </table>
                    </div>
                </section>
            </div>
        </main>
    </div>
@endsection
