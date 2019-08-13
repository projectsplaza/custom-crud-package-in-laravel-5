<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Task Package</title>
</head>
<body>
    <div style="text-align:center; margin:0 auto; width:800px;">
        @if(Session::has('success'))
            <p>{{ session('success') }}</p>
        @endif
        <form method="post" action="{{ url('crud/add') }}">
        {{ csrf_field() }}
        <h2>Task Crud</h2>
        <table cellpadding="10" cellspacing="1" width="100%" border="1">
            <tr>
                <td colspan="3">
                <a href="{{ url('crud') }}">Task List</a>
                </td>
            </tr>
            <tr>
                <th>Title</th>
                <td><input type="text" name="title" /></td>
            </tr>
            <tr>
                <th>Body</th>
                <td>
                    <textarea name="body"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" />
                </td>
            </tr>
        </table>
        </form>
    </div>
</body>
</html>