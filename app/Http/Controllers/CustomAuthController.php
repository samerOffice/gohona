<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use DB;

class CustomAuthController extends Controller
{
    public function __construct()
    {
        // $this->middleware('guest')->except([
        //     'logout', 'dashboard'
        // ]);

        // $this->middleware('guest')->group(function () {
        //     Route::get('/login', [CustomAuthController::class, 'index'])->name('login');
        //     });
    }
    
    public function index()
    {
        return view('auth.login');
    }


    public function customLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->route('dashboard')->withSuccess('You have successfully logged in!');
        }

        return back()->withErrors([
            'email' => 'Your provided credentials do not match in our records.',
        ])->onlyInput('email');

    }

    public function registration()
    {

        $roles = DB::table('roles')
               ->where('id','<>',1)
               ->get();
        
        return view('auth.register',compact('roles'));
    }


    public function customRegistration(Request $request)
    {
        
           
        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:8'
        ]);

        // User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'role_id' => $request->role_id,
        //     'password' => Hash::make($request->password)
        // ]);


        $add_user = DB::table('users')
                                ->insertGetId([
                                    'name' => $request->name,
                                    'email' => $request->email,
                                    'role_id' => $request->role_id,
                                    'password' => Hash::make($request->password)
                                    ]);

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('dashboard')
        ->withSuccess('You have successfully registered & logged in!');
    }


    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }


    public function dashboard()
    {
        if (Auth::check()){

            $user_role = Auth::user()->role_id;

            $data = DB::table('menu_permissions')
                    ->where('role',$user_role)
                    ->first();
            $permitted_menus = $data->menus;

            $permitted_menus_array = explode(',', $permitted_menus);
            // dd($permitted_menus_array);
            return view('auth.dashboard',compact('permitted_menus_array'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }


    public function signOut(Request $request)
    {
        
        // Session::flush();
        // Auth::logout();
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return Redirect('login');
    }
}