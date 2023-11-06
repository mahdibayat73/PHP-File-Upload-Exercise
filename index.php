<?php
session_start();
?>
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
    <main>
        <div class="container">

            <?php if (isset($_SESSION["msg"]) && $_SESSION["msg"]) : ?>
                <p class="msg">
                    <?php echo $_SESSION["msg"]; ?>
                </p>
                <?php unset($_SESSION["msg"]); ?>
            <?php endif ?>

            <form method="POST" action="helper/file-upload.php" enctype="multipart/form-data">
                <div class="upload-wrapper">
                    <span class="file-name">Choose a file...</span>
                    <label for="file-upload">Browse
                        <input type="file" id="file-upload" name="uploadedFile">
                    </label>
                </div>
                <input type="submit" name="uploadBtn" value="Upload" />
            </form>
        </div>
    </main>
</body>

</html>