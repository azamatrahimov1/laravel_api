<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Http\Resources\ReviewResource;
use App\Models\Product;
use App\Traits\ApiResponses;
use Illuminate\Http\Request;

class ProductReviewController extends Controller
{
    use ApiResponses;

    public function index(Product $product)
    {
        return response([
            'overall_rating' => $product->reviews()->avg('rating'),
            'reviews_count' => $product->reviews()->count(),
            'reviews' => ReviewResource::collection($product->reviews()->paginate(10)),
        ]);
    }

    public function store(Product $product, StoreReviewRequest $request)
    {
        $product->reviews()->create([
            'user_id' => auth()->id(),
            'rating' => $request->get('rating'),
            'body' => $request->get('body'),
        ]);

        return $this->yes('Review created');
    }
}
