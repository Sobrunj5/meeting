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
                    <header>Data Ruang Meeting</header>
                </div>
                <div class="card-body ">
                    <div class="table-scrollable">
                        <table
                                class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
                                id="example4">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th> Nama </th>
                                <th> Email</th>
                                <th> No Hp </th>
                                <th> Jenis User </th>
                                <th> Keterangan </th>
                                <th> Action </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="odd gradeX">
                                <td>1</td>
                                <td>aku</td>
                                <td>akusayang@gmail.com</td>
                                <td>1500003456</td>
                                <td>
                                    <button type="button" class="btn btn-circle btn-info">User</button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-circle btn-success">Verified</button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-circle btn-danger">Delete</button>
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