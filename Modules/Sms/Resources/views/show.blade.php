@extends('backend.layouts.app')
@section('title')
 SMS
@endsection
@section('site_map')
SMS
@endsection
@section('content')
@include('sms::layouts.nav')


<table class="table table-bordered">
					<thead>
						<tr>
							<th>#</th>
							<th>Sender</th>
							<th>Sms</th>
							<th>Recever</th>
						</tr>
					</thead>
					<tbody>
					<?php $i = 1; ?>
					@foreach($smss as $sms)
						<tr>
							<td>{{$i}}<?php $i++;?></td>
							<td>{{$sms['user_id']}}</td>
							<td>{{$sms['message']}}</td>
							<td>{{$sms['number']}}</td>
						</tr>
					@endforeach
					</tbody>
				</table>

@stop