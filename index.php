<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>PHP-File-Upload</title>
</head>

<body>
    <div class="container">
        <form method="POST" action="upload.php" enctype="multipart/form-data">
            <div class="upload-wrapper">
                <span class="file-name">Choose a file...</span>
                <label for="file-upload">Browse<input type="file" id="file-upload" name="uploadedFile"></label>
            </div>
            <input type="submit" name="uploadBtn" value="Upload" />
        </form>
    </div>
</body>

</html>