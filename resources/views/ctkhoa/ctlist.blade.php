<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">   
    <title>CT-DSKhoa</title>
</head>
<body>
    <a href="/khoas/ctadd" class="btn btn-primary sm-3">Them Moi</a>
    <section class="container border my-3">
        
        <h1>Danh Sach Khoa</h1>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Ma Khoa</th>
                <th>Ten Khoa</th>
                <th>Chuc Nang</th>
            </tr>
        </thead>
        <tbody>
            @php
             $stt=0;   
            @endphp
            @foreach ($ctKhoas as $item)
                @php
                $stt ++;
                @endphp
                <tr>
                    <td>{{$stt}}</td>
                    <td>{{$item->CTMAKHOA}}</td>
                    <TD>{{$item->CTTENKHOA}}</TD>
                    <td>
                        <a href="/khoas/detail/{{$item->CTMAKHOA}}" class="btn btn-success">
                            Chi tiết</a>
                            <a href="/khoas/edit/{{$item->CTMAKHOA}}" class="btn btn-primary">
                            Sửa</a>
                            <a href="{{ route('congtung.delete', $item->CTMAKHOA) }}" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </section>
</body>
</html>