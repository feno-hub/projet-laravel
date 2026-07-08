<x-auth-layout>

    <div class="auth-desc">
        <h1 class="auth-desc-title1">Bienvenue sur notre Marketplace</h1>

        <h3 class="auth-desc-title2">Connectez-vous à votre espace</h3>

        <div class="auth-desc-content">
            <p class="auth-desc-content-para">Accédez à une plateforme conçue pour simplifier vos achats et développer votre activité commerciale.</p>
        </div>

        <div class="auth-desc-content">

            <p class="auth-desc-content-para">Que vous soyez acheteur ou vendeur, retrouvez un espace sécurisé vous permettant de gérer votre compte, suivre vos commandes, communiquer avec les vendeurs et profiter d'une expérience fluide et performante.
            </p>

            <img src="" class="auth-desc-content-img">

            <a href="{{ route('registerForm') }}" class="auth-desc-content-lien">S' inscrire</a>

        </div>

    </div>

    <form action="{{ route('login') }}" method="post" class="auth-login">

        @csrf
        @method('POST')

        <h1 class="auth-login-title">se connecter</h1>

        <div class="auth-login-parent">
            <label for="email" class="auth-login-parent-label">Entrer votre email</label>
            <input type="email" name="email" id="" placeholder="Email ..." class="auth-login-parent-input">
            <x-error-input name='email'></x-errot-input>
        </div>

        <div class="auth-login-parent">
            <label for="password" class="auth-login-parent-label">Entrer votre code</label>
            <input type="password" name="password" id="" placeholder="Password ..."
                class="auth-login-parent-input">
            <x-error-input name='password'></x-errot-input>
        </div>

        <button type="submit" class="auth-login-btn">se connecter</button>

    </form>

</x-auth-layout>
