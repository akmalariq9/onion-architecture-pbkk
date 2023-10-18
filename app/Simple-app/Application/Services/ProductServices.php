// app/Simple-app/Application/Services/ProductService.php

namespace App\Application\Services;

use app\Core\Entities\Product.php;
use App\Infrastructure\Database\ProductModel;

class ProductService
{
    public function createProduct($data)
    {
        return ProductModel::create($data);
    }
}
