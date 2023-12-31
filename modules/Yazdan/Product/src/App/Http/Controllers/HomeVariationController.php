<?php

namespace Yazdan\Product\App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Yazdan\Product\App\Models\Product;
use Yazdan\Product\App\Models\Variation;
use Yazdan\Common\Responses\AjaxResponses;
use Yazdan\Product\Repositories\VariationRepository;
use Yazdan\Product\App\Http\Requests\VariationRequest;

class HomeVariationController extends Controller
{

    public function index(Product $product)
    {
        $this->authorize('manage', Seller::class);
        $variations = VariationRepository::getProductVariations($product->id);
        return view('Product::home.variation.index', compact('product', 'variations'));
    }

    public function store(VariationRequest $request)
    {
        $this->authorize('manage', Seller::class);

        try {
            DB::beginTransaction();

            VariationRepository::store($request);

            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            newFeedbacks('error', $ex->getMessage(), 'error');
            return back();
        }

        newFeedbacks();
        return back();
    }

    public function edit(Variation $variation)
    {
        $this->authorize('manage', Seller::class);
        return view('Product::home.variation.edit', compact('variation'));
    }

    public function update(Variation $variation, VariationRequest $request)
    {
        $this->authorize('manage', Seller::class);
        try {
            DB::beginTransaction();

            VariationRepository::update($variation->id, $request);

            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            newFeedbacks('error', $ex->getMessage(), 'error');
            return back();
        }
        newFeedbacks();
        return back();
    }

    public function destroy(Variation $variation)
    {
        $this->authorize('manage', Seller::class);
        try {
            DB::beginTransaction();
            $variation->delete();
            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            return AjaxResponses::ErrorResponses();
        }
        return AjaxResponses::SuccessResponses();
    }
}
