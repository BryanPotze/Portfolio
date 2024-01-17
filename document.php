<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".//css/style.css">
</head>
<body>
    <div class="page-container">
        <?php
        if (isset($_GET['file'])) {
            $file = $_GET['file'];
            echo "<div class='pdfdoc-container'>"
                 . "<object data='./documenten/$file' type='application/pdf' class='pdfdoc-object'></object>"
                 . "</div>";
        } else {
            echo "No file specified.";
        }
        ?>
    </div>
</body>
</html>