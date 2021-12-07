@extends('layouts.app')

@section('title')
    Riwayat Absensi
@endsection



@section('content')
    <div class="container-fluid">


        <div class="card">
            <div class="card-body">

                <p>Riwayat Absensi Anda</p>
                <table id="example" class="table table-bordered text-center">
                    <thead>
                        <th>No.</th>
                        <th>Document</th>
                        <th>Date & Time Submitted</th>
                        <th>Status</th>
                        <th>Remark</th>


                    </thead>
                    <tbody>
                        @foreach ($info as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td> {{ $data->document_subject }}</td>
                                <td>{{ $data->created_at }}</td>
                                @if ($data->status == 1)
                                    <td>Approved</td>
                                @endif
                                @if ($data->status == 2)
                                    <td>Rejected</td>
                                @endif

                                <td>{{ $data->remark }}</td>
                            </tr>


                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
