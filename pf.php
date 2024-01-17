<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href=".//css/style.css">
</head>
<body>
    <header>
        <a href="portfolio.html" class="logo">Bryan.</a>
        <nav>
            <a href="#jaar1" class="jaar1">Jaar 1</a>
        </nav>
    </header>
    <section id="jaar1">
      <div class="pdf">
                <?php
                    $directory = "./documenten";
                    $files = scandir($directory);
                    
                    foreach ($files as $file) {
                        if (pathinfo($file, PATHINFO_EXTENSION) == "pdf") {
                            $filenameWithoutExtension = basename($file, ".pdf");
                            echo "<div class='pdf-container'>";
                            echo "<div class='pdf-title'>" . htmlspecialchars($filenameWithoutExtension) . "</div>";
                            echo "<object data='./documenten/$file' type='application/pdf' width='100%' height='100%' scrolling='no'></object>";
                            echo "<div class='pdf-overlay' onclick='window.open(\"document.php?file=$file\", \"_blank\");'></div>";
                            echo "</div>";
                        }
                    }
                ?>
       </div>
            </section>
    <script src="portfolio.js"></script>
</body>
</html>