<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;
use Illuminate\Database\DatabaseManager;
use App\Http\Requests\IndexShopRequest;

class IndexShopController extends Controller
{
    private $db;

    public function __construct(DatabaseManager $db)
    {
        $this->db = $db;
    }

    /**
     * 店舗一覧表示
     * 
     * @param  IndexShopRequest $request
     * @return Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function __invoke(IndexShopRequest $request)
    {
        $lat = $request->get('latitude');
        $lng = $request->get('longitude');

        $sql = <<< SQL
            SELECT
                DISTINCT s.id,
                u.id as user_id,
                s.zip_code,
                s.phone,
                s.name,
                s.address,
                ST_Distance_Sphere(sp.position, ST_GeometryFromText("POINT($lng $lat)", 4326)) as distance
            FROM
                shops s,
                shop_positions sp,
                users u,
                shop_user su
            WHERE 
                s.id = sp.shop_id
            AND su.user_id = u.id
            ORDER BY
                distance
            ASC
        SQL;

        $response = $this->db->select($sql);

        return view('shop.index',  compact('response'));
    }
}
