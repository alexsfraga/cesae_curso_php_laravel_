<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to the most extraordinay hotel in Bosten Massachusetts">
    <meta name="keywords" content="hote,porto hotel,portugal hotel">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Hotel Porto | Welcome</title>
</head>
<body>
    <header>
        <nav id="navbar">
            <div class="container">
                <h1 class="logo"><a href="/">HOTEL PORTO</a></h1>
                <ul>
                    <li><a href="/" class="current">Home</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="contact">Contact</a></li>
                </ul>
            </div>
        </nav>

            @yield('content')

        <footer id="main-footer">
            <p>Hotel Porto &copy; 2020, All Rights Reserved</p>
            <p>Design by Brad Traversy</p>
        </footer>
</body>
</html>
