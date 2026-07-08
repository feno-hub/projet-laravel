<div>
    <h1>bienvenue {{ Auth::user()->name }} </h1>
    <a href="{{ route('loginForm') }}">
        <button>se connecter</button>
    </a>
    <a href="{{ route('registerForm') }}">
        <button>s' inscrire</button>
    </a>
</div>
