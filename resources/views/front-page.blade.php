<!DOCTYPE HTML>
<!--
 Phantom by HTML5 UP
 html5up.net | @ajlkn
 Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>{{ config('app.name') . ' - Portada' }}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
</head>

<body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header">
            <div class="inner">

                <!-- Logo -->
                <a href="index.html" class="logo">
                    <span class="symbol"><img src="images/logo.svg" alt="" /></span><span
                        class="title">Phantom</span>
                </a>

                <!-- Nav -->
                <nav>
                    <ul>
                        <li><a href="#menu">Menu</a></li>
                    </ul>
                </nav>

            </div>
        </header>

        <!-- Menu -->
        <nav id="menu">
            <h2>Menu</h2>
            <form action="/" method="get">
                <input type="search" name="search" id="search" placeholder="buscar">
                <input type="submit" value="Buscar" class="">
            </form>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="generic.html">Ipsum veroeros</a></li>
                <li><a href="generic.html">Tempus etiam</a></li>
                <li><a href="generic.html">Consequat dolor</a></li>
                <li><a href="elements.html">Elements</a></li>
            </ul>
        </nav>

        <!-- Main -->
        <div id="main">
            <div class="inner">
                <header>
                    <h1>{{ config('app.name') }}</h1>
                    <p>Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod sit amet nisi euismod sed cursus
                        arcu elementum ipsum arcu vivamus quis venenatis orci lorem ipsum et magna feugiat veroeros
                        aliquam. Lorem ipsum dolor sit amet nullam dolore.</p>
                </header>
                <section class="tiles">
                    @foreach ($posts as $post)
                        <article class="style1">
                            <span class="image">
                                <img src="images/pic01.jpg" alt="" />
                            </span>
                            <a href="/post/{{$post->slug}}">
                                <h2>{{$post->title}}</h2>
                                <div class="content">
                                    <p>{{$post->excerpt}}</p>
                                </div>
                            </a>
                        </article>
                    @endforeach
                </section>
            </div>
        </div>

        <!-- Footer -->
        <footer id="footer">
            <div class="inner">
                <section>
                    <h2>Get in touch</h2>
                    <form method="post" action="#">
                        <div class="fields">
                            <div class="field half">
                                <input type="text" name="name" id="name" placeholder="Name" />
                            </div>
                            <div class="field half">
                                <input type="email" name="email" id="email" placeholder="Email" />
                            </div>
                            <div class="field">
                                <textarea name="message" id="message" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <ul class="actions">
                            <li><input type="submit" value="Send" class="primary" /></li>
                        </ul>
                    </form>
                </section>
                <section>
                    <h2>Follow</h2>
                    <ul class="icons">
                        <li><a href="#" class="icon brands style2 fa-twitter"><span
                                    class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon brands style2 fa-facebook-f"><span
                                    class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon brands style2 fa-instagram"><span
                                    class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon brands style2 fa-dribbble"><span
                                    class="label">Dribbble</span></a></li>
                        <li><a href="#" class="icon brands style2 fa-github"><span
                                    class="label">GitHub</span></a></li>
                        <li><a href="#" class="icon brands style2 fa-500px"><span class="label">500px</span></a>
                        </li>
                        <li><a href="#" class="icon solid style2 fa-phone"><span class="label">Phone</span></a>
                        </li>
                        <li><a href="#" class="icon solid style2 fa-envelope"><span
                                    class="label">Email</span></a></li>
                    </ul>
                </section>
                <ul class="copyright">
                    <li>&copy; Untitled. All rights reserved</li>
                    <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                </ul>
            </div>
        </footer>

    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
