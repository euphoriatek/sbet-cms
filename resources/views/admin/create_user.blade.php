@extends('admin.layouts.master')

@section('title', 'SBet CMS')

@section('content')

<!-- <div class="main-content"> -->
<div class="main-content-inner">
    <!-- Vertical Layout -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12" >
           
            <div class="card">

                <!-- Show validation errors -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h1>Manage User</h1>
                <form method="POST" action="{{ route('admin.store.user') }}" id="myForm">
                    @csrf
                    <div class="body">
                        <div class="form-group">
                            <label for="full_name">Full Name</label>
                            <input type="text" class="form-control" name="full_name" id="full_name">
                        </div>
                        <div class="form-group">
                            <label for="calling_code">Calling Code</label>
                            <input type="text" class="form-control" id="calling_code" value="27" disabled>
                        </div>
                        <div class="form-group">
                            <label for="mobile_number">Mobile Number</label>
                            <input type="text" class="form-control" name="mobile_number" id="mobile_number" >
                        </div>
                        <div class="form-group">
                            <label for="email">Email (Optional)</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                        <button type="submit" class="btn btn-success">Save</button>
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-danger">Cancel</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- </div> -->

@endsection
