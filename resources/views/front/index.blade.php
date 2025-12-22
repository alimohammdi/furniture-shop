@extends('front.layouts.masterFront')

@section('content')

    <!-- Start Top Nav -->
@include('front.partials.navbar')
    <!-- Close Top Nav -->


    <!-- Header -->
@include('front.partials.header')
    <!-- Close Header -->

    <!-- Modal -->
@include('front.partials.modal')



    <!-- Start Banner Hero -->
    @include('front.partials.banner')
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
  @include('front.partials.category')
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
@include('front.partials.featured')
    <!-- End Featured Product -->


    <!-- Start Footer -->
@include('front.partials.footer')
    </footer>
    <!-- End Footer -->

@endsection
