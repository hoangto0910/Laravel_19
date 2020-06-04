
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Work Manager</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h3 class="text-center">--- Ứng dụng quản lý công việc ---</h3>
		<br>
		<table class="table table-bordered">
            <thead class="thead-light">
                <th colspan="3">Thêm công việc mới </th>
            </thead>
            <tbody>
            	<tr>
            		<td width="10%" colspan="3"><a href="{{ route('tasks.create') }}" class="btn btn-success">Thêm công việc mới</a></td>
            	</tr>
            </tbody>
        </table>
        <br><br>
            @if (isset($_COOKIE["msg"])) 
            	<div class="alert alert-success" role="alert">
            		<strong>Success !!!</strong>
            		{{
            			$_COOKIE["msg"] 
            		}}
            	</div>
			@endif
		<table class="table table-bordered">
            <thead class="thead-light">
                <th colspan="7">Danh sách công việc hiện tại </th>
            </thead>
            <tbody>
            	<tr class="text-center">
            		<td>ID</td>
            		<td>Tên Công việc</td>
            		<td>Mô tả Công việc</td>
            		<td>Deadline</td>
            		<td>Status</td>
            		<td colspan="2">Chức năng</td>
            	</tr>
            	@foreach ($tasks as $task)          	
            	<tr class="text-center">
            		<td width="5%" >{{ $task['id'] }}</td>
            		<td>{{ $task['name'] }}</td>
                    <td width="20%">{{ $task['content'] }}</td>
            		<td width="20%">{{ $task['deadline'] }}</td>
            		<td width="5%">{{ $task['status'] }}</td>
                    <td width="10%"><a href="{{ route('taskcpl', $task['id']) }}" class="btn btn-success">Hoàn Thành</a></td>
                    <td>
	                    <form action="{{ route('tasks.destroy', $task['id']) }}" method="POST">
						    @method('DELETE')
						    @csrf
						    <button width="10%" class="btn btn-danger">Xóa</button>
						</form>
					</td>
            		{{-- <td width="10%"><a href="{{ route('tasks2.destroy', $task['id']) }}" class="btn btn-danger">Xóa</a></td> --}}
            	</tr>
            	@endforeach
            </tbody>
        </table>
	</div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>