<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class Category_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('tbl_categories')->insert([
            'category_name'=>'Phòng Trọ',
            'category_slug'=>'mua-ban',
            'parent_id'=>0,
       ]);
         DB::table('tbl_categories')->insert([
            'category_name'=>'Mua Bán',
            'category_slug'=>'phong-tro',
            'parent_id'=>0,
       ]);
         DB::table('tbl_categories')->insert([
            'category_name'=>'Bài Viết',
            'category_slug'=>'bai-viet',
            'parent_id'=>0,
       ]);
         DB::table('tbl_categories')->insert([
            'category_name'=>'Trọ Giá Rẻ',
            'category_slug'=>'tro-gia-re',
            'parent_id'=>1,
       ]);
         DB::table('tbl_categories')->insert([
            'category_name'=>'Nhà Nguyên Căn',
            'category_slug'=>'nha-nguyen-can',
            'parent_id'=>1,
       ]);
         DB::table('tbl_categories')->insert([
            'category_name'=>'Bài Viết Ý Nghĩa',
            'category_slug'=>'bai-viet-y-nghia',
            'parent_id'=>3,
       ]);
         DB::table('tbl_categories')->insert([
            'category_name'=>'Sản Phẩm Tiêu Dùng',
            'category_slug'=>'san-pham-tieu-dung',
            'parent_id'=>2,
       ]);
    }
}
