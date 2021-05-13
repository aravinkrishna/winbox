<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winbox demo</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <nav>
            <ul>
                <li id="aboutlink">/about</li>
                <li id="contactlink">/contact</li>
            </ul>
        </nav>
        <div class="mainContent">
            <h1>Winbox Demo:$<span class="blinker">|</span></h1>
            <h3>find me online:</h3>
            <ul class="socials">
                <li>
                    <a href="/" target="_blank">facebook</a>
                </li>
                <li>
                    <a href="/" target="_blank">twitter</a>
                </li>
                <li>
                    <a href="/" target="_blank">instagram</a>
                </li>
                <li>
                    <a href="/" target="_blank">github</a>
                </li>
            </ul>
        </div>
        <div class="hidden">
            <div id="aboutContents">
                <h2>About me:$<span class="blinker">|</span></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident minus maxime distinctio error
                    adipisci aliquam reiciendis alias blanditiis possimus sunt.</p>
            </div>
            <div id="contactContents">
                <h2>Contact me:$<span class="blinker">|</span></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident minus maxime distinctio error
                    adipisci aliquam reiciendis alias blanditiis possimus sunt.</p>
                <p class="contactDetails">
                Mobile: 999-999-9999 <br>
                email: <a href="mailto:abc@mail.local" target="_blank">abc@mail.local</a>
                </p>
            </div>
        </div>
    </div>

    <script src="js/winbox.bundle.js"></script>
    <script src="js/script.js"></script>
</body>

</html>