@extends('includes.app')
@section('pagetitle','Thecultivist')
@section('header')
 <!---------- 1st header section start ------------->
 @include('includes.header')
    <!---------- 1st header section end ------------->
@endsection
@section('head')
  <!---------- 2nd applicationformtitle section start ------------->
  @include('includes.head')
    <!---------- 2nd applicationformtitle section end ------------->

@endsection
@section('content_generalInfo')
<!------------ Gneral information section start --------->
@include('includes.generalInformation')
<!------------ Gneral information section end --------->
@endsection
@section('content_paymentInfo')
<!------------ payment details section start --------->

@include('includes.paymentInformation')
<!------------ payment details section end --------->
@endsection
@section('content_aboutInfo')
<!------------ about you section start --------->
@include('includes.about')
<!------------ about you section end --------->
@endsection
@section('content_submitreviewInfo')
<!------------ review and submit section start --------->
@include('includes.reviewSubmit')
<!------------ review and submit section end --------->
@endsection