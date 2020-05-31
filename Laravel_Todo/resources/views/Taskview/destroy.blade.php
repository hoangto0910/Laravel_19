@extends("includes.master")
@section("css")
	<style>
		.title{
			width: 100%;
			padding: 300px;
		}
	</style>
@endsection
@section("title")
	Destroy Page
@endsection
@section("content")
	<div class="title text-center">Welcome to Destroy Page with Id = {{ $id }} </div>
@endsection