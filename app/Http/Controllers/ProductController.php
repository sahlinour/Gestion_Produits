<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products = [];

    public function __construct()
    {
        $this->products = [
            [
                'id' => 1,
                'libelle' => 'Produit 1',
                'marque' => 'Marque 1',
                'prix' => 70.59,
                'stock' => 30,
                'image' => 'image 4.pnj',
            ],
            [
                'id' => 2,
                'libelle' => 'Produit 2',
                'marque' => 'Marque 2',
                'prix' => 69.25,
                'stock' => 40,
                'image' => 'image 2.pnj',
            ],
            [
                'id' => 3,
                'libelle' => 'Produit 3',
                'marque' => 'Marque 3',
                'prix' => 55.15,
                'stock' => 10,
                'image' => 'image 3.pnj',

            ],
        ];
    }

    public function index()
    {
        return view('index', ['products' => $this->products]);
    }

    public function create()
    {
        return view('Create');
    }

    public function store(Request $request)
    {
         $request->validate([
            'libelle' => 'required|string',
            'marque' => 'required|string',
            'prix' => 'required|numeric',
            'stock' => 'required|integer|min:1|max:500',
            'image' => 'image 3.pnj',
        ]);

        $newProduct = [
            'id' => count($this->products) + 1,
            'libelle' => $request->input('libelle'),
            'marque' => $request->input('marque'),
            'prix' => $request->input('prix'),
            'stock' => $request->input('stock'),
            'image' => $request->file('photo'),
        ];
        $this->products= $newProduct;
        return redirect()->route('products.index')->with('success', 'Produit créé avec succès');
    }

    public function show($id)
    {
        $product = $this->SelectedProduct($id);
        return view('show', ['product' => $product]);
    }

    public function edit($id)
    {
        $product = $this->SelectedProduct($id);
        return view('edit', ['product' => $product]);
    }

    public function update(Request $request, $id)
    {
      
    }

    public function destroy($id)
    {
        $product = $this->SelectedProductByKey($id);
       
        return redirect()->route('products.index');

    }

    private function SelectedProduct($id)
    {
        foreach ($this->products as $product) {
            if ($product['id'] == $id) {
                return $product;
            }
        }
        return null;
    }
    private function SelectedProductByKey($id)
    {
        foreach ($this->products as $key => $this->product) {
            if ($this->product['id'] == $id) {
                unset($this->products[$key]);
                break;
            }
        }
        return null;
    }

   
}
