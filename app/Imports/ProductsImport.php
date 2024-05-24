<?php
namespace App\Imports;

use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        $categoryName = $row['category'] ?? null;
        $supplierName = $row['supplier'] ?? null;

        if ($categoryName && $supplierName) {
            $category = Category::firstOrCreate(['name' => $categoryName]);
            $supplier = Supplier::firstOrCreate(['name' => $supplierName]);

            return new Product([
                'name'        => $row['name'] ?? '',
                'description' => $row['description'] ?? '',
                'category_id' => $category->id,
                'supplier_id' => $supplier->id,
                'price'       => $row['price'] ?? 0,
            ]);
        }

        return null;
    }
}

