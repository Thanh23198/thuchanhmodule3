@extends('backend.master')

@section('content')

    <div class="container">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                                                                       href="https://datatables.net">official DataTables
                documentation</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Thêm đại lý</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{ route('admin.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tr>
                                <td>Code</td>
                                <td>
                                    <input type="number" class="form-control" name="code">
                                    @if($errors->any())
                                        {{ $errors->first('code') }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>NameStore</td>
                                <td>
                                    <input type="text" class="form-control" name="name">
                                    @if($errors->any())
                                        {{ $errors->first('name') }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>
                                    <input type="number" class="form-control" name="phone">
                                    @if($errors->any())
                                        {{ $errors->first('phone') }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>
                                    <input type="text" class="form-control" name="email">
                                    @if($errors->any())
                                        {{ $errors->first('email') }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>
                                    <input type="text" class="form-control" name="address">
                                    @if($errors->any())
                                        {{ $errors->first('address') }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Manager</td>
                                <td>
                                    <input type="text" class="form-control" name="manager">
                                    @if($errors->any())
                                        {{ $errors->first('manager') }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>
                                    <input type="text" class="form-control" name="status">
                                    @if($errors->any())
                                        {{ $errors->first('status') }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td align="center" colspan="4">
                                    <input type="submit" value="Submit">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>

    </div>


@endsection

