@props([
    'columnNames' => [],
    'data' => [],
    'keys' => [],
    'canDelete' => false,
    'canUpdate' => false,
    'canView' => false,
    'perPage' => 10,
    'currentPage' => 1,
    'route'
])

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
          <th scope="row">{{($perPage * ($currentPage - 1)) + ($num + 1)}}</th>
          @foreach ($keys as $key)
            @if ($key == 'roles')
              <td>{{$item[$key]->pluck('name')->join(',')}}</td>
            @else
              <td>{{$item[$key]}}</td>
            @endif
          @endforeach
          <td class="text-end">
            @can ($canView)
              <a href="{{route($route . 'view', $item->id)}}" class="btn btn-outline btn-primary">View</a>
            @endif
            @can ($canUpdate)
              <a href="{{route($route . 'edit', $item->id)}}" class="btn btn-outline btn-warning">Edit</a>
            @endif
            @can ($canDelete)
              <a href="{{route($route . 'delete', $item->id)}}" class="btn btn-outline btn-danger">Delete</a>
            @endif
          </td>
        </tr>
        @endforeach
    </tbody>
</table>