<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="/styles/navbar.css" />
    <link rel="stylesheet" href="/styles/html.css" />
    <link rel="stylesheet" href="/styles/content.css" />
    <link rel="stylesheet" href="/styles/container.css">
    <link rel="stylesheet" href="/styles/fonts.css" />
    <link rel="stylesheet" href="/styles/style.css" />
    <link rel="stylesheet" href="/styles/color.css" />
    <link rel="stylesheet" href="https://unpkg.com/chota@latest">
    <title>Home</title>
</head>

<body>
    <header class="parallax-header">
        <?php include "app/view/topnavbar.php"; ?>
    </header>
    <div class="header-spacer"></div>
    <main>

        <section class="img-cover parallax">
            <article class="caption-box">
                <section class="caption">
                    <h1>Aul Goodman</h1>
                    <p>A Software Engineer student in a vocational highschool. Currently learning OOP and MVC in PHP.</p>
                </section>
                <section class="caption-image">
                    <img class="img-override" width="128px" height="128px" src="images/avatar.png" alt="" srcset="">
                </section>
            </article>
        </section>

        <section class="container-flex bg-dark">
            <section class="top">
                <section class="container-flex column main-column h2">
                    <section id="projects" class="bg-main section-whoami">
                        <article class="section">
                            <h2>My Projects</h2>
                            <ul>
                                <li>SNAKE!</li>
                                <dd>I made a snake game in javascript. Play it <a href="snake/snake.html">here!</a></dd>
                                <li>Data logging</li>
                            </ul>
                        </article>
                    </section>
                    <hr class="m-0">
                    <section id="interests" class="bg-main section-whoami">
                        <article class="section">
                            <h2>My interests</h2>
                            <p>I'm interested in games </p>
                        </article>
                    </section>
                    <hr class="m-0">
                    <section id="didyouknow" class="bg-main section-whoami">
                        <article class="section">
                            <h2>Did you know?</h2>
                            <ol>
                                <li>Did you know that the CIA glows in the dark? Terry Davis says they do. Drive them over.</li>
                                <li>Microsoft watches over people. Uninstall your Windows and use Linux instead.</li>
                                <li>What rich people wants is to have sex with their own children</li>
                            </ol>
                        </article>
                    </section>
                </section>
            </section>

            <aside class="container-sidebar container-flex top background-other h3">
                <section class="column content-sidebar">

                    <section>
                        <h3>I am the imposter</h3>
                        <ol>
                            <li>I</li>
                            <li>AM</li>
                            <li>THE</li>
                            <li>IMPOSTOR</li>
                        </ol>
                    </section>
                    <section>
                        <h3>Please ignore the above message.</h3>
                        <p>I am actually sane.</p>
                        <p>I am genuinely myself.</p>
                    </section>

                </section>
            </aside>
        </section>

    </main>

    <footer>
    <?php include "app/view/footer.php";?>
    </footer>
</body>

</html>