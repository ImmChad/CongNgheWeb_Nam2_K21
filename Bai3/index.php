<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
        body {
            width: 100%;
            height: 100vh;
            background-image: url('https://wallpaper.dog/large/20511948.jpg');
            background-repeat: no-repeat;
            background-size: 100% 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form {
            height: 400px !important;
            width: 500px !important;
            background-color: #ffffffeb;
        }
        form> * {
            margin: 10px 0 !important;
        }
    </style>
</head>


<body>

    <form action="mail.php" enctype="multipart/form-data" method="POST">
        <!-- <input type="text" class="form-control" name="email" placeholder="Email"> -->
        <label for="email" class="form-label">Tên Người gửi:</label>
        <input type="text" class="form-control" name="tieude" placeholder="Nhập Tên Người gửi">
        <label for="email" class="form-label">Nội Dung gửi:</label>
        <textarea name="content" id="editor" class="form-control"></textarea>
        <input type="file" class="form-control" name="file">
        <button type="submit" class="btn btn-primary">Gửi</button>
    </form>
</body>

</html>