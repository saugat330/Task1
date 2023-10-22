<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principle Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <h1 class='my-4'>Add course</h1>
        <div class="row">
            <div class="col-md-7">
                <form action="{{route('addCourse')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Corse Title</label>
                        <input type="text" required class="form-control" name='title' aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Corse Type</label>
                        <input type="text" required class="form-control" name='type' aria-describedby="emailHelp">
                    </div>
                    <div class="form-floating mb-3">
                        <textarea  style="height: 100px" required class="form-control" name="details" placeholder="Course Details" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Details</label>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>