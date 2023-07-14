<?php

namespace App\Http\Controllers\QuestionOne;

use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\QuestionOne\User\UserCreateRequest;
use App\Http\Requests\QuestionOne\User\UserUpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Excel;

class UserController extends Controller
{
    /** @var $view */
    private $view = 'pages.question-one.users.';

    /** @var $route */
    private $route = 'question-one.users.';

    /**
     * View Users Controller
     */
    public function index()
    {
        $request = request()->all();

        $users = User::filter($request)
                    ->with('roles')
                    ->orderBy('created_at', 'desc')
                    ->select(['id', 'name', 'email', 'department_name'])
                    ->paginate(request()->get('per_page', 10))
                    ->withQueryString();
        
        if (isset($request['export']) && $request['export'] == true) {
            return Excel::download(new UsersExport($users), now()->format('Ymdhms') . '.csv');
        }

        return view($this->view . 'index', [
            'data' => $users,
            'roles' => Role::all('name'),
            'route' => $this->route
        ]);
    }

    /**
     * View Users Detal Controller
     * 
     * @param User $user
     */
    public function view(User $user)
    {
        return view($this->view . 'view', [
            'user' => $user
        ]);
    }

    /**
     * Create User View Controller
     * 
     */
    public function create()
    {
        return view($this->view . 'create', [
            'roles' => Role::all('name')
        ]);
    }

    /**
     * Create User Controller
     * 
     * @param UserCreateRequest $request
     */
    public function store(UserCreateRequest $request)
    {
        $user = DB::transaction(function () use ($request) {
            $user = User::create($request->all());

            if ($request->get('role')) {
                $user->assignRole($request->get('role'));
            }

            return $user;
        });

        if (!$user) return redirect()->back()->with('error', 'Something went wrong');

        return redirect()->route($this->route . 'index')->with('success', 'User Successfully Created');
    }

    /**
     * Edit User View Controller
     * 
     * @param User $user
     */
    public function edit(User $user)
    {
        return view($this->view . 'edit', [
            'roles' => Role::all('name'),
            'user' => $user
        ]);
    }

    /**
     * Update User Controller
     * 
     * @param UserUpdateRequest $request
     * @param User $user
     */
    public function update(UserUpdateRequest $request, User $user)
    {   
        $user = DB::transaction(function () use($request, $user) {
            $user->update($request->all());

            if ($request->get('role')) {
                $user->syncRoles($request->get('role'));
            }

            return $user;
        });

        if (!$user) return redirect()->back()->with('error', 'Something went wrong');

        return redirect()->route($this->route . 'index')->with('success', 'User Successfully Updated');
    }

    /**
     * Delete User View Controller
     * 
     * @param User $user
     */
    public function delete(User $user)
    {
        return view($this->view . 'delete', [
            'user' => $user
        ]);
    }

    /**
     * Destroy User Controller
     * 
     * @param User $user
     */
    public function destroy(User $user)
    {
        if (!$user->delete()) return redirect()->back()->with('error', 'Delete Fail');

        return redirect()->route($this->route . 'index')->with('success', 'User Successfully Deleted');
    }
}
