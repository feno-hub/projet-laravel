<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/styles/main.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <div class="client">

        <div class="client-container">

            <aside class="client-container-asideone">

                <a href="">
                    <div class="client-container-asideone-image">
                        <h1 class="client-container-asideone-image-img"> {{ ucfirst(Auth::user()->name)['0'] }} </h1>
                    </div>
                </a>

                <h2 class="client-container-asideone-name"> {{ Auth::user()->name }} </h2>

                <ul>
                    <li>
                        <a href="">
                            <i class="">🏛</i>
                            <span>acceuil</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="">🏛</i>
                            <span>acceuil</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="">🏛</i>
                            <span>acceuil</span>
                        </a>
                    </li>
                    <li>
                        <form action="{{ route('user.logout') }}" method="post">
                            @csrf
                            @method('POST')
                            <button type="submit">déconnexion</button>
                        </form>
                    </li>
                </ul>

            </aside>

            {{ $slot }}

            <aside class="client-container-asideto">

                <h1 class="client-container-asideto-title">Notfication</h1>

                <div class="client-container-asideto-notif">
                    <span class="client-container-asideto-notif-icon">
                        <button type="submit">
                            <i class="">❌</i>
                        </button>
                    </span>
                    <div class="client-container-asideto-notif-card">
                        <h2 class="client-container-asideto-notif-card-profile">f</h2>
                        <strong class="client-container-asideto-notif-card-name">feno rafidinirina</strong>
                    </div>
                    <p class="client-container-asideto-notif-para">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.
                        Natus, rem.</p>
                </div>
                <div class="client-container-asideto-notif">
                    <span class="client-container-asideto-notif-icon">
                        <button type="submit">
                            <i class="">❌</i>
                        </button>
                    </span>
                    <div class="client-container-asideto-notif-card">
                        <h2 class="client-container-asideto-notif-card-profile">t</h2>
                        <strong class="client-container-asideto-notif-card-name">tsiaro kaloina</strong>
                    </div>
                    <p class="client-container-asideto-notif-para">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.
                        Natus, rem.</p>
                </div>
                <div class="client-container-asideto-notif">
                    <span class="client-container-asideto-notif-icon">
                        <button type="submit">
                            <i class="">❌</i>
                        </button>
                    </span>
                    <div class="client-container-asideto-notif-card">
                        <h2 class="client-container-asideto-notif-card-profile">e</h2>
                        <strong class="client-container-asideto-notif-card-name">elodie nandrianina</strong>
                    </div>
                    <p class="client-container-asideto-notif-para">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.
                        Natus, rem.</p>
                </div>
                <div class="client-container-asideto-notif">
                    <span class="client-container-asideto-notif-icon">
                        <button type="submit">
                            <i class="">❌</i>
                        </button>
                    </span>
                    <div class="client-container-asideto-notif-card">
                        <h2 class="client-container-asideto-notif-card-profile">a</h2>
                        <strong class="client-container-asideto-notif-card-name">administrateur</strong>
                    </div>
                    <p class="client-container-asideto-notif-para">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.
                        Natus, rem.</p>
                </div>
            </aside>

        </div>
    </div>

</body>

</html>
