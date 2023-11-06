<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Animal;

class CheckUserOwnership
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $user = $request->user();
        //$animalId = $request->route('animal_id'); // Retrieve the animal_id from the route parameters

        // Find the animal based on the $animalId
        //$animal = Animal::findOrFail($animalId);

        // Check if the user has ownership of the animal
        //if (!$user->canAccessResource($animal)) {
           // abort(403, 'Unauthorized'); // You can return a different HTTP response code as needed
        //}

        return $next($request);
    }

}
