@extends('layout.main')
@section('content')
<a href="{{route('add')}}"><input type="submit" value="them sinh vien"></a>
@if (isset($_GET['msg'])&& isset($_SESSION['errors']))
    <span style="color: red">{{$_SESSION['errors']}}</span> <br>
@endif
@if (isset($_GET['msg'])&& isset($_SESSION['success']))
    <span style="color: green">{{$_SESSION['success']}}</span> <br>
@endif
    <table border="1">
        <thead>
            <th>ID</th>
            <th>Họ tên</th>
            <th>Mã sinh viên</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Action</th>

        </thead>
        <tbody>
            @foreach ($students as $c)
                <tr>
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->ho_ten }}</td>
                    <td>{{ $c->ma_sv }}</td>
                    <td>{{ $c->email }}</td>
                    <td>{{ $c->so_dien_thoai }}</td>
                    <th>
                        <a href="{{route('update/' .$c->id)}}">Sửa</a>
                        <a href="{{route('delete/'.$c->id )}}" onclick="return confirm('ban co chac chan muon xoa khong')">Xóa</a>
                    </th>
                </tr>
            @endforeach
        </tbody>

    </table>
@endsection
