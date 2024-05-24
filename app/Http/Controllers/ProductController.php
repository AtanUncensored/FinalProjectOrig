<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Models\Category;
use App\Models\Product;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ProductsImport;
use Barryvdh\DomPDF\Facade\Pdf;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request) {

        $productId = $request->input('product_id');

        if ($productId) {
            
            $products = Product::where('id', $productId)->get();
        } else {
            
            $products = Product::all();
        }
        
        return view('products', compact('products'));
    }

    public function popular() {

        $products = Product::whereBetween('id', [1, 13])->get();

        return view('popular-products', compact('products'));
    }

    public function expired(Request $request) {
        
        $products = Product::whereBetween('id', [1, 20])->get();

        return view('expired-products', compact('products'));
    }

    public function generateCSV() {
        $products = Product::orderBy('name')->get();
    
        $filename = storage_path('app/products.csv'); 
    
        $file = fopen($filename, 'w+');
    
        fputcsv($file, ['Name', 'Description', 'Supplier', 'Category', 'Price']);
    
        foreach ($products as $p) {
            fputcsv($file, [
                $p->name,
                $p->description,
                $p->supplier->name,
                $p->category->name,
                $p->price,
            ]);
        }
    
        fclose($file);
    
        return response()->download($filename)->deleteFileAfterSend(true); // Delete file after sending response
    }
    

    public function show(Product $product)
    {
        
        return view('view', compact('product'));
    }

    public function create() {
        $suppliers = Supplier::all();
        $categories = Category::all();

        return view('product-create.create', compact('suppliers', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'supplier_id'   => 'required',
            'category_id'       => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

       Product ::create([
            'supplier_id' => $request->supplier_id,
            'category_id'=> $request->category_id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
    
        ]);

        return redirect('/products')->with('message', 'A new Product has been added.');
    }

    public function generatePDF() {
        $products = Product::orderBy('name')->get();

        foreach ($products as $product) {
            $product->qrCode = QrCode::size(100)->generate($product->id);
        }

        $pdf = Pdf ::loadView('product-list', compact('products'));

        return $pdf->download('product-list.pdf');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('/products')->with('message', 'Product deleted successfully.');
    }

    public function popDestroy(Product $product)
    {
        $product->delete();

        return redirect('/popular-products')->with('message', 'Product deleted successfully.');
    }

    public function expDestroy(Product $product)
    {
        $product->delete();

        return redirect('/expired-products')->with('message', 'Product deleted successfully.');
    }

    public function importCsv(Request $request)
    {
        $request->validate([
            'csv-file' => 'required|file|mimes:csv,txt',
        ]);

        $file = $request->file('csv-file');
        Excel::import(new ProductsImport, $file);

        return redirect()->route('products')->with('message', 'Products imported successfully.');
    }

public function showScanner()
    {
        return view('scanner');
    }

    public function process(Request $request)
    {
        $request->validate([
            'qr_code' => 'required|string',
        ]);

        $qrCode = $request->input('qr_code');

        return response()->json(['message' => 'QR code processed successfully', 'data' => $qrCode]);
    }

};

