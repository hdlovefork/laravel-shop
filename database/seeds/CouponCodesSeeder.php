<?php

use Illuminate\Database\Seeder;

class CouponCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0;$i<10000;$i++){
            factory(\App\Models\CouponCode::class,100)->create();
            $this->command->info('已生成' . ($i+1) * 100 . '条记录');
            sleep(10);
        }
    }
}
