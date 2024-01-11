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
                'prix' => 10.99,
                'stock' => 50,
            ],
            [
                'id' => 2,
                'libelle' => 'Produit 2',
                'marque' => 'Marque 2',
                'prix' => 19.99,
                'stock' => 30,
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
        ]);

        $newProduct = [
            'id' => count($this->products) + 1,
            'libelle' => $request->input('libelle'),
            'marque' => $request->input('marque'),
            'prix' => $request->input('prix'),
            'stock' => $request->input('stock'),
        ];

        array_push($this->products, $newProduct);

        return redirect()->route('products.index')->with('success', 'Produit créé avec succès');
    }

    public function show($id)
    {
        $product = $this->findProductById($id);
        return view('show', ['product' => $product]);
    }

    public function edit($id)
    {
        $product = $this->findProductById($id);
        return view('edit', ['product' => $product]);
    }

    public function update(Request $request, $id)
    {
      
    }

    public function destroy($id)
    {

    }

    private function findProductById($id)
    {
        foreach ($this->products as $product) {
            if ($product['id'] == $id) {
                return $product;
            }
        }
        return null;
    }

    private function findProductKeyById($id)
    {
        foreach ($this->products as $key => $product) {
            if ($product['id'] == $id) {
                return $key;
            }
        }
        return -1;
    }
}
