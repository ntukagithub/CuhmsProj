<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckIfAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $role = Auth::user()->role;

        if ($role === 'admin') {
            return $next($request);
        }

        switch ($role) {
            case 'Accountancy':
                return redirect()->route('accountancy');
            case 'B_administration':
                return redirect()->route('b_administration');
            case 'BA_HR':
                return redirect()->route('ba_hr');
            case 'Civil_engineering':
                return redirect()->route('civil_engineering');
            case 'Clinical_medicine':
                return redirect()->route('clinical_medicine');
            case 'Computer_science':
                return redirect()->route('computer_science');
            case 'Electrical_engineering':
                return redirect()->route('electrical_engineering');
            case 'Laboratory_engineering':
                return redirect()->route('laboratory_engineering');
            case 'Law':
                return redirect()->route('law');
            case 'marketing':
                return redirect()->route('marketing');
            case 'Procurement':
                return redirect()->route('procurement');
            case 'Tourism':
                return redirect()->route('tourism');
            case 'IT':
                return redirect()->route('it');
            default:
                return redirect()->route('login');
        }
    }
}
