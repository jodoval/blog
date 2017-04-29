<nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse ">
<div class="container">

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{{url('/')}}">Blog Laravel</a>
    <div class="collapse navbar-collapse" id="navbarNav">
     <ul class="navbar-nav mr-auto">     {{--el mr-auto hace que podamos situar cosas a la derecha --}}
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/')}}">Inicio <span class="sr-only">(current)</span></a>
        </li>

      </ul>
      <ul class="navbar-nav navbar-right">

        <li class="navbar-item">
         <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#crearPost">Crear Entrada</a>
        </li>

      </ul>
    </div>
</div>
</nav>
