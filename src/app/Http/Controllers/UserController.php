<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Employee;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $request->validate([
            'id' => 'nullable|integer|min:1',
            'keyword' => 'nullable|string|max:255',
            'sortField' => 'nullable|in:id,name,created_at',
            'sortType'  => 'nullable|in:asc,desc',
        ]);

        $idSearch      = $request->get('id');
        $keywordSearch = $request->get('keyword');
        $sortField     = $request->get('sortField');
        $sortType      = $request->get('sortType');

        $users = User::query();

        if ($idSearch) {
            $users = $users->where('id', $idSearch);
        }

        if ($keywordSearch) {
            $users = $users->where('name', 'like', "%{$keywordSearch}%")
                           ->orWhere('email', 'like', "%{$keywordSearch}%");
        }

        if ($sortField && $sortType) {
            $users = $users->orderBy($sortField, $sortType);
        }

        $users = $users->get();
        $count = $users->count();

        return view('user.index', ['users' => $users, 'count' => $count]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create', [
            'permissions' => Permission::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $inputs = $request->all();

        $user = User::create([
            'permission_id' => $inputs['permission_id'],
            'name'          => $inputs['name'],
            'email'         => $inputs['email'],
            'password'      => Hash::make($inputs['password']),

        ]);

        Employee::create([
            'user_id'       => $user->id,
            'mobile_number' => $inputs['mobile_number'],
            'remark'        => $inputs['remark'],
        ]);

        return redirect()
                ->route('user.index')
                ->with('success', '登録しました。');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $user = User::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            Log::error($e->getMessage() . ' in UserController');
            return redirect()->back()->with('error', 'User not found...');
        }

        return view('user.edit', [
            'permissions' => Permission::all(),
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, string $id)
    {
        $inputs = $request->all();
        try {
            $user = User::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            Log::error($e->getMessage() . ' in UserController');
            return redirect()->back()->with('error', 'User not found...');
        }

        $user->update([
            'permission_id' => $inputs['permission_id'],
            'name'          => $inputs['name'],
            'email'         => $inputs['email'],
        ]);

        $user->employee->update([
            'user_id'       => $user->id,
            'mobile_number' => $inputs['mobile_number'],
            'remark'        => $inputs['remark'],
        ]);

        return redirect()
                ->route('user.index')
                ->with('success', '更新しました。');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $user = User::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            Log::error($e->getMessage() . ' in UserController');
            return redirect()->back()->with('error', 'User not found...');
        }

        $user->employee->delete();
        $user->delete();

        return redirect()
        ->route('user.index')
        ->with('deleted', '削除しました。');
    }
}
