@extends('layout.main')
@section('content')
@if (isset($_GET['msg'])&& isset($_SESSION['errors']))
@foreach ($_SESSION['errors'] as $item)
    <span style="color: red">{{$item}}</span> <br>
@endforeach
@endif
@if (isset($_GET['msg'])&& isset($_SESSION['success']))
    <span style="color: green">{{$_SESSION['success']}}</span> <br>
@endif
<form action="" method="POST">
    <input type="text" name="ho_ten" placeholder="nhap ho ten"> <br><br>
    <input type="text" name="ma_sv" placeholder="nhap ma sinh vien "> <br><br>
    <input type="text" name="email" placeholder="nhap email"> <br><br>
    <input type="number" name="so_dien_thoai" placeholder="nhap so dien thoai"> <br><br>
    <input type="submit" value="them sinh vien">
</form>
@endsection
