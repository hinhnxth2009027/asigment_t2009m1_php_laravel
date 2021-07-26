<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('apartments')->insert([
            [
                'apartment_name'=>'trung cư vân an',
                'address'=>'Hoàn kiếm hà nội',
                'price'=>'10000',
                'general_information'=>'trung cư',
                'details'=>'trung cư 20 năm tại nội thành',
                'avatar'=>'https://moigioicanhan.com/wp-content/uploads/2020/01/can-ho-chung-cu-7-1024x576.jpg',
                'created_at'=>'2021-01-01'
            ],
            [
                'apartment_name'=>'trung cư vân an 2',
                'address'=>'Hoàn kiếm hà nội',
                'price'=>'12000',
                'general_information'=>'trung cư mini',
                'details'=>'trung cư 18 năm tại nội thành',
                'avatar'=>'https://photo-cms-plo.zadn.vn/Uploaded/2021/mrwqldxwp/2020_05_03/chungcu_bhnr.jpg',
                'created_at'=>'2021-02-01'
            ],
            [
                'apartment_name'=>'trung cư an bình',
                'address'=>'Duy hưng hà nội',
                'price'=>'23000',
                'general_information'=>'trung cư đẹp',
                'details'=>'trung cư 30 năm tại nội thành',
                'avatar'=>'https://photo.rever.vn/v2/get/2E37X7dkPFTuhD9UiBcCOkFmUFkpSQiLK2VEUhxVnBQ=/750x500/image.jpg',
                'created_at'=>'2021-03-01'
            ],
            [
                'apartment_name'=>'trung cư vân an 5',
                'address'=>'Hoàn kiếm hà nội',
                'price'=>'10000',
                'general_information'=>'trung cư',
                'details'=>'trung cư 20 năm tại nội thành',
                'avatar'=>'https://nhadatcanthoinfo.vn/wp-content/uploads/2021/03/Chung-Cu-Nam-Long-Hong-Phat.jpg',
                'created_at'=>'2021-06-01'
            ],[
                'apartment_name'=>'trung cư thái linh',
                'address'=>'Cầu giấy hà nội',
                'price'=>'40000',
                'general_information'=>'trung cư chất',
                'details'=>'trung cư 10 năm tại nội thành',
                'avatar'=>'https://giathuecanho.com/wp-content/uploads/2019/03/King-Center.jpg',
                'created_at'=>'2021-04-01'
            ],
            [
                'apartment_name'=>'trung cư vân an',
                'address'=>'Hoàn kiếm hà nội',
                'price'=>'10000',
                'general_information'=>'trung cư',
                'details'=>'trung cư 20 năm tại nội thành',
                'avatar'=>'https://moigioicanhan.com/wp-content/uploads/2020/01/can-ho-chung-cu-7-1024x576.jpg',
                'created_at'=>'2021-01-01'
            ],
            [
                'apartment_name'=>'trung cư vân an',
                'address'=>'hà đông hà nội',
                'price'=>'10000',
                'general_information'=>'trung cư',
                'details'=>'trung cư 7 năm tại ngoại thành',
                'avatar'=>'https://vnn-imgs-f.vgcloud.vn/2019/12/06/11/bo-tien-ty-mua-chung-cu-nhung-song-nhu-an-nho-o-dau.jpg',
                'created_at'=>'2021-05-01'
            ],
            [
                'apartment_name'=>'trung cư vân an',
                'address'=>'Hoàn kiếm hà nội',
                'price'=>'10000',
                'general_information'=>'trung cư',
                'details'=>'trung cư 20 năm tại nội thành',
                'avatar'=>'https://moigioicanhan.com/wp-content/uploads/2020/01/can-ho-chung-cu-7-1024x576.jpg',
                'created_at'=>'2021-01-01'
            ],
            [
                'apartment_name'=>'trung cư vân an 2',
                'address'=>'Hoàn kiếm hà nội',
                'price'=>'12000',
                'general_information'=>'trung cư mini',
                'details'=>'trung cư 18 năm tại nội thành',
                'avatar'=>'https://photo-cms-plo.zadn.vn/Uploaded/2021/mrwqldxwp/2020_05_03/chungcu_bhnr.jpg',
                'created_at'=>'2021-02-01'
            ],
            [
                'apartment_name'=>'trung cư an bình',
                'address'=>'Duy hưng hà nội',
                'price'=>'23000',
                'general_information'=>'trung cư đẹp',
                'details'=>'trung cư 30 năm tại nội thành',
                'avatar'=>'https://photo.rever.vn/v2/get/2E37X7dkPFTuhD9UiBcCOkFmUFkpSQiLK2VEUhxVnBQ=/750x500/image.jpg',
                'created_at'=>'2021-03-01'
            ],
            [
                'apartment_name'=>'trung cư vân an 5',
                'address'=>'Hoàn kiếm hà nội',
                'price'=>'10000',
                'general_information'=>'trung cư',
                'details'=>'trung cư 20 năm tại nội thành',
                'avatar'=>'https://nhadatcanthoinfo.vn/wp-content/uploads/2021/03/Chung-Cu-Nam-Long-Hong-Phat.jpg',
                'created_at'=>'2021-06-01'
            ],[
                'apartment_name'=>'trung cư thái linh',
                'address'=>'Cầu giấy hà nội',
                'price'=>'40000',
                'general_information'=>'trung cư chất',
                'details'=>'trung cư 10 năm tại nội thành',
                'avatar'=>'https://giathuecanho.com/wp-content/uploads/2019/03/King-Center.jpg',
                'created_at'=>'2021-04-01'
            ],
            [
                'apartment_name'=>'trung cư vân an',
                'address'=>'Hoàn kiếm hà nội',
                'price'=>'10000',
                'general_information'=>'trung cư',
                'details'=>'trung cư 20 năm tại nội thành',
                'avatar'=>'https://moigioicanhan.com/wp-content/uploads/2020/01/can-ho-chung-cu-7-1024x576.jpg',
                'created_at'=>'2021-01-01'
            ],
            [
                'apartment_name'=>'trung cư vân an',
                'address'=>'hà đông hà nội',
                'price'=>'10000',
                'general_information'=>'trung cư',
                'details'=>'trung cư 7 năm tại ngoại thành',
                'avatar'=>'https://vnn-imgs-f.vgcloud.vn/2019/12/06/11/bo-tien-ty-mua-chung-cu-nhung-song-nhu-an-nho-o-dau.jpg',
                'created_at'=>'2021-05-01'
            ],
            [
                'apartment_name'=>'trung cư vân an',
                'address'=>'Hoàn kiếm hà nội',
                'price'=>'10000',
                'general_information'=>'trung cư',
                'details'=>'trung cư 20 năm tại nội thành',
                'avatar'=>'https://moigioicanhan.com/wp-content/uploads/2020/01/can-ho-chung-cu-7-1024x576.jpg',
                'created_at'=>'2021-01-01'
            ],
            [
                'apartment_name'=>'trung cư vân an 2',
                'address'=>'Hoàn kiếm hà nội',
                'price'=>'12000',
                'general_information'=>'trung cư mini',
                'details'=>'trung cư 18 năm tại nội thành',
                'avatar'=>'https://photo-cms-plo.zadn.vn/Uploaded/2021/mrwqldxwp/2020_05_03/chungcu_bhnr.jpg',
                'created_at'=>'2021-02-01'
            ],
            [
                'apartment_name'=>'trung cư an bình',
                'address'=>'Duy hưng hà nội',
                'price'=>'23000',
                'general_information'=>'trung cư đẹp',
                'details'=>'trung cư 30 năm tại nội thành',
                'avatar'=>'https://photo.rever.vn/v2/get/2E37X7dkPFTuhD9UiBcCOkFmUFkpSQiLK2VEUhxVnBQ=/750x500/image.jpg',
                'created_at'=>'2021-03-01'
            ],
            [
                'apartment_name'=>'trung cư vân an 5',
                'address'=>'Hoàn kiếm hà nội',
                'price'=>'10000',
                'general_information'=>'trung cư',
                'details'=>'trung cư 20 năm tại nội thành',
                'avatar'=>'https://nhadatcanthoinfo.vn/wp-content/uploads/2021/03/Chung-Cu-Nam-Long-Hong-Phat.jpg',
                'created_at'=>'2021-06-01'
            ],[
                'apartment_name'=>'trung cư thái linh',
                'address'=>'Cầu giấy hà nội',
                'price'=>'40000',
                'general_information'=>'trung cư chất',
                'details'=>'trung cư 10 năm tại nội thành',
                'avatar'=>'https://giathuecanho.com/wp-content/uploads/2019/03/King-Center.jpg',
                'created_at'=>'2021-04-01'
            ],
            [
                'apartment_name'=>'trung cư vân an',
                'address'=>'Hoàn kiếm hà nội',
                'price'=>'10000',
                'general_information'=>'trung cư',
                'details'=>'trung cư 20 năm tại nội thành',
                'avatar'=>'https://moigioicanhan.com/wp-content/uploads/2020/01/can-ho-chung-cu-7-1024x576.jpg',
                'created_at'=>'2021-01-01'
            ],
            [
                'apartment_name'=>'trung cư vân an',
                'address'=>'hà đông hà nội',
                'price'=>'10000',
                'general_information'=>'trung cư',
                'details'=>'trung cư 7 năm tại ngoại thành',
                'avatar'=>'https://vnn-imgs-f.vgcloud.vn/2019/12/06/11/bo-tien-ty-mua-chung-cu-nhung-song-nhu-an-nho-o-dau.jpg',
                'created_at'=>'2021-05-01'
            ],
            [
                'apartment_name'=>'trung cư vân an',
                'address'=>'Hoàn kiếm hà nội',
                'price'=>'10000',
                'general_information'=>'trung cư',
                'details'=>'trung cư 20 năm tại nội thành',
                'avatar'=>'https://moigioicanhan.com/wp-content/uploads/2020/01/can-ho-chung-cu-7-1024x576.jpg',
                'created_at'=>'2021-01-01'
            ],
            [
                'apartment_name'=>'trung cư vân an 2',
                'address'=>'Hoàn kiếm hà nội',
                'price'=>'12000',
                'general_information'=>'trung cư mini',
                'details'=>'trung cư 18 năm tại nội thành',
                'avatar'=>'https://photo-cms-plo.zadn.vn/Uploaded/2021/mrwqldxwp/2020_05_03/chungcu_bhnr.jpg',
                'created_at'=>'2021-02-01'
            ],
            [
                'apartment_name'=>'trung cư an bình',
                'address'=>'Duy hưng hà nội',
                'price'=>'23000',
                'general_information'=>'trung cư đẹp',
                'details'=>'trung cư 30 năm tại nội thành',
                'avatar'=>'https://photo.rever.vn/v2/get/2E37X7dkPFTuhD9UiBcCOkFmUFkpSQiLK2VEUhxVnBQ=/750x500/image.jpg',
                'created_at'=>'2021-03-01'
            ],
            [
                'apartment_name'=>'trung cư vân an 5',
                'address'=>'Hoàn kiếm hà nội',
                'price'=>'10000',
                'general_information'=>'trung cư',
                'details'=>'trung cư 20 năm tại nội thành',
                'avatar'=>'https://nhadatcanthoinfo.vn/wp-content/uploads/2021/03/Chung-Cu-Nam-Long-Hong-Phat.jpg',
                'created_at'=>'2021-06-01'
            ],[
                'apartment_name'=>'trung cư thái linh',
                'address'=>'Cầu giấy hà nội',
                'price'=>'40000',
                'general_information'=>'trung cư chất',
                'details'=>'trung cư 10 năm tại nội thành',
                'avatar'=>'https://giathuecanho.com/wp-content/uploads/2019/03/King-Center.jpg',
                'created_at'=>'2021-04-01'
            ],
            [
                'apartment_name'=>'trung cư vân an',
                'address'=>'Hoàn kiếm hà nội',
                'price'=>'10000',
                'general_information'=>'trung cư',
                'details'=>'trung cư 20 năm tại nội thành',
                'avatar'=>'https://moigioicanhan.com/wp-content/uploads/2020/01/can-ho-chung-cu-7-1024x576.jpg',
                'created_at'=>'2021-01-01'
            ],
            [
                'apartment_name'=>'trung cư vân an',
                'address'=>'hà đông hà nội',
                'price'=>'10000',
                'general_information'=>'trung cư',
                'details'=>'trung cư 7 năm tại ngoại thành',
                'avatar'=>'https://vnn-imgs-f.vgcloud.vn/2019/12/06/11/bo-tien-ty-mua-chung-cu-nhung-song-nhu-an-nho-o-dau.jpg',
                'created_at'=>'2021-05-01'
            ],
        ]);
    }
}
