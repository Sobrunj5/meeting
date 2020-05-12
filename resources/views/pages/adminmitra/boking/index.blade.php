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
                    <header>Data Boking Masuk</header>
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
                                <th> Ruang </th>
                                <th> Lama</th>
                                <th> Tanggal</th>
                                <th> Jam</th>
                                <th> Harga</th>
                                <th> Makan/Minum</th>
                                <th> Catatan Khusus</th>
                                <th> Total</th>
                                <th> Action </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="odd gradeX">

                                <td>Ball Room</td>
                                <td> 0 Jam</td>
                                <td>2020-03-01</td>
                                <td>08.00</td>
                                <td>150000/Jam</td>
                                <td>Paket Hemat: 20.000x1=20.000</td>
                                <td></td>
                                <td>Rp.0</td>
                                <td>
                                    <button type="button" class="btn default btn-outline btn-circle m-b-10">Edit</button>
                                    <button type="button" class="btn default btn-outline btn-circle m-b-10">Delete</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection