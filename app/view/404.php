<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/styles/navbar.css" />
    <link rel="stylesheet" href="/styles/html.css" />
    <link rel="stylesheet" href="/styles/content.css" />
    <link rel="stylesheet" href="/styles/container.css">
    <link rel="stylesheet" href="/styles/fonts.css" />
    <link rel="stylesheet" href="/styles/style.css" />

    <title>Page Not Found</title>
</head>

<body>

    <header class="parallax-header">
        <?php include "app/view/topnavbar.php"; ?>
    </header>
    <div class="header-spacer"></div>
    <main>
        <section class="img-cover parallax">
            <article class="caption-box">
                <section class="caption h2">
                    <h2>Sorry, the page you're looking for isn't available.</h2>
                    <p>Instead, you've found team 404.</p>
                    <p>Return to <a href="/homepage">home.</a></p>
                </section>
            </article>
        </section>
        <section class="container-flex">
            <section>
            </section>
        </section>

    </main>

    <footer>
        <?php include "footer.php";?>
    </footer>

</body>

</html>