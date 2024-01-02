<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="container">
    <div class="d-flex justify-content-between">
        <h4 class="text-center text-success text-uppercase mt-3 mb-5">Add Post</h4>
    </div>
    <div>
        <form action="{{route('post.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control"  id="title" name="title" placeholder="title">
                @if ($errors->has('title'))
                    <p class="help text-danger">{{ $errors->first('title') }}</p>
                @endif
            </div>
            <div class="mb-3">
                <label for="descrip" class="form-label">Description</label>
                <input type="text" class="form-control"  id="descrip" name="descrip" placeholder="description">
                @if ($errors->has('descrip'))
                    <p class="help text-danger">{{ $errors->first('descrip') }}</p>
                @endif
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <input type="text" class="form-control"  id="content" name="content" placeholder="content">
                @if ($errors->has('content'))
                    <p class="help text-danger">{{ $errors->first('content') }}</p>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Tạo</button>
            <a href="{{route('post.index')}}" class="btn btn-primary" >Quay lại</a>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
