<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = [
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
        
        return view('index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated= $request->validate([
            'libelle' => 'required|string',
            'marque' => 'required|string',
            'prix' => 'required|numeric',
            'stock' => 'required|integer|min:1|max:500',
        ]);
        dd($validated);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id , $products)
    {   
        // Supposons que $products soit une variable accessible ici, sinon, assurez-vous de la définir ou de l'injecter correctement.
    
        function findProductById($id, $products)
        {
            foreach ($products as $product) {
                if ($product['id'] == $id) {
                    return $product;
                }
            }
            return null;
        };
    
        $product = findProductById($id, $products);
    
        return view('show', ['product' => $product]);
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
