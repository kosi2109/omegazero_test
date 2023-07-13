@props([
    'tableTitle',
    'columnNames' => [],
    'data' => [],
    'keys' => [],
    'canDelete' => false,
    'canUpdate' => false,
    'canView' => false,
])

<h1 class="my-5">{{$tableTitle}}</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        @foreach ($columnNames as $name)
        <th scope="col">{{$name}}</th>
        @endforeach
        <th></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $num => $item)
        <tr>
          <th scope="row">{{$num}}</th>
          @foreach ($keys as $key)
            <td>{{$item[$key]}}</td>
          @endforeach
          <td class="text-end">
            <button class="btn btn-outline btn-primary">View</button>
            <button class="btn btn-outline btn-warning">Edit</button>
            <button class="btn btn-outline btn-danger">Delete</button>
          </td>
        </tr>
        @endforeach
    </tbody>
</table>