<h2>-- Danh sách công việc --</h2>
<br>
@foreach ($lists as $key => $list)
	<p>- Công việc Thứ {{ ($key + 1) }}</p>
	<p> + Tên công việc : {{ $list['name'] }}</p>
	<p>
	 + Trạng thái : 
	 @if ($list['status'] === 0)
	 	Chưa làm
	 @elseif ($list['status'] === 1)
	 	Đã Hoàn Thành
	 @elseif ($list['status'] === -1)
	 	Không thực hiện
	 @endif
	</p>
	<br>
@endforeach
