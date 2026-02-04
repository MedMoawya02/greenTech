<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Créer un compte – GreenPlants</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #14532d, #22c55e);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', system-ui, sans-serif;
        }

        .auth-card {
            background: #f0fdf4;
            border-radius: 24px;
            box-shadow: 0 30px 70px rgba(0,0,0,.25);
            padding: 42px;
            width: 100%;
            max-width: 460px;
            border: 1px solid #bbf7d0;
        }

        .logo {
            width: 78px;
            height: 78px;
            background: linear-gradient(135deg, #22c55e, #15803d);
            color: #ecfdf5;
            font-size: 34px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 18px;
            box-shadow: 0 14px 30px rgba(34,197,94,.6);
        }

        h3 {
            font-weight: 800;
            color: #14532d;
        }

        .subtitle {
            font-size: 14px;
            color: #166534;
        }

        .form-label {
            font-weight: 600;
            font-size: 14px;
            color: #166534;
        }

        .form-control {
            height: 52px;
            border-radius: 14px;
            border: 1px solid #bbf7d0;
            padding-left: 16px;
            background: #ffffff;
        }

        .form-control:focus {
            border-color: #22c55e;
            box-shadow: 0 0 0 0.2rem rgba(34,197,94,.25);
        }

        .btn-primary {
            height: 54px;
            border-radius: 14px;
            background: linear-gradient(135deg, #22c55e, #15803d);
            border: none;
            font-weight: 600;
            letter-spacing: .4px;
        }

        .btn-primary:hover {
            opacity: .95;
        }

        .auth-footer a {
            color: #15803d;
            font-weight: 600;
            text-decoration: none;
        }

        .auth-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="auth-card">

    <div class="logo">🌿</div>

    <h3 class="text-center mb-1">Créer un compte</h3>
    <p class="text-center subtitle mb-4">
        Gérez et découvrez vos plantes facilement
    </p>

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
        @csrf

        <div class="mb-3">
            <label class="form-label">Nom complet</label>
            <input type="text" name="name" class="form-control"
                   value="{{ old('name') }}" placeholder="Votre nom" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Adresse email</label>
            <input type="email" name="email" class="form-control"
                   value="{{ old('email') }}" placeholder="email@example.com" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Mot de passe</label>
            <input type="password" name="password"
                   class="form-control" placeholder="••••••••" required>
        </div>

        <div class="mb-4">
            <label class="form-label">Confirmer le mot de passe</label>
            <input type="password" name="password_confirmation"
                   class="form-control" placeholder="••••••••" required>
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-primary">
                🌱 Créer mon compte
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
