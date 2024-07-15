<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="row">
        <h1 class="text-primary mt-5">Create Post</h1>
        <div class="col-md-6 mt-10">
            <form>
                <div class="mb-3 mt-5">
                  <label class="form-label">Title</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Post Title">
                </div>
                <div class="mb-3 mt-5">
                  <label class="form-label">Description</label>
                  <textarea class="form-control">Write Post Description</textarea>
                </div>
                <div class="mb-3 mt-5">
                  <label class="form-label">Is Published</label>
                  <select class="form-control">
                    <option class="disabled selected">Choose Option</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                  </select>
                </div>
                <div class="mb-3 mt-5">
                    <label class="form-label">Is Active</label>
                    <select class="form-control">
                      <option class="disabled selected">Choose Option</option>
                      <option value="1">Yes</option>
                      <option value="0">No</option>
                    </select>
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>
</body>
</html>