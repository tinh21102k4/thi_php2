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
    <input type="text" name="ho_ten" value="{{$student->ho_ten}}"> <br><br>
    <input type="text" name="ma_sv" value="{{$student->ma_sv}}"> <br><br>
    <input type="text" name="email" value="{{$student->email}}"> <br><br>
    <input type="number" name="so_dien_thoai" value="{{$student->so_dien_thoai}}"> <br><br>
    <input type="submit" value="cap nhat sinh vien">
</form>
@endsection
