<x-auth-layout>

    <div class="auth-desc">
        <h1 class="auth-desc-title">connexion multi-vendeur</h1>

        <div class="auth-desc-content">

            <p class="auth-desc-content-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis explicabo
                perspiciatis, consequuntur nulla illo corporis soluta, quas voluptatum atque labore ut, repellat esse
                sapiente recusandae neque mollitia. Repudiandae, accusamus eius? Alias eveniet debitis consequatur sunt
                optio animi qui, quaerat inventore.
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
