<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;

class ProdutoPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function verProduto(User $user, Product $product) {
        return $user->id === $product->user_id;
    }
}
