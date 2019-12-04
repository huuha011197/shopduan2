<?php

use Illuminate\Database\Seeder;
use App\ProductType;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('type_products')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        ProductType::create([
            'name' => 'Đồng hồ Epos Swiss',
            'image' => 'anhCate1.jpg',
            'description' => 'Đồng hồ Epos Swiss'
        ]);

        ProductType::create([
            'name' => 'Đồng hồ Atlantic Swiss',
            'image' => 'anhCate2.jpg',
            'description' => 'Đồng hồ Atlantic Swiss'
        ]);

        ProductType::create([
            'name' => 'Đồng hồ Aries Gold',
            'image' => 'anhCate3.jpg',
            'description' => 'Đồng hồ Aries Gold'
        ]);

    

        ProductType::create([
            'name' => 'Đồng hồ Jacques Lemans',
            'image' => 'anhCate4.jpg',
            'description' => 'Đồng hồ Jacques Lemans'
        ]);
        ProductType::create([
            'name' => 'Đồng hồ QQ',
            'image' => 'anhCate5.jpg',
            'description' => 'Đồng hồ QQ'
        ]);
        ProductType::create([
            'name' => 'Bruno Sohnle Glashutte',
            'image' => 'anhCate6.jpg',
            'description' => 'Bruno Sohnle Glashutte'
        ]);
        ProductType::create([
            'name' => 'Jacques Du Manoir',
            'image' => 'anhCate7.jpg',
            'description' => 'Jacques Du Manoir'
        ]);
        ProductType::create([
            'name' => 'Đồng hồ Citizen',
            'image' => 'anhCate8.jpg',
            'description' => 'Đồng hồ Citizen'
        ]);
        ProductType::create([
            'name' => 'Stuhrling Tourbillon',
            'image' => 'anhCate9.jpg',
            'description' => 'Stuhrling Tourbillon'
        ]);
        ProductType::create([
            'name' => 'Tourbillon Memorigin',
            'image' => 'anhCate10.jpg',
            'description' => 'Tourbillon Memorigin'
        ]);
        
    }
}
