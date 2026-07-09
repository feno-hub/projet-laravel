<x-auth-layout>

    <div class="auth-desc">
        <h1 class="auth-desc-title1">Créez votre compte gratuitement</h1>

        <div class="auth-desc-content">
            <h3 class="auth-desc-title2">Vous êtes un acheteur ?</h3>
            <p class="auth-desc-content-para">Découvrez une large sélection de produits proposés par des vendeurs
                vérifiés, comparez les offres, effectuez vos achats en toute confiance et bénéficiez d'un suivi complet
                de vos commandes.
            </p>
        </div>

        <div class="auth-desc-content">

            <h3 class="auth-desc-title2">Vous êtes un vendeur ?</h3>
            <p class="auth-desc-content-para">Rejoignez dès aujourd'hui notre communauté et participez à une nouvelle
                expérience du commerce en ligne. Ensemble, faisons grandir votre réussite.
            </p>

            <a href="{{ route('loginForm') }}" class="auth-desc-content-lien">Se connecter</a>

        </div>

    </div>

    <form action="{{ route('register') }}" method="post" class="auth-login" enctype="multipart/form-data">

        @csrf
        @method('POST')

        <h1 class="auth-login-title">s' inscrire</h1>

        <x-success-message key='success'></x-success-message>

        <div class="auth-login-parent">
            <label for="name" class="auth-login-parent-label">Entrer votre nom</label>
            <input type="text" name="name" id="" placeholder="Nom complet ..."
                class="auth-login-parent-input">
            <x-error-input name='name'></x-error-input>
        </div>

        <div class="auth-login-parent">
            <label for="email" class="auth-login-parent-label">Entrer votre email</label>
            <input type="email" name="email" id="" placeholder="Email ..." class="auth-login-parent-input">
            <x-error-input name='email'></x-error-input>
        </div>

        <div class="auth-login-parent">
            <label for="role" class="auth-login-parent-label">Séléctionner votre post</label>
            <select name="role" id="" class="auth-login-parent-input">
                <option value="">Séléctionner votre poste</option>
                <option value="vendeur" class="auth-login-parent-input-option">vendeur</option>
                <option value="client" class="auth-login-parent-input-option">client</option>
                <option value="livreur" class="auth-login-parent-input-option">livreur</option>
            </select>
            <x-error-input name='role'></x-error-input>
        </div>

        <div class="auth-login-parent">
            <label for="image" class="auth-login-parent-label">Séléctionner votre image</label>
            <input type="file" name="image" id="" class="auth-login-parent-input">
            <x-error-input name='image'></x-error-input>
        </div>

        <div class="auth-login-parent">
            <label for="password" class="auth-login-parent-label">Entrer votre code</label>
            <input type="password" name="password" id="" placeholder="Mot de passe ..."
                class="auth-login-parent-input">
            <x-error-input name='password'></x-error-input>
        </div>

        <div class="auth-login-parent">
            <label for="password_confirmation" class="auth-login-parent-label">Confirmer votre code</label>
            <input type="password" name="password_confirmation" id=""
                placeholder="Confirmation mot de passe ..." class="auth-login-parent-input">
            {{-- <span>Lorem ipsum dolor sit amet</span> --}}
        </div>

        <button type="submit" class="auth-login-btn">s' inscrire</button>

    </form>

</x-auth-layout>
