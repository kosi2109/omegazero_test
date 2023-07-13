@props(['links' => []])
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">OmegaZero</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            @foreach ($links as $link)
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{$link['route']}}">{{$link['name']}}</a>
                </li>
            @endforeach
        </ul>
      </div>

      @auth
        <form class="d-flex" role="logout" method="POST" action="{{route('question-one.auth.logout')}}">
            @csrf
            <button class="btn btn-outline-success" type="submit">Logout</button>
        </form>
      @endauth
    </div>
</nav>