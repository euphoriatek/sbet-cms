@extends('admin.layouts.master')

@section('title', 'SBet CMS')

@section('content')
<div class="main-content">
<div class="main-content-inner">

<h2>Manage Admin users password</h2>
 <!-- Display success message if available -->
 @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('admin.update.password', $admin->id) }}" method="POST">
    @csrf
    <h4>Admin users password</h4>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="password">
        </div>
        <button type="submit" name="submit"  class="btn btn-success">Password</button>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-danger">Cancel</a>
    </form>
</div>
</div>
@endsection
