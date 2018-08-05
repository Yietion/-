<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth', ['except' => ['show']]);
	}
	
    //
    public function show(User $user)
    {
    	$view_data = [
    		'user' => $user
    	];
    	return view('web.users.show', $view_data);
    }
    
    /**
     * edit编辑
     * @param User $user
     */
    public function edit(User $user)
    {
    	$this->authorize('update', $user);
    	$view_data = [
    		'user' => $user
    	];
    	return view('web.users.edit', $view_data);
    }
    
    public function update()
    {
    	
    }
}
