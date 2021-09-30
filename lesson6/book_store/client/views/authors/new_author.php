<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
        require('./../layouts/bootstrap.php');
        require('./../layouts/front.php');
    ?>
</head>
<body>
    <div class="container">
        <div class="mb-3">
            <label for="author_name" class="form-label">Author name</label>
            <input type="text" class="form-control" id="author_name" placeholder="John Smith">
        </div>
        <button id="add-button" class="btn btn-primary">Save</button>
    </div>
</body>
</html>