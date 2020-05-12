@extends('templates.superadmin')
@section('content')
    <div class="page-bar">
        <div class="page-title-breadcrumb">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Data Mitra</header>
                </div>
                <div class="card-body ">
                    <div class="table-scrollable">
                        <table
                                class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
                                id="example4">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th> Pemesan </th>
                                <th> Mitra</th>
                                <th> Ruang</th>
                                <th> Tanggal </th>
                                <th> Status </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="odd gradeX">
                                <td>1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection