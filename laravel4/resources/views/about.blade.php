<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>Homepage</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contacts">Contactos</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container" style="margin-top: 50px;">
            <p>
                <h1>Representantes :               </h1>
                <ul>
                        @foreach ($representantes as $rep )
                            <li> {{$rep}} </li>
                        @endforeach
                </ul>
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Non enim praesent elementum facilisis leo vel fringilla est. Ante metus dictum at tempor. Nisi vitae suscipit tellus mauris
                a diam maecenas sed enim. Mi tempus imperdiet nulla malesuada pellentesque. At quis risus sed vulputate odio ut. Urna nunc
                id cursus metus aliquam eleifend. Blandit libero volutpat sed cras ornare arcu dui vivamus arcu. Congue nisi vitae suscipit
                tellus mauris a. Nam aliquam sem et tortor consequat id porta. Tortor id aliquet lectus proin nibh. Dui id ornare arcu odio
                ut sem nulla pharetra. Blandit libero volutpat sed cras ornare arcu dui. Erat nam at lectus urna duis convallis convallis
                tellus. Consectetur lorem donec massa sapien. Dictum varius duis at consectetur lorem donec. Fermentum iaculis eu non diam
                phasellus. Tellus cras adipiscing enim eu turpis egestas pretium. Erat velit scelerisque in dictum non consectetur a. Mattis
                nunc sed blandit libero volutpat sed.
            </p>
            <p>
                Tortor condimentum lacinia quis vel eros. Risus in hendrerit gravida rutrum quisque non. Porttitor lacus luctus accumsan
                tortor. Aliquet sagittis id consectetur purus ut. Adipiscing diam donec adipiscing tristique risus nec feugiat in. Vitae
                aliquet nec ullamcorper sit amet risus nullam eget. Et magnis dis parturient montes nascetur ridiculus mus mauris vitae.
                Interdum varius sit amet mattis vulputate. Urna duis convallis convallis tellus id interdum velit. Quisque sagittis purus
                sit amet volutpat consequat mauris nunc congue.
            </p>
            <p>
                Enim nunc faucibus a pellentesque sit amet porttitor eget dolor. Sit amet tellus cras adipiscing enim eu. Feugiat scelerisque
                varius morbi enim nunc. Pulvinar neque laoreet suspendisse interdum consectetur libero id faucibus. Metus aliquam eleifend mi
                in nulla posuere sollicitudin. Molestie ac feugiat sed lectus vestibulum mattis. Blandit massa enim nec dui nunc mattis enim
                ut tellus. Lectus mauris ultrices eros in cursus turpis massa tincidunt dui. Auctor eu augue ut lectus arcu bibendum at varius
                vel. Condimentum id venenatis a condimentum vitae sapien. Hendrerit gravida rutrum quisque non tellus orci ac auctor augue.
                Risus at ultrices mi tempus. Sagittis id consectetur purus ut faucibus pulvinar elementum. Aliquet enim tortor at auctor urna
                nunc id cursus. Pulvinar etiam non quam lacus suspendisse faucibus interdum posuere lorem.
            </p>
            <p>
                Mi in nulla posuere sollicitudin aliquam ultrices. At lectus urna duis convallis. Nibh nisl condimentum id venenatis a.
                Mauris in aliquam sem fringilla ut morbi. Diam phasellus vestibulum lorem sed risus ultricies tristique nulla. Vitae auctor
                eu augue ut lectus arcu bibendum. Viverra adipiscing at in tellus integer feugiat scelerisque varius morbi. Porta lorem
                mollis aliquam ut porttitor leo a diam sollicitudin. Ut consequat semper viverra nam libero justo laoreet sit amet. Massa
                sed elementum tempus egestas sed. Congue eu consequat ac felis donec et. Bibendum ut tristique et egestas quis ipsum suspendisse
                ultrices gravida.
            </p>
            <p>
                Posuere morbi leo urna molestie at elementum. Gravida dictum fusce ut placerat. Dignissim diam quis enim lobortis scelerisque
                fermentum dui. Pharetra diam sit amet nisl. Aliquam ultrices sagittis orci a scelerisque. Condimentum mattis pellentesque id
                nibh tortor id aliquet lectus. Sed arcu non odio euismod lacinia. Quis ipsum suspendisse ultrices gravida dictum fusce ut
                placerat orci. Adipiscing tristique risus nec feugiat in. Nulla facilisi nullam vehicula ipsum a arcu. Vivamus arcu felis
                bibendum ut. Proin fermentum leo vel orci. Mauris pellentesque pulvinar pellentesque habitant. Aenean et tortor at risus
                viverra adipiscing at in. Phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim. Sit amet massa vitae
                tortor condimentum lacinia quis vel. Urna et pharetra pharetra massa massa.
            </p>
        </div>
    </body>
</html>
