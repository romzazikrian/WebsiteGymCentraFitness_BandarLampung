@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-4 mb-4">Edit Member</h1>
        <form action="{{ route('admin.members.update', $member->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" name="username" value="{{ $member->username }}" required>
            </div>

            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" name="nama" value="{{ $member->nama }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" value="{{ $member->email }}" required>
            </div>

            <div class="form-group">
                <label for="telepon">Telepon:</label>
                <input type="text" class="form-control" name="telepon" value="{{ $member->telepon }}" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" name="alamat" value="{{ $member->alamat }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Member</button>
        </form>
    </div>
@endsection
