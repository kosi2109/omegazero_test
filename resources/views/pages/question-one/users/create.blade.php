<x-layouts.question-one>
    <div class="d-flex justify-content-center align-items-center w-100">
        <div class="w-50 shadow p-3 mt-5">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="mb-5">Create User</h1>
            </div>
    
            <div class="mb-3">
                <form method="POST" class="row" action="{{route('question-one.users.store')}}">
                    @csrf
                    <div class="col-12 mb-3">
                        <div>
                            <input required name="name" type="text" value="{{old('name')}}" class="form-control" id="name_input" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div>
                            <input required name="email" type="email" value="{{old('email')}}" class="form-control" id="email_input" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div>
                            <input name="password" min="8" type="text" class="form-control" id="password_input" placeholder="Password">
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div>
                            <select required class="form-control" name="role" aria-placeholder="department">
                                <option selected value="">Role</option>
                                @foreach ($roles as $role)
                                    <option {{old('role') == $role->name ? 'selected' : '' }} value="{{$role->name}}">{{$role->name}}</option>
                                @endforeach
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div>
                            <select required class="form-control" name="department_name" aria-placeholder="department">
                                <option selected value="">Department</option>
                                <option {{old('department_name') == 'IT' ? 'selected' : '' }} value="IT">IT</option>
                                <option {{old('department_name') == 'Marketing' ? 'selected' : '' }} value="Marketing">Marketing</option>
                                <option {{old('department_name') == 'Office' ? 'selected' : '' }} value="Office">Office</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="d-flex justify-content-center align-items-center">
                            <a type="button" href="{{route('question-one.users.index')}}" class="btn btn-secondary btn-outline mx-2">Back</a>

                            <button class="btn btn-md btn-primary mx-2" type="submit">
                                Create
                            </button>
                        </div>
                    </div>

                    @if (count($errors->all()) > 0)
                        <ul class="mt-3 px-5">
                            @foreach ($errors->all() as $error)
                                <li class="text-danger">{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </form>
            </div>
        </div>
    </div>
</x-layouts.question-one>