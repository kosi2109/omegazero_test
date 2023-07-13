<x-layouts.app title="Dashboard">
    <x-partials.nav 
        :links="[
            [
                'name' => 'Users',
                'route' => route('question-one.users.index')
            ],
            [
                'name' => 'Roles',
                'route' => route('question-one.roles.index')
            ],
            [
                'name' => 'Permissions',
                'route' => route('question-one.permissions.index')
            ]
        ]"
    ></x-partials.nav>

    {{$slot}}

</x-layouts.app>