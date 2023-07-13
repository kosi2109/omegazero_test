<x-layouts.question-one>
    <div class="d-flex justify-content-center align-items-center w-100">
        <div class="w-50 shadow p-3 mt-5">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="mb-5">Delete User</h1>
            </div>
    
            <div class="mb-3">
                <form method="POST" class="row" action="{{route('question-one.users.destroy', $user->id)}}">
                    @csrf
                    @method('DELETE')
                    
                    <p>Are You Sure To Delete {{$user->name}}?</p>

                    <div>
                        <button class="btn btn-danger mx-2">Delete</button>
                        <a type="button" href="{{route('question-one.users.index')}}" class="btn btn-secondary btn-outline mx-2">Back</a>
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