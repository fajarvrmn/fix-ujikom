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

         $t5 = new Merekk();
        $t5->namamerek = "Merek lainnya";
        $t5->save();
    }
}
