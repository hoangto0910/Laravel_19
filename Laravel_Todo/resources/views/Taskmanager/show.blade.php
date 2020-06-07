@extends("includes.master")
<div class="container">
	<div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Chi tiết công việc
            </div>
            <div class="panel-body">
                <h4>Tên công việc: {{ $task->name }}</h4>
                <h4>Nội dung</h4>{{ $task->content }}
                <h4>Thời hạn</h4>{{ $task->deadline }}
                <h4>Status</h4>
                @if ($task->status == -1)
                	Không làm
                @elseif ($task->status == 0)
                	Chưa làm
                @elseif ($task->status == 1)
                	Đang làm
                @elseif ($task->status == 2)
                	Đã làm	
                @endif
                <h4>Mức Độ ưu tiên</h4>
                @if ($task->priority == 0)
                    Bình thường
                @elseif ($task->priority == 1)
                    Quan trọng
                @elseif ($task->priority == 2)
                    Khẩn cấp 
                @endif
            </div>
        </div>
    </div>
</div>