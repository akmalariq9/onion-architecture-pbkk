// app/Core/Entities/Product.php

namespace App\Domain\Model\Product.php;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'price'];
}
