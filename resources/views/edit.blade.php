@extends('layout')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h2>Sửa Faketube</h2>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('channel.index') }}" class="btn btn-primary float-end">Danh sách sinh viên</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('channel.update',  $channel->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>ChannelID</strong>
                            <input type="text" name="MaSV" value="{{ $channel->id }}" class="form-control" placeholder=" ID">
                        </div>
                        <div class="form-group">
                            <strong>ChannelName</strong>
                            <input type="text" name="ChannelName" value="{{ $channel->ChannelName }}" class="form-control" placeholder=" ChannelName">
                        </div>
                        <div class="form-group">
                            <strong>Description</strong>
                            <input type="text" name="Description" value="{{ $channel->Description }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>SubscribesCount</strong>
                            <input type="text" name="SubscribeCount" value="{{ $channel->SubscribesCount }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <strong>URL</strong>
                            <input type="tel" name="URL" value="{{ $channel->URL }}" class="form-control" >
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-2">Cập nhật </button>
            </form>
        </div>
    </div>
</div>
@endsection