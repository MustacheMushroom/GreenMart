<html lang="en" xmlns:style="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Green Mart!</title>
    <link rel="stylesheet" type="text/css" href="css/p1.css" />
    <meta name="author" content="Kyle Taylor-Bracken">
</head>

<body>
<!-- Logo and Search bar-->
<div class="topnav">
    <ul>
        <li><img src="images/logo_new.png" alt="Green Mart logo" id="logo"></li>
        <li style="float:right">
            <div class="search-bar">
                <form actio="/action_page.php">
                <input type="text" placeholder="Search for a product" name="search">
                <button type="submit">Submit</button>
                </form>
            </div>
        </li>
    </ul>
</div>

<!-- Main navigation bar with Aisles, random buttons, login, sign up, checkout-->
<div class="mainnav">
    <ul>
        <li><a href="aisles/p2.html">Aisles</a></li> <!-- TODO: Implement dropdown menu -->
        <li><a href="deals/">Deals</a></li>
        <li><a href="recipes/">Recipes</a></li>
        <li><a href="blog/">Blog</a></li>

        <li style="float:right"><a href="cart/">Shopping Cart (0)</a></li>
        <li style="float:right"><a href="signup/">Sign Up</a></li>
        <li style="float:right"><a href="login/">Log In</a></li>


    </ul>
</div>

    <div class="main">
        <h2><a href="deals/">Deals of the week</a></h2>

        <div class="grid-container">
            <div class="grid-item">
                <a href="aisles/fruit-veg/banana.html"><img src="images/fruit-veg/banana.png" alt="Banana"></a><br />
                <a href="aisles/fruit-veg/banana.html"> Banana </a><br /> <br />
                <span class="original-price">$0.89/lb</span><br />
                <span class="sale-price">$0.60/lb!!</span><br />
            </div>
            <div class="grid-item">
                <a href="aisles/meat/salmon-filet.html"><img src="images/meat/salmon.png" alt="Banana"></a><br />
                <a href="aisles/meat/salmon-filet.html">Salmon Filet</a> <br /> <br />
                <span class="original-price">$10.99/lb</span><br />
                <span class="sale-price">$8.50/lb!!</span><br />
            </div>
            <div class="grid-item">
                <a href="aisles/snacks/kombucha.html"><img src="images/snacks/kombucha.png" alt="Banana"></a><br />
                <a href="aisles/snacks/kombucha.html">GT's Kombucha (Assorted flavours)</a><br /> <br />
                <span class="original-price">$4.79/ea</span><br />
                <span class="sale-price">$3.00/ea!!</span><br />
            </div>

        </div>

        <h2>About us</h2>
        <p>
            Green Mart was founded with the community and the Earth in mind. We strive to sell foods that will not only contribute
            to health of our customers, but help our world too. Nunc lacinia eu odio eget tristique. Nullam gravida condimentum orci,
            eget tristique urna bibendum scelerisque. Aenean id nibh nec lorem bibendum blandit
            eget vitae nisl. Morbi porta pretium neque, varius dignissim libero sagittis et. Quisque bibendum
            commodo tempor. Sed et vestibulum odio. Sed eget nunc magna. Quisque dignissim, purus nec vulputate tempor, ligula
            orci ullamcorper libero, in auctor est urna eu nibh. Nam quis blandit mi. Praesent orci dolor, semper id molestie
            sed, sollicitudin nec mauris. </p>
            <p>Integer mattis, mauris eget molestie auctor, tortor felis porttitor lacus, sed aliquet
            erat felis in tellus. Ut eget dui id ante egestas pellentesque vitae eu erat. Morbi vehicula tortor vitae ultricies
            accumsan. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum
            ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec vitae magna quis neque ultrices
            bibendum. Nam vulputate bibendum vestibulum. Integer diam quam, eleifend eget commodo ut, eleifend vitae lorem.
            Suspendisse maximus facilisis ipsum.</p>


        <h2>Our history</h2>
        <p>
            Back in 1982, Green Mart was just our backyard vegetable garden. As a family we decided to try and grow as much
            of our own food as we could. We did well and managed to harvest so much that we didn't know what to do with it!
            We started preserving some of it for when winter comes but even then what were we gonna do with 12 jars of pickled
            beets? That's when our business began, though it wasn't official of any sorts. We sold our extra food to our neighbors
            who we knew would love to support us and at the same time have homegrown food. Curabitur dapibus
            commodo ante sit amet hendrerit. Donec vehicula, augue non fringilla ullamcorper, leo arcu porttitor dolor, ut
            auctor enim enim et elit. Pellentesque sit amet congue mauris. Nam in euismod neque, non pulvinar purus.
        </p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Nunc lacinia eu odio eget tristique. Nullam gravida condimentum orci,
            eget tristique urna bibendum scelerisque. Aenean id nibh nec lorem bibendum blandit
            eget vitae nisl. Morbi porta pretium neque, varius dignissim libero sagittis et. Quisque bibendum
            commodo tempor. Suspendisse laoreet a enim vitae blandit. Donec viverra pharetra mollis. Curabitur dapibus
            commodo ante sit amet hendrerit. Donec vehicula, augue non fringilla ullamcorper, leo arcu porttitor dolor, ut
            auctor enim enim et elit. Pellentesque sit amet congue mauris. Nam in euismod neque, non pulvinar purus.
        </p>

        <h2>The community</h2>
        <p>Aenean sed elit sed ante pharetra tincidunt. Sed egestas lectus sit amet hendrerit luctus. Ut elit velit, vulputate porttitor mauris in, volutpat vestibulum mi. Cras vehicula eros dolor, a laoreet mi mattis quis. Suspendisse sit amet placerat mauris, in fringilla velit. Duis in justo et mi consequat convallis a et erat. Ut tincidunt mauris urna, at convallis dolor sodales ac. Nullam egestas vulputate velit, et eleifend massa sagittis sed. Maecenas congue cursus diam tempor ultrices. Ut pellentesque vel mi ut finibus. Aliquam vestibulum maximus erat. Suspendisse dictum a erat et elementum.</p>
        <p>Nullam volutpat risus eget lacus feugiat vestibulum. Phasellus elementum dolor leo, pretium facilisis velit dapibus ultricies. In lacinia bibendum euismod. In vestibulum elit et sodales interdum. Sed aliquet massa ligula, quis tempus lectus sollicitudin id. Donec justo nunc, ultrices ac felis quis, eleifend placerat dui. Aliquam ante elit, faucibus sit amet vulputate a, efficitur quis ex. Nulla nunc lorem, sodales ut eleifend vitae, aliquet vitae nibh. Ut eget sodales nulla, et sagittis dolor. Curabitur et lacus lacus. Curabitur dapibus scelerisque magna, ut condimentum tellus vehicula sed. Vivamus at blandit orci. Donec non ultrices nulla, quis venenatis justo. Nulla sit amet lobortis magna. Donec non auctor nisl.</p>
        <p>Curabitur metus massa, lobortis sed dui nec, hendrerit viverra ante. Phasellus interdum nunc velit, sed interdum diam congue a. Vivamus at magna ut dui ornare laoreet sed a justo. Vivamus porttitor, dui a rutrum vulputate, ipsum eros luctus neque, at fringilla risus tortor quis dui. Pellentesque sollicitudin pharetra arcu. Cras tincidunt, arcu id consequat blandit, erat metus accumsan lacus, id varius ipsum tellus facilisis eros. Praesent efficitur sagittis arcu, vel viverra nisl consequat ut. Aliquam a sodales turpis.</p>

</div>
</body>

<footer>
    <ul>
        <li>Copyright &copy 2020 Green Mart Inc. All Rights Reserved.</li>
        <li>Created my free logo at <a href="https://logomakr.com/">Logomakr.com</a></li>

    </ul>
</footer>

</html>