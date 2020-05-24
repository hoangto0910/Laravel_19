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
		<table class="table table-bordered">
            <thead class="thead-light">
                <th colspan="3">Thêm công việc mới </th>
            </thead>
            <tbody>
            	<tr>
            		<td>Tên công việc</td>
            		<td ><input type="text" class="input-group mb-3"></td>
            		<td width="10%"><a href="" class="btn btn-success">Thêm công việc mới</a></td>
            	</tr>
            </tbody>
        </table>
        <br><br>
		<table class="table table-bordered">
            <thead class="thead-light">
                <th colspan="3">Danh sách công việc hiện tại </th>
            </thead>
            <tbody>
            	<tr>
            		<td colspan="3">Tên công việc</td>
            	</tr>
            	<tr>
            		<td>Làm bài tập Laravel</td>
            		<td width="10%"><a href="{{ route('todo.task.complete') }}" class="btn btn-success">Hoàn Thành</a></td>
            		<td width="10%"><a href="{{ route('todo.task.delete') }}" class="btn btn-danger">Xóa</a></td>
            	</tr>
            	<tr>
            		<td>Làm bài tập PHP</td>
            		<td width="10%"><a href="{{ route('todo.task.complete') }}" class="btn btn-success">Hoàn Thành</a></td>
            		<td width="10%"><a href="{{ route('todo.task.delete') }}" class="btn btn-danger">Xóa</a></td>
            	</tr>
            	<tr>
            		<td>Làm Project Laravel</td>
            		<td width="10%"><a href="{{ route('todo.task.reset') }}" class="btn btn-success">Làm Lại</a></td>
            		<td width="10%"><a href="{{ route('todo.task.delete') }}" class="btn btn-danger">Xóa</a></td>
            	</tr>
            </tbody>
        </table>
	</div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>