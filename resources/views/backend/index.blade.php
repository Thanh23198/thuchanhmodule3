@extends('backend.master')

@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                                                                       href="https://datatables.net">official DataTables
                documentation</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Code</th>
                            <th>NameStore</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Manager</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @forelse($stores as $key => $store)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $store->code }}</td>
                                <td>{{ $store->name}}</td>
                                <td>{{ $store->phone}}</td>
                                <td>{{ $store->email}}</td>
                                <td>{{ $store->address}}</td>
                                <td>{{ $store->manager}}</td>
                                <td>{{ $store->status}}</td>
                                <td>
                                    <a href="{{ route("admin.edit", $store->id) }}">Edit</a>
                                    <a href="{{ route("admin.destroy", $store->id) }}">Delete</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">Data not available.</td>
                            </tr>

                        @endforelse
                        </tbody>


                    </table>
{{--                    <div style="float: right;">{{ $stores->links( "pagination::bootstrap-4") }}</div>--}}
                </div>
            </div>
        </div>

    </div>


@endsection

