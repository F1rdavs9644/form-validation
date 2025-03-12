<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest; 
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view("user");
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserRequest $request) 
    {

    }

    public function show(string $id)
    {
        
    }

    public function edit(string $id)
    {
        
    }

    public function update(Request $request, string $id)
    {
        
    }

    public function destroy(string $id)
    {
        
    }
}
