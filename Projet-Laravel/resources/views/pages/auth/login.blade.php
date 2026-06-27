<x-auth-layout>

    <form action="" method="post" class="auth-login">
    
        <h1 class="auth-login-title">se connecter</h1>
        
        <div class="auth-login-lien">
            <a href="" class="auth-login-lien-title1">connexion</a>
            <a href="{{ route('registerForm') }}" class="auth-login-lien-title2">inscription</a>
        </div>

        <div class="auth-login-parent">
            <label for="" class="auth-login-parent-label">email</label>
            <input type="email" name="email" id="" placeholder="Email ..."
                class="auth-login-parent-input">
        </div>

        <div class="auth-login-parent">
            <label for="" class="auth-login-parent-label">mot de passe</label>
            <input type="password" name="password" id="" placeholder="Password ..."
                class="auth-login-parent-input">
        </div>

        <button type="submit" class="auth-login-btn">se connecter</button>

    </form>

</x-auth-layout>
