<x-layouts.app title="Home">
    <x-partials.introduce number='4' />

    <div class="shadow rounded p-5">
        <div class="d-flex flex-column justify-content-center align-items-center">
        @auth
            <img src="{{auth()->user()->avatar}}" alt="{{auth()->user()->name}}" width="100" height="100" class="mb-3">
            <h5>{{auth()->user()->name}}</h5>

            <a class="btn btn-outline btn-primary" href="{{route('question-four.logout')}}">Logout</a>
        @else
            <a class="btn btn-outline btn-primary" href="{{route('question-four.facebook')}}">Facebook Login</a>
        @endauth
        </div>
    </div>
    <div>
    
    <div class="text-start mt-5">
        <h4>Make:</h4>
        <h5>Add your key in .env</h5>
        <ul>
            <li>FACEBOOK_CLIENT_ID</li>
            <li>FACEBOOK_SECRET_ID</li>
            <li>FACEBOOK_REDIRECT_URL</li>
        </ul>
    </div>
    <div>
        <h4>Description:</h4>
        <ul>
            <li>I want to build advance level app including users post like count, posts and other. But facebook has limit , it may need to verify business so I can't use other field.</li>
            <li>So I make sample Facebook OAuth Login and get user name and image from Facebook Graph Api.</li>
        </ul>
    </div>
</x-layouts.app>