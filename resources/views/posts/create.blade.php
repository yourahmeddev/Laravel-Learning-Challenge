<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/parsley.css') }}">
</head>

<body>
    <div class="container">
        <div class="row">
            <h1 class="text-primary mt-5">Create Post</h1>
            <div class="col-md-6 mt-10">
                {{-- showing errors in laravel start --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{-- showing errors in laravel end --}}
                <form method="post" action="{{ route('posts.store') }}" id="form">
                    @csrf
                    <div class="mb-3 mt-5">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter Post Title" value="{{ old('title') }}">
                    </div>
                    <div class="mb-3 mt-5">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="description">{{ old('description') }}</textarea>
                    </div>
                    <div class="mb-3 mt-5">
                        <label class="form-label">Is Published</label>
                        <select  class="form-control" name="is_publish">
                            <option class="disabled ">Choose Option</option>
                            <option @selected(old('is_publish')== 1) value="1">Yes</option>
                            <option @selected(old('is_publish')== 0) value="0">No</option>
                        </select>
                    </div>
                    <div class="mb-3 mt-5">
                        <label class="form-label">Is Active</label>
                        <select  class="form-control" name="is_active">
                            <option class="disabled">Choose Option</option>
                            <option @selected(old('is_active') == 1 ) value="1">Yes</option>
                            <option @selected(old('is_active') == 0 ) value="0">No</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('assets/jquery-3.7.1.js') }}"></script>
<script src="{{ asset('assets/parsley.js') }}"></script>
<script>
    $('#form').parsley();
</script>

</html>
