<?php 
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Product;
use Moltin\Cart\Cart;
use Moltin\Cart\Storage\Session;
use Moltin\Cart\Identifier\Cookie;

class CartController extends BaseController
{
    private $cart;
    public function __construct()
    {
        parent::__construct;

        $this->cart = new Cart(new Session, new Cookie);
    }

    public function index()
    {
        $data['cart'] = $this->cart;

    }

    public function add(Requests $request, $code, $qty){
        $response = "";
        //cek product berdasarkan code & ambil jika ada
        $getProduct = Product::where(['code' => $code ])->first();
        if ( $getProduct )
        {
            if ( $this->cart->has($code) )
            {
                $getProductOnCart = $this->cart->item($code);
                $productQty = $getProductOnCart->quantity;
                $qty += $productQty;
            }

            if ( $qty > $getProduct->qty )
            {
                $response = "Qty tidak cukup";
            } else
            {
                if ( $this->cart->has($code) )
                {
                    foreach ( $this->cart->contents() as $item )
                    {
                        if ( $item->id == $code )
                        {
                            $item->quantity = $qty;
                        }
                    }
                } else {
                    $this->cart->insert([
                        "id" => $code, 
                        "quantity" => $qty,
                        "image" => $getProduct->image,
                        "price" => $getProduct->price,
                        "name" => $getProduct->name,
                        "qty_max" => $getProduct->qty]);
                }
                $response = "Produk berhasil dimasukkan ke keranjang";
            }

        } else
        {
            $response = 'Produk tidak ada';
        }
        Redirect::to(url("cart"));
    }

    public function remove(Requests $request, $code) {
        foreach ( $this->cart->contents() as $item )
        {
            if ( $item->id == $code )
            {
                $item->remove();
            }
        }
    }
}
