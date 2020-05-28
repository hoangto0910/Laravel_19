@extends("includes.master")
@section("title")
	Profile
@endsection
@section("css")
	<style>
		.title{
			width: 100%;
			padding: 120px;
		}
	</style>
@endsection
@section("content")
<div class="title container">
	<h2>-- Thông Tin cá nhân --</h2>
	<br>
	<p>Họ và tên : {{ $name }}</p>
	<p>Năm sinh : {{ $year }}</p>
	<p>Trường học : {{ $school }}</p>
	<p>Quê quán : {{ $country }}</p>
	<p>Giới thiệu bản thân : {!! "$introduce" !!}</p>
	<p>Mục tiêu nghề nghiệp : {{ $muctieu }}</p>
</div>
@endsection