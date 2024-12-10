<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h3>Update Khoa</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('congtung.update', $khoa->CTMAKHOA) }}" method="post">
                    @csrf
                    <div class="row mb-3">
                        <label for="CTMAKHOA">Ma Khoa</label>
                        <input type="text" id="CTMAKHOA" class="form-control-plaintext" 
                               name="CTMAKHOA" value="{{ $khoa->CTMAKHOA }}" readonly>
                    </div>
                    <div class="row mb-3">
                        <label for="CTMAKHOA">Ten Khoa</label>
                        <input type="text" id="CTTENKHOA" class="form-control" 
                               name="CTTENKHOA" value="{{ $khoa->CTTENKHOA }}" >
                    </div>
                    <div class="card-footer">
                        <input type="submit" class="btn btn-primary" value="Update">
                        <a href="/khoas" class="btn btn-success">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>