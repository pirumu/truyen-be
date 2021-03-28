<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $theloai = [
            [
                'ten_the_loai'=> 'Tiên Hiệp',
                'ten_url' => Str::slug('Tiên Hiệp')
            ],
            [
                'ten_the_loai'=> 'Kiếm Hiệp',
                'ten_url' => Str::slug('Kiếm Hiệp')
            ],
            [
                'ten_the_loai'=> 'Ngôn Tình',
                'ten_url' => Str::slug('Ngôn Tình')
            ],
            [
                'ten_the_loai'=> 'Đô Thị',
                'ten_url' => Str::slug('Đô Thị')
            ],
            [
                'ten_the_loai'=> 'Quan Trường',
                'ten_url' => Str::slug('Quan Trường')
            ],
            [
                'ten_the_loai'=> 'Võng Du',
                'ten_url' => Str::slug('Võng Du')
            ],
            [
                'ten_the_loai'=> 'Khoa Huyễn',
                'ten_url' => Str::slug('Khoa Huyễn')
            ],
            [
                'ten_the_loai'=> 'Hệ Thống',
                'ten_url' => Str::slug('Hệ Thống')
            ],
            [
                'ten_the_loai'=> 'Huyền Huyễn',
                'ten_url' => Str::slug('Huyền Huyễn')
            ],
            [
                'ten_the_loai'=> 'Dị Giới',
                'ten_url' => Str::slug('Dị Giới')
            ],
            [
                'ten_the_loai'=> 'Dị Năng',
                'ten_url' => Str::slug('Dị Năng')
            ],
            [
                'ten_the_loai'=> 'Quân Sự',
                'ten_url' => Str::slug('Quân Sự')
            ],
            [
                'ten_the_loai'=> 'Lịch Sử',
                'ten_url' => Str::slug('Lịch Sử')
            ],

        ];
        DB::table('the_loai')->insert($theloai);


        $danhMuc = [
            [
                'ten_danh_muc'=> 'Truyện mới cập nhật',
                'ten_danh_muc_url' => Str::slug('Truyện mới cập nhật')
            ],
            [
                'ten_danh_muc'=> 'Truyện Hot',
                'ten_danh_muc_url' => Str::slug('Truyện Hot')
            ],
            [
                'ten_danh_muc'=> 'Ngôn Tình Ngược',
                'ten_danh_muc_url' => Str::slug('Ngôn Tình Ngược')
            ],
            [
                'ten_danh_muc'=> 'Ngôn Tình Hay',
                'ten_danh_muc_url' => Str::slug('Ngôn Tình Hay')
            ],
            [
                'ten_danh_muc'=> 'Đam Mỹ Sắc',
                'ten_danh_muc_url' => Str::slug('Đam Mỹ Sắc')
            ],
        ];
        DB::table('danh_muc')->insert($danhMuc);
    }
}
