<x-layouts.question-one>
    <x-partials.table
        tableTitle="List Of User"
        :columnNames="[
            'Name',
            'Department Name',
            'Role',
        ]"

        :keys="[
            'name',
            'department_name',
            'id'
        ]"

        :data="[
            [
                'name' => 'Si THue',
                'department_name' => 'PHP',
                'id' => '1',
            ]
        ]"
    ></x-partials.table>
</x-layouts.question-one>