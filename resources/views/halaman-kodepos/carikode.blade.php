@extends('layout.nav-amp')
@section('content')
    
    <div>
        <div class="container">
                 {{-- <header class="header clear" role="banner"> --}}
                    <div class="logo ">
						<amp-img src="asset\img\carikodepos.png" width="350" height="100" alt="Logo Kode Pos" class="logo-img"></amp-img>
					</div>
        </div>
        <main class="table">
            <section class="table_header">
                <form action="/" target="_top" method="GET">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <input type="text" class="form-control mr-3" name="search" id="myInput" placeholder="Cari untuk nama tempat, kota, kecamatan ...">
                        <button class="btn btn-dark  " type="submit">Search</button>
                    </div>
                </form>
            </section>
        </main>
        <main class="table">
            <section class="table_body">
                <table>
                    <thead>
                        <tr>
                            <th> Provinsi </th>
                            <th> Kota/Kab </th>
                            <th> Kecamatan </th>
                            <th> Kelurahan </th>
                            <th> Kodepos </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $counter = 0;
                        @endphp
                        @forelse ($tbl_kodepos as $key => $value)
                        @if ($counter < 30)
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
                    </tbody>
                </table>
            </section>
        </main>
    </div>
@endsection
