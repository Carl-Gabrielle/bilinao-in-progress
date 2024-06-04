<!-- resources/views/apply_seller.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Apply to Become a Seller</h2>
    <form action="{{ route('apply.seller') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="business_name" class="form-label">Business Name</label>
            <input type="text" class="form-control" id="business_name" name="business_name" required>
        </div>
        <div class="mb-3">
            <label for="business_details" class="form-label">Business Details</label>
            <textarea class="form-control" id="business_details" name="business_details" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit Application</button>
    </form>
</div>
@endsection
