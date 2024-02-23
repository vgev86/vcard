@extends('admin.layouts')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Users</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <td>Qr Code</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->phone}}</td>
                                            <td>
                                                {!! $user->qrcode_path !!}
                                            </td>
                                            <td>
                                                <label class="badge badge-success">
                                                    <a href="{{route('user.edit', ['id' => $user->hashed_id])}}">
                                                        Edit
                                                    </a>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="badge badge-danger">
                                                    <a href="{{route('user.delete', ['id' => $user->hashed_id])}}">
                                                        Delete
                                                    </a>
                                                </label>
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
        </div>
    </div>
@endsection
