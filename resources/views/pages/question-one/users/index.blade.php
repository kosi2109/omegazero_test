<x-layouts.question-one>
    {{-- @dd($data); --}}
    <div class="shadow p-3 my-5">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="mb-5">Users</h1>
            <a href="{{route('question-one.users.create')}}" class="btn btn-outline btn-primary">Create User</a>
        </div>

        <div class="mb-3">
            @if(session("error"))
                <div class="alert alert-danger" role="alert">
                    {{session('error')}}
                </div>
            @endif
            @if(session("success"))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
            @endif

            <form method="GET" class="row">
                <div class="col-md-3">
                    <div>
                        <input name="name" type="text" value="{{request('name')}}" class="form-control" id="name_input" placeholder="Name">
                    </div>
                </div>
                <div class="col-md-3">
                    <select class="form-control" name="role" aria-placeholder="department">
                        <option selected value="">Role</option>
                        @foreach ($roles as $role)
                            <option {{request('role') == $role->name ? 'selected' : '' }} value="{{$role->name}}">{{$role->name}}</option>
                        @endforeach
                        </option>
                    </select>
                </div>
                <div class="col-md-3">
                    <div>
                        <select class="form-control" name="department_name" aria-placeholder="department">
                            <option selected value="">Department</option>
                            <option {{request('department_name') == 'IT' ? 'selected' : '' }} value="IT">IT</option>
                            <option {{request('department_name') == 'Marketing' ? 'selected' : '' }} value="Marketing">Marketing</option>
                            <option {{request('department_name') == 'Office' ? 'selected' : '' }} value="Office">Office</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-1">
                    <select class="form-control" name="per_page" aria-placeholder="per_page">
                        <option {{(request('per_page') == '10' || request('per_page') == null) ? 'selected' : '' }} value="10">10</option>
                        <option {{request('per_page') == '20' ? 'selected' : '' }} value="20">20</option>
                        <option {{request('per_page') == '50' ? 'selected' : '' }} value="50">50</option>
                        <option {{request('per_page') == '100' ? 'selected' : '' }} value="100">100</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <div class="d-flex justify-content-center align-items-center">
                        <button class="btn btn-md btn-primary mx-2" type="submit">
                            Search
                        </button>
                        <button name="export" value="true" class="btn btn-md btn-secondary mx-2" type="submit">
                            Export
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <x-partials.table
            :columnNames="[
                'Name',
                'Department Name',
                'Role',
            ]"
    
            :keys="[
                'name',
                'department_name',
                'roles'
            ]"
    
            :data="$data"
            :perPage="$data->perPage()"
            :currentPage="$data->currentPage()"
            :route="$route"
            canDelete="delete_users"
            canView="view_users"
            canUpdate="edit_users"
        ></x-partials.table>
    
        {!! $data->links() !!}
    </div>
</x-layouts.question-one>