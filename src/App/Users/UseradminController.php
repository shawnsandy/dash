<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 3/6/17
 * Time: 2:39 PM
 */

namespace ShawnSandy\Dash\App\Users;

use App\User;
use Crew\Unsplash\Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Session;
use Validator;

class UseradminController extends Controller
{

    public function index()
    {
        $users = User::select(["id", "name", "email", "created_at"])->get();
        return view("dash::useradmin", compact("users"));
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:5',
            'email' => 'required|unique:users|min:5',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            Session::flash("danger'", "Error creating a new User");
            return back()->withErrors($validator)->withInput();
        }

        if ($user = User::create($request->input())) {
            Session::flash("success", "User account for {$user->name} created.");
            return back();
        }
    }

    public function show($id)
    {
        $user = User::find($id);

        return view("dash::useradmin-page", compact("user"));
    }

    public function destroy(Request $request, $id)
    {

        try {
            User::destroy($id);
            Session::flash("success", "User deleted");
        } catch (Exception $exception) {
            \Log::alert("User not deleted ");
            Session::flash("error", "User deleted");
        }

        return redirect('/admin/users');
    }
}
