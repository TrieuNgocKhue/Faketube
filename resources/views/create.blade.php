@extends('layout')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h2>Thêm</h2>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('channel.index') }}" class="btn btn-primary float-end">Danh sách</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('channel.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Mã</strong>
                            <input type="text" name="ChannelID" class="form-control">
                        </div>
                        <div class="form-group">
                            <strong>ChannelName</strong>
                            <input type="text" name="ChannelName" class="form-control" >
                        </div>
                        <div class="form-group">
                            <strong>Description</strong>
                            <input type="text" name="Description" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>SubscribesCount</strong>
                            <input type="text" name="SubscribeCount" class="form-control" >
                        </div>
                        <div class="form-group">
                            <strong>URL</strong>
                            <input type="text" name="URL" class="form-control">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-2">Lưu thông tin</button>
            </form>
        </div>
    </div>
</div>
@endsection