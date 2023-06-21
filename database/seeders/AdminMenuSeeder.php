<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_menus')->insert([
            "id" => null,
            "name" => "Quản lý bài viết",
            "parent" => "0",
            "order" => "1",
            "route" => null,
            "target_parent" => "baiviet",
            "isActive" => "1",
            "created_at" => time(),
            "updated_at" => time()
        ]);
        DB::table('admin_menus')->insert([
            "id" => null,
            "name" => "Thêm bài viết",
            "parent" => "1",
            "order" => "1",
            "route" => "admin.posts.index",
            "target_parent" => "baiviet",
            "isActive" => "1",
            "created_at" => time(),
            "updated_at" => time()
        ]);
        DB::table('admin_menus')->insert([
            "id" => null,
            "name" => "Quản lý slider",
            "parent" => "0",
            "order" => "2",
            "route" => null,
            "target_parent" => "slider",
            "isActive" => "1",
            "created_at" => time(),
            "updated_at" => time()
        ]);
        DB::table('admin_menus')->insert([
            "id" => null,
            "name" => "Thêm slider",
            "parent" => "3",
            "order" => "1",
            "route" => "admin.sliders.index",
            "target_parent" => "slider",
            "isActive" => "1",
            "created_at" => time(),
            "updated_at" => time()
        ]);
        DB::table('admin_menus')->insert([
            "id" => null,
            "name" => "Quản lý menu",
            "parent" => "0",
            "order" => "3",
            "route" => null,
            "target_parent" => "menu",
            "isActive" => "1",
            "created_at" => time(),
            "updated_at" => time()
        ]);
        DB::table('admin_menus')->insert([
            "id" => null,
            "name" => "Thêm menu",
            "parent" => "5",
            "order" => "1",
            "route" => "admin.menus.index",
            "target_parent" => "menu",
            "isActive" => "1",
            "created_at" => time(),
            "updated_at" => time()
        ]);
        DB::table('admin_menus')->insert([
            "id" => null,
            "name" => "Thêm sản phẩm",
            "parent" => "7",
            "order" => "1",
            "route" => "admin.products.index",
            "target_parent" => "sanpham",
            "isActive" => "1",
            "created_at" => time(),
            "updated_at" => time()
        ]);
        DB::table('admin_menus')->insert([
            "id" => null,
            "name" => "Thêm danh mục",
            "parent" => "7",
            "order" => "2",
            "route" => "admin.categories.index",
            "target_parent" => "sanpham",
            "isActive" => "1",
            "created_at" => time(),
            "updated_at" => time()
        ]);
        DB::table('admin_menus')->insert([
            "id" => null,
            "name" => "Quản lý người dùng",
            "parent" => "0",
            "order" => "5",
            "route" => null,
            "target_parent" => "nguoidung",
            "isActive" => "1",
            "created_at" => time(),
            "updated_at" => time()
        ]);
        DB::table('admin_menus')->insert([
            "id" => null,
            "name" => "Thêm người dùng",
            "parent" => "10",
            "order" => "1",
            "route" => "admin.users.index",
            "target_parent" => "nguoidung",
            "isActive" => "1",
            "created_at" => time(),
            "updated_at" => time()
        ]);
    }
}
