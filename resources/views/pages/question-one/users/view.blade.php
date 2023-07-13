<x-layouts.question-one>
    <div class="d-flex justify-content-center align-items-center w-100">
        <div class="w-50 shadow p-3 mt-5">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="mb-5">Detail User</h1>
            </div>
    
            <div class="mb-3 bg-primary text-white p-2 rounded-2">
                <h1 class="fs-2">Name</h1>
                <h2 class="fs-3 fw-bold">{{$user->name}}</h2>
            </div>
            <div class="mb-3 bg-primary text-white p-2 rounded-2">
                <h1 class="fs-2">Email</h1>
                <h2 class="fs-3 fw-bold">{{$user->email}}</h2>
            </div>
            <div class="mb-3 bg-primary text-white p-2 rounded-2">
                <h1 class="fs-2">Role</h1>
                <h2 class="fs-3 fw-bold">{{ $user->roles->count() > 0 ? $user->roles->pluck('name')->join(',') : '-' }}</h2>
            </div>

            <a href="{{route('question-one.users.index')}}" class="btn btn-secondary btn-outline">Back</a>
        </div>
    </div>
</x-layouts.question-one>