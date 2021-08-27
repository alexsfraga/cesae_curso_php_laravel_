<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to the most extraordinay hotel in Bosten Massachusetts">
    <meta name="keywords" content="hote,porto hotel,portugal hotel">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Escola Online | Welcome</title>
</head>
<body>
    <header>
        <nav id="navbar">
            <div class="container">
                <h1 class="logo"><a href="index">ESCOLA ONLINE</a></h1>
                <ul>
                    <li><a href="/" class="current">Home</a></li>
                    <li><a href="courses">Courses</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="contact">Contact</a></li>
                </ul>
            </div>
        </nav>
        <div id="showcase">
            <div class="container">
                <div class="showcase-content">
                    <h1>Learn With Us</h1>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, nihil dignissimos aliquid fuga adipisci harum.</p>
                    <a href="courses" class="btn">Our Courses</a>
                    <a href="about" class="btn">About Our School</a>
                </div>
            </div>
        </div>
    </header>

    @yield('content')


    <footer id="main-footer">
        <p>Escola Online &copy; 2020, All Rights Reserved</p>
        <p>Design by Brad Traversy</p>
    </footer>
</body>
</html>
