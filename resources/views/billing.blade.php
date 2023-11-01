@extends('layouts.app')

@section('content')
    <!-- Billing page content -->
    <h1>Billing Page Content</h1>
    <button class="btn btn-primary show-popup">Show Popup</button>
@endsection

@section('scripts')
    <script>
        // JavaScript code to handle the popup behavior
        $(document).ready(function () {
            $('.show-popup').click(function () {
                $('.desktop-popup').modal('show');
            });
        });
    </script>
@endsection
