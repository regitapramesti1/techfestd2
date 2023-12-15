<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
        <form method="GET" action="{{ route('dashboard') }}">
            @csrf
        <div class="form-group">
            <label for="">judul</label>
            <input type="text" class=" form-control" placeholder="input kategori">
        </div>
        <div class="form-group">
        <label for="">kegiatan</label>
        <input type="text" class="form-control" placeholder="input category">
        </div>
        <input type="submit"  class="btn btn-primary" value="simpan">
    </form>
</body>
</html>