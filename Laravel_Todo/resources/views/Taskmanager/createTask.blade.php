<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DevMind - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Add New Task</h3>
    <hr>
        <form action="{{ route('tasks.store') }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="status" value="1">
            <div class="form-group">
                <label for="">Tên công việc</label>
                <input type="text" class="form-control" id="" placeholder="" name="name">
            </div>
            <div class="form-group">
                <label for="">Mô tả công việc</label>
                <input type="text" class="form-control" id="" placeholder="" name="content">
            </div>
            <div class="form-group">
                <label for="">Thời hạn công việc</label>
                <input type="text" class="form-control" id="" placeholder="" name="deadline">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>