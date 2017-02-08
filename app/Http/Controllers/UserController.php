<?php

namespace Prego\Http\Controllers;

use Illuminate\Http\Request;

use Prego\Http\Requests;
use Prego\Http\Controllers\Controller;
use Prego\User;

class UserController extends Controller
{
    public function edit() {
      return view('usersetting');
    }
    public function update(Request $r) {
      $user = User::find(\Auth::user()->id);
      $user->email = $r->input('email');
      $user->username = $r->input('username');
      $user->password = bcrypt($r->input('password'));
      $photo = $r->file('photo');
      $filename = round(microtime(true));
      $ext = $photo->getClientOriginalExtension();
      $photo->move('img/profile',$filename.'.'.$ext);
      $user->photo = $filename.'.'.$ext;
      $user->save();
    return redirect('projects');  }
}
