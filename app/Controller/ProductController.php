<?php

namespace Tamhar\BelajarPhpMvc\Controller;

class ProductController
{
    function categories(string $productId, string $categoryId): void
    {
        echo "Product : $productId, Category : $categoryId";
    }
}
