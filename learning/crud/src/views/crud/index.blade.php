<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task Package</title>
</head>
<body>
    <div style="text-align:center; margin:0 auto; width:800px;">
        <h2>Task Crud</h2>
        <table cellpadding="10" cellspacing="1" width="100%" border="1">
            <thead>
                <tr>
                    <td colspan="3">
                    <a href="{{ url('crud/add') }}">Add Task</a>
                    </td>
                </tr>
                <tr>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if(count($cruds)>0)
                    @foreach($cruds as $d)
                        <tr>
                            <td>{{$d['title']}}</td>
                            <td>{{$d['body']}}</td>
                            <td>
                                <a href="{{ url('crud/update/'.$d['id']) }}">Edit</a> | 
                                <a href="{{ url('crud/delete/'.$d['id']) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                @else
                        <tr>
                            <td colspan="3">
                                No Data Found!!
                            </td>
                        </tr>
                @endif
            </tbody>
        </table>
    </div>
</body>
</html>