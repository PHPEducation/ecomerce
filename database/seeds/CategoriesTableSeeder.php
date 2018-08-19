<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $categorie = [
            [
                'name' => 'Bánh mặn',
                'description' => 'Nếu từng bị mê hoặc bởi các',
                'image' => 'banh-man-thu-vi-nhat-1.jpg',
            ],
            [
                'name' => 'Bánh ngọt',
                'description' => 'bánh ngọt là một loại thức ăn thường.',
                'image' => '20131108144733.jpg',
            ],
            [
                'name' => 'Bánh trái cây',
                'description' => 'Bánh trái cây, hay còn gọi là bánh hoa quả, l',
                'image' => 'banhtraicay.jpg',
            ],
            [
                'name' => 'Bánh kem',
                'description' => 'Crepe là một món bánh nổi tiếng của Pháp, nhưng từ khi du nhập vào Việt Nam món bánh đẹp mắt, ngon miệng này đã làm cho biết bao bạn trẻ phải “xiêu lòng”',
                'image' => 'crepe.jpg',
            ],
            [
                'name' => 'Bánh Pizza',
                'description' => 'Pizza đã không chỉ còn là một món ăn được ưa chuộng khắp thế giới mà còn .',
                'image' => 'pizza.jpg',
            ],
            [
                'name' => 'Bánh su kem',
                'description' => 'Bánh su kem là món bánh ngọt ở dạng kem được làm từ các nguyên liệu như bột mì, trứng, sữa, bơ.... ',
                'image' => 'sukemdau.jpg',
            ],
        ];
        DB::table('categories')->insert($categorie);
    }
}
