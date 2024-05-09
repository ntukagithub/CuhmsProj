<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Marketing
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (!Auth::check()) {
            return redirect()->route('login');
        }
        
        $role=Auth::user()->role;

        if($role=='marketing')
        {
            return $next($request);//1
        }

        elseif($role=='Accountancy')
        {
            return redirect()->route('accountancy');//2
        }

        elseif($role=='admin')
        {
            return redirect()->route('admin');//3
        }

        elseif($role=='B_administration')
        {
            return redirect()->route('b_administration');//4
        }

        elseif($role=='BA_HR')
        {
            return redirect()->route('ba_hr');//5
        }

        elseif($role=='Civil_engineering')
        {
            return redirect()->route('civil_engineering');//6
        }

        elseif($role=='Clinical_medicine')
        {
            return redirect()->route('clinical_medicine');//7
        }

        elseif($role=='Computer_science')
        {
            return redirect()->route('computer_science');//8
        }

        elseif($role=='Electrical_engineering')
        {
            return redirect()->route('electrical_engineering');//9
        }

        elseif($role=='Laboratory_engineering')
        {
            return redirect()->route('laboratory_engineering');//10
        }

        elseif($role=='Law')
        {
            return redirect()->route('law');//11
        }

        elseif($role=='Procurement')
        {
            return redirect()->route('procurement');//12
        }

        elseif($role=='Tourism')
        {
            return redirect()->route('tourism');//13
        }

        elseif($role=='IT')
        {
            return redirect()->route('it');//14
        }

        else
        {
            return redirect()->route('login');//15
        }
    }
}
