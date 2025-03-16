<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Url;
use function Laravel\Prompts\search;

class ProductSearch extends Component
{
    #[Url()]  
    public $q = ""; 


    public function render()
    {
 

        $products = [];
      
            $products=Product::search($this->q)->get(); 

        return view('livewire.product-search', ['products'=>$products]);
    }
}
