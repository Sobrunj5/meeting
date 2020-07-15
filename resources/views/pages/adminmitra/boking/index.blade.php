@extends('templates.adminmitra')
@section('content')
<div class="page-bar">
    <div class="page-title-breadcrumb">
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card card-box">
            <div class="card-head">
                <header>Data Booking Masuk</header>
            </div>
            <div class="card-body ">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-6">
                    </div>
                </div>
                <div class="table-scrollable">
                    <table
                        class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
                        id="example4">

                        <thead>
                            <tr>
                                <th> No. </th>
                                <th> Ruang </th>
                                <th> Lama</th>
                                <th> Tanggal</th>
                                <th> Jam</th>
                                <th> Harga</th>
                                <th> Total</th>
                                <th> Action</th>
                                {{--<th> Total</th>--}}
                                {{--<th> Action </th>--}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                            <tr class="odd gradeX">

                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->ruang->nama_tempat }}</td>
                                <td>{{ $data->user->nama}}</td>
                                <td>{{ $data->tanggal }}</td>
                                <td>{{ $data->jam_mulai }}</td>
                                <td>{{ $data->harga }}</td>
                                <td>{{ $data->total_bayar }}</td>
                                @foreach ($data->makanans as $makanan)
                                <td>{{ $makanan->makanan->nama}}</td>
                                @endforeach
                                <td>
                                    <a href="{{ route('booking.verifikasi', $data->id) }}"
                                        class="btn default btn-outline btn-circle btn-sm">Konfirmasi</a>
                                    <a href="{{ route('booking.tolak', $data->id) }}"
                                        class="btn default btn-outline btn-circle btn-sm">Tolak</a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
