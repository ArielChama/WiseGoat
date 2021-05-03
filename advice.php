<?php
    $urlAdvice = "https://api.adviceslip.com/advice";
    $advice = json_decode(file_get_contents($urlAdvice));

    $urlImage = "https://random.dog/woof.json";
    $image = json_decode(file_get_contents($urlImage));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisegoat</title>
    <link rel="stylesheet" href="css/advices.css">
</head>
<body>
    <header>
        <div class="head">
            <h1 class="title">Wise</h1>
            <h2 class="subtitle">Goat</h2>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="card">
                <div class="row">
                    <div class="col-text">
                        <h2 class="advice">
                            " <?php echo $advice->slip->advice; ?> "
                        </h2>
                        <h5 class="advice-author">- Goat</h5>
                    </div>
                    <div class="col-image">
                        <img src="<?php echo $image->url; ?>" alt="" class="image-goat-generated">
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>