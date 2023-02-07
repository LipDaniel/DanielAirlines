@extends('user.layout')

<!-- HEADER -->
@section('header')
    @include('user.header')
@endsection

@section('main')
    @include('user.main')   
@endsection

@section('footer')
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>Daniel Airplanes</strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
@endsection
