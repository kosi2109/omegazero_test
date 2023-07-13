<x-layouts.app title="Dashboard">
    <x-partials.nav 
        :links="[
            [
                'name' => 'Users',
                'route' => route('question-one.users.index')
            ]
        ]"
    ></x-partials.nav>

    {{$slot}}

</x-layouts.app>