@extends('backend.layouts.app')
@section('title')
Unauthorized
@endsection
@section('site_map')
Unauthorized
@endsection
@section('content')
<style type="text/css">
	@import url(https://fonts.googleapis.com/css?family=Roboto:300);
  	html {
    	height:90%;
	}

	body {
		/*  background:#3F485B;
		     display:flex;
		     align-items:center;
		     height:90%; */
	}
	.back {
		margin:1em auto;
		font-family:"Roboto";
	}
	.back span {
		font-size:3em;
		color:#F2C640;
		background:#222D32;
		display:table-cell;
		box-shadow:inset 0 0 5px rgba(0,0,0,0.3), 0 5px 0 #ccc;
		padding: 0 15px;
		line-height: 100px;
		animation:jumb 2s infinite;
	}
	@keyframes jumb {
		0% {
			transform:translateY(0px)
		}
		50% {
			transform:translateY(-30px);
			box-shadow:0 15px 0 rgb(242, 198, 64);
		}
		100% {
			transform:translateY(0px)	
		}
	}
	.back span:nth-child(1) {
		animation-delay:0s;
	}
	.back span:nth-child(2) {
		animation-delay:.1s;	
	}
	.back span:nth-child(3) {
		animation-delay:.2s;
	}
	.back span:nth-child(4) {
		animation-delay:.3s;	
	}
	.back span:nth-child(5) {
		animation-delay:.4s;
	}
	.back span:nth-child(6) {
		animation-delay:.5s;	
	}
	.back span:nth-child(7) {
		animation-delay:.6s;
	}
	.back span:nth-child(8) {
		animation-delay:.7s;
	}
	.back span:nth-child(9) {
		animation-delay:.8s;
	}
	.back span:nth-child(10) {
		animation-delay:.9s;
	}
	.back span:nth-child(11) {
		animation-delay:.10s;
	}
</style>
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Unauthorized</h3>
			</div>
			<div class="box-body">
				<span class="back">
					<span>U</span>
					<span>n</span>
					<span>a</span>
					<span>u</span>
					<span>t</span>
					<span>h</span>
					<span>o</span>
					<span>r</span>
					<span>i</span>
					<span>z</span>
					<span>e</span>
					<span>d</span>
				</span>	
			</div>
		</div>
	</div>
</div>
@stop