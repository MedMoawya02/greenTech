<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Créer un compte</title>
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
            box-shadow: 0 25px 50px rgba(0,0,0,.2);
            padding: 40px;
            width: 100%;
            max-width: 450px;
        }

        .auth-card h3 {
            font-weight: 700;
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
    </style>
</head>
<body>

<div class="auth-card">

    <div class="logo">A</div>

    <h3 class="text-center mb-4">Créer un compte</h3>

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

    <form method="POST" action="{{ route('registerCreate') }}">
        @method('post')
        @csrf

        <div class="mb-3">
            <label class="form-label">Nom complet</label>
            <input type="text"
                   name="name"
                   class="form-control"
                   value="{{ old('name') }}"
                   placeholder="Votre nom"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Adresse email</label>
            <input type="email"
                   name="email"
                   class="form-control"
                   value="{{ old('email') }}"
                   placeholder="email@example.com"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Mot de passe</label>
            <input type="password"
                   name="password"
                   class="form-control"
                   placeholder="********"
                   required>
        </div>

        <div class="mb-4">
            <label class="form-label">Confirmer le mot de passe</label>
            <input type="password"
                   name="password_confirmation"
                   class="form-control"
                   placeholder="********"
                   required>
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-primary">
                Créer mon compte
            </button>
        </div>
    </form>

    <div class="auth-footer text-center mt-4">
        <span class="text-muted">Déjà un compte ?</span>
        <a href="{{ route('loginForm') }}">Se connecter</a>
    </div>

</div>

</body>
</html>
