@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Faketube</h2>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('channel.create') }}" class="btn btn-primary float-end">Thêm mới</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if (session('thongbao'))
                    <div class="alert alert-success">
                        {{ session('thongbao') }}
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>ChannelID</th>
                            <th>ChannelName</th>
                            <th>Description</th>
                            <th>SubscribesCount</th>
                            <th>URL</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($channel as $XL)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $XL ->id }}</td>
                                <td>{{ $XL ->ChannelName }}</td>
                                <td>{{ $XL ->Description }}</td>
                                <td>{{ $XL ->SubscribesCount }}</td>
                                <td>{{ $XL ->URL }}</td>
                                <td>
                                    <form action="{{ route('channel.destroy', $sv->id) }}" method="POST">
                                    <a href="{{ route('channel.edit', $sv->id) }}" class="btn btn-info">Sửa</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xóa</button>
                                </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $sinhvien->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection