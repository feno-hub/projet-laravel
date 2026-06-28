<x-auth-layout>

    <form action="{{ route('login') }}" method="post" class="auth-login">

        @csrf
        @method('POST')

        <h1 class="auth-login-title">se connecter</h1>

        <div class="auth-login-lien">
            <a href="{{ route('loginForm') }}" class="auth-login-lien-title1">connexion</a>
            <a href="{{ route('registerForm') }}" class="auth-login-lien-title2">inscription</a>
        </div>

        <div class="auth-login-parent">
            <input type="email" name="email" id="" placeholder="Email ..." class="auth-login-parent-input">
            <x-error-input name='email'></x-errot-input>
        </div>

        <div class="auth-login-parent">
            <input type="password" name="password" id="" placeholder="Password ..."
                class="auth-login-parent-input">
            <x-error-input name='password'></x-errot-input>
        </div>

        <button type="submit" class="auth-login-btn">se connecter</button>

    </form>

</x-auth-layout>
