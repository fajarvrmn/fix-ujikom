<?php

use Illuminate\Database\Seeder;
use App\Merekk;

class MerekkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $t1 = new Merekk();
        $t1->namamerek = "Toyota";
        $t1->save();

        $t2 = new Merekk();
        $t2->namamerek = "Honda";
        $t2->save();

        $t3 = new Merekk();
        $t3->namamerek = "Suzuki";
        $t3->save();

        $t4 = new Merekk();
        $t4->namamerek = "Daihatsu";
        $t4->save();

        $t5 = new Merekk();
        $t5->namamerek = "Mitsubishi";
        $t5->save();

         $t6 = new Merekk();
        $t6->namamerek = "Nissan";
        $t6->save();

         $t7 = new Merekk();
        $t7->namamerek = "Mazda";
        $t7->save();

         $t8 = new Merekk();
        $t8->namamerek = "Mercedes-Benz";
        $t8->save();

         $t9 = new Merekk();
        $t9->namamerek = "BMW";
        $t9->save();

         $t10 = new Merekk();
        $t10->namamerek = "Hyundai";
        $t10->save();

  
    }
}
