<x-auth-layout>

    <form action="{{ route('register') }}" method="post" class="auth-login" enctype="multipart/form-data">

        @csrf
        @method('POST')

        <h1 class="auth-login-title">s' inscrire</h1>

        
        <div class="auth-login-lien">
            <a href="{{ route('loginForm') }}" class="auth-login-lien-title2">connexion</a>
            <a href="{{ route('registerForm') }}" class="auth-login-lien-title1">inscription</a>
        </div>
        
        <x-success-message key='success'></x-success-message>
        
        <div class="auth-login-parent">
            <input type="text" name="name" id="" placeholder="Nom complet ..."
                class="auth-login-parent-input">
            <x-error-input name='name'></x-error-input>
        </div>

        <div class="auth-login-parent">
            <input type="email" name="email" id="" placeholder="Email ..." class="auth-login-parent-input">
            <x-error-input name='email'></x-error-input>
        </div>

        <div class="auth-login-parent">
            <select name="role" id="" class="auth-login-parent-input">
                <option value="">Séléctionner votre rôle</option>
                <option value="vendeur" class="auth-login-parent-input-option">vendeur</option>
                <option value="client" class="auth-login-parent-input-option">client</option>
            </select>
            <x-error-input name='role'></x-error-input>
        </div>
        
        <div class="auth-login-parent">
            <input type="file" name="image" id="" class="auth-login-parent-input">
            <x-error-input name='image'></x-error-input>
        </div>

        <div class="auth-login-parent">
            <input type="password" name="password" id="" placeholder="Mot de passe ..."
                class="auth-login-parent-input">
            <x-error-input name='password'></x-error-input>
        </div>

        <div class="auth-login-parent">
            <input type="password" name="password_confirmation" id=""
                placeholder="Confirmation mot de passe ..." class="auth-login-parent-input">
            {{-- <span>Lorem ipsum dolor sit amet</span> --}}
        </div>

        <button type="submit" class="auth-login-btn">s' inscrire</button>

    </form>

</x-auth-layout>
