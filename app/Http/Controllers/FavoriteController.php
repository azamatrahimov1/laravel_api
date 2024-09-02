<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponses;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    use ApiResponses;

    public function index()
    {
        return auth()->user()->favorites()->paginate(25);
    }

    public function store(Request $request): JsonResponse
    {
        auth()->user()->favorites()->attach($request->product_id);

        return $this->yes('Favorite create');
    }

    /*
     * TODO refactor responses, make standard format
     */

    public function destroy($favorite_id): JsonResponse
    {
        if (auth()->user()->hasFavorite($favorite_id)) {
            auth()->user()->favorites()->detach($favorite_id);

            return $this->yes('Favorite deleted');
        }

        return $this->no('Favorite does not exist in this user');
    }
}
