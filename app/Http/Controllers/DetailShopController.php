<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;
use Illuminate\Database\DatabaseManager;
use App\Http\Requests\DetailShopRequest;
use App\ShopPosition;
use App\Shop;

class DetailShopController extends Controller
{
    private $db;

    public function __construct(DatabaseManager $db)
    {
        $this->db = $db;
    }

    /**
     * 店舗詳細表示表示
     * 
     * @param  DetailShopRequest $request
     * @return Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function __invoke($shopId)
    {
        $response = (new ShopPosition())->newQuery()
            ->find($shopId);

        return view('shop.detail',  compact('response'));
    }
}
