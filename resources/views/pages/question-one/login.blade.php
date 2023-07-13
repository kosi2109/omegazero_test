<x-layouts.app title="Home">
    <div class="d-flex flex-column justify-content-center align-items-center pt-5">
        <div class="w-50 shadow-lg p-3 mt-5">
            <form method="POST" action="{{route('question-one.login.store')}}">
                @csrf
                <h1 class="mb-3 text-center">Login</h1>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputPassword">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>

                <ul class="mt-3">
                    @foreach ($errors->all() as $error)
                        <li class="text-danger">{{ $error }}</li>
                    @endforeach
                    @if(session("auth_fail"))
                        <li class="text-danger">{{session('auth_fail')}}</li>
                    @endif
                </ul>
            </form>
        </div>
    </div>
</x-layouts.app>