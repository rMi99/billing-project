@extends('layouts.app')

@section('content')
    <!-- Billing page content -->
    <h1>Billing Page Content</h1>
    <button class="btn btn-primary show-popup">Show Popup</button>
@endsection

@section('scripts')
    <script>
            $(document).ready(function() {
                $('.bd-example-modal-lg').modal('show');
            });
    </script>


@endsection
