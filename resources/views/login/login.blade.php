<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <title>@yield('titulo') Login </title>

    <style>
        body {
            display: flex;
            align-items: center;
            padding-bottom: 30px;
            background-color: #DFEDCA;
            padding-top: 30px;

            ;
        }

        .form-signin {
            max-width: 330px;
            padding: 15px;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: 3px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 12px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">

    <main class="form-signin w-120 m-auto">

        <form action="{{ route('post.login') }}" method="POST">
            {{-- @csrf é um token de segurança --}}
            @csrf
            <div class="text-center">

                <h1 class="h3 mb-3 fw-normal">Entrar</h1>
            </div>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword" >Senha</label>
            </div>



            <button class="w-100 btn btn-lg btn-primary" type="submit"> Entrar </button>

        </form>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
