<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{BASE_URL}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Herramientas Biassoni</title>

</head>

<body class="body">
    <header>
        <div class="div-img">
            <img src="img/biassoni.png">
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="home">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Productos
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li>
                                    <a class="dropdown-item" href="articles">Todos</a>
                                </li>
                                {foreach $categories as $category}
                                    <li>
                                        <a class="dropdown-item" href="articles/{$category->id}">{$category->nombre_c}</a>
                                    </li>
                                {/foreach}
                            </ul>
                        </li>
                    </ul>
                    <a class="navbar-brand" href="categories">Categorias</a>
                </div>
                {if {!$email}}
                    <form action="login" method="POST" class="d-flex" role="search">
                        <input class="form-control me-2" placeholder="Usuario" name="email">
                        <input class="form-control me-2" placeholder="Contraseña" name="password">
                        <button class="btn btn-outline-success" type="submit">Login</button>
                    </form>
                {else}
                    <div><span class="span">{$email} ---></span></div>
                    <a class="mr-5" href="logout">Logout</a>
                {/if}
            </div>
        </nav>
    </header>
<div class="master">