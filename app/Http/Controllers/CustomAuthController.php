<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
        return view('auth.register');
    }


    public function customRegistration(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string|max:250',
        //     'email' => 'required|email|max:250|unique:users',
        //     'password' => 'required|min:8|confirmed'
        // ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
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
        if (Auth::check()) {
            return view('auth.dashboard');
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