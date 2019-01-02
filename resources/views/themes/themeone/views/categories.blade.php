@extends('layouts')
@section('customcss')
@if(!empty(session("theme")))
        <link href="{!! asset('public/css/'.session("theme").'.css') !!} " media="all" rel="stylesheet" type="text/css"/>
    @else
        <link href="{!! asset('public/css/app.css') !!} " media="all" rel="stylesheet" type="text/css"/>
    @endif
<link rel="stylesheet" type="text/css" href="{!! asset('public/css/style.css') !!}">
<link href="{!! asset('public/css/responsive.css') !!} " media="all" rel="stylesheet" type="text/css"/>
 <link href="{!! asset('public/css/rtl.css') !!} " media="all" rel="stylesheet" type="text/css"/>
 <link href="{!! asset('public/css/font-awesome.css') !!} " media="all" rel="stylesheet" type="text/css"/>
 <link href="{!! asset('public/css/owl.carousel.css') !!} " media="all" rel="stylesheet" type="text/css"/>
 <link href="{!! asset('public/css/bootstrap-select.css') !!} " media="all" rel="stylesheet" type="text/css"/>
  
@endsection
@section('content')

<!--<div class="col-lg-3">
	@include('common.categories')
	@include('common.banners')
</div>-->

<div class="col-lg-12">
	<br>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{ URL::to('/')}}">Home</a></li>
		<li class="breadcrumb-item active">Categories</li>
	</ol>
		
	<div class="row">
		
		

	</div>
	

</div>



			
		
@endsection 	


