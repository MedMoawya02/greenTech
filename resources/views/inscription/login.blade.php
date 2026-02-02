<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', sans-serif;
        }

        .auth-card {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, .2);
            padding: 40px;
            width: 100%;
            max-width: 420px;
        }

        .logo {
            width: 60px;
            height: 60px;
            background: #0d6efd;
            color: #fff;
            font-size: 28px;
            font-weight: bold;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }

        .form-control {
            height: 48px;
            border-radius: 10px;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #0d6efd;
        }

        .btn-primary {
            height: 48px;
            border-radius: 10px;
            font-weight: 600;
        }

        .auth-footer a {
            text-decoration: none;
            font-weight: 600;
        }
    </style>
</head>

<body>

    <div class="auth-card">

        <div class="logo">A</div>

        <h3 class="text-center mb-4 fw-bold">Connexion</h3>

        {{-- Erreurs --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Status --}}
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @method('post')
            @csrf

            <div class="mb-3">
                <label class="form-label">Adresse email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                    placeholder="email@example.com" required autofocus>
            </div>

            <div class="mb-3">
                <label class="form-label">Mot de passe</label>
                <input type="password" name="password" class="form-control" placeholder="********" required>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                    <label class="form-check-label" for="remember">
                        Se souvenir de moi
                    </label>
                </div>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-decoration-none">
                        Mot de passe oublié ?
                    </a>
                @endif
            </div>



            <div class="d-grid">
                <button type="submit" class="btn btn-primary">
                    Se connecter
                </button>
            </div>
        </form>

        <div class="auth-footer text-center mt-4">
            <span class="text-muted">Pas encore de compte ?</span>
            <a href="{{ route('register') }}">Créer un compte</a>
        </div>

    </div>

</body>

</html>