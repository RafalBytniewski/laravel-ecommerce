<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Livewire\Partials\Navbar;
use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Product Detail Page')]

class ProductDetailPage extends Component
{
    public $slug;
    
    public $quantity = 1;

    public function mount($slug) {
        $this->slug = $slug;

    }
    public function addToCart($product_id){
        $total_count = CartManagement::addItemToCartWithQty($product_id, $this->quantity);

        $this->dispatch('update_cart_count', total_count: $total_count)->to(Navbar::class);
    }
    public function increaseQty(){
        $this->quantity++;
    }

    public function decreaseQty(){
        if($this->quantity > 1)
        $this->quantity--;
    }
    public function render()
    {
        return view('livewire.product-detail-page',[
            'product' => Product::where('slug', $this->slug)->firstOrFail(),
        ]);
    }
}
