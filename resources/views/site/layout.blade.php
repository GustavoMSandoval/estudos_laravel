<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
  <ul id='dropdown1' class='dropdown-content'>
    <li><a href="#!">one</a></li>
    <li><a href="#!">two</a></li>
    <li class="divider" tabindex="-1"></li>
    <li><a href="#!">three</a></li>
    <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
    <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
  </ul>


    <nav class="black">
        <div class="nav-wrapper container">
          <a href="#" class="brand-logo center">Logo</a>
          <ul id="nav-mobile" class="left">
            <li><a href="">Home</a></li>
            <li><a href="" class="dropdown-trigger" data-target='dropdown1'>Categorias</a></li>
            <li><a href="">Carrinho</a></li>

          </ul>
        </div>
    </nav>
            

    @yield('conteudo')


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems, options);
    });
    </script>
    

</body>
</html>