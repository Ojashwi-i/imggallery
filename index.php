<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>

<body>


    <form action="index.php" method="post" enctype="multipart/form-data">
        <div class="row mt-4 pb-4 bgcolor">
            <div class="col-5">
                <label for="title">Title:</label>
                <br>
                <input class="form-control" type="text" name="title" id="title">
            </div>

            <div class="col-5">
                <label for="image">Image:</label>
                <br>
                <input class="form-control" type="file" name="image" id="image">
            </div>

            <div class="col-2">
                <button type="submit" name="upload" class="btn btn-primary upload">Upload</button>
            </div>
        </div>
    </form>
    <?php include 'upload.php' ?>

</body>

</html>