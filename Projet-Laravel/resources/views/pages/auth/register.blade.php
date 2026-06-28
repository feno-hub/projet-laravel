<x-auth-layout>

    <form action="" method="post" class="auth-login">

        <h1 class="auth-login-title">s' inscrire</h1>

        <div class="auth-login-lien">
            <a href="{{ route('loginForm') }}" class="auth-login-lien-title2">connexion</a>
            <a href="{{ route('registerForm') }}" class="auth-login-lien-title1">inscription</a>
        </div>

        <div class="auth-login-parent">
            <input type="text" name="name" id="" placeholder="Nom complet ..."
                class="auth-login-parent-input">
            {{-- <span>Lorem ipsum dolor sit amet</span> --}}
        </div>

        <div class="auth-login-parent">
            <input type="email" name="email" id="" placeholder="Email ..." class="auth-login-parent-input">
            {{-- <span>Lorem ipsum dolor sit amet</span> --}}
        </div>

        <div class="auth-login-parent">
            <input type="password" name="password" id="" placeholder="Mot de passe ..."
                class="auth-login-parent-input">
            {{-- <span>Lorem ipsum dolor sit amet</span> --}}
        </div>

        <div class="auth-login-parent">
            <input type="password" name="password_confirmation" id=""
                placeholder="Confirmation mot de passe ..." class="auth-login-parent-input">
            {{-- <span>Lorem ipsum dolor sit amet</span> --}}
        </div>

        <button type="submit" class="auth-login-btn">s' inscrire</button>

    </form>

</x-auth-layout>
