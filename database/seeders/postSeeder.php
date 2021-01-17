<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Controllers\DateTime;
class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $content="Bây Giờ chúng ta có thể mở  routes/web.php và thử tạo 1 url là ‘xin-chao’

    Bây giờ chúng ta Bật Xampp sau đó mở trình duyệt gõ http://localhost/Thaygiaoquocdan/public/xin-chao
    
    Trong đó http://localhost/Thaygiaoquocdan/public/ đóng voi trò là tên miền mà chúng ta mua. Ở buổi cuối mình sẽ hướng dẫn các bạn upload web lên hosting
    
    VD: tên miền của bạn là thaygiaoquocdan.vn
    
    lúc đó thay vì gõ :http://localhost/Thaygiaoquocdan/public/xin-chao các bạn chỉ cần gõ :  thaygiaoquocdan.vn/xin-chao   thui nhé!";
   
        //
        DB::table('post')->insert([
            ['title' => 'LARAVEL 02 : TÌM HIỂU VỀ ROUTE TRONG LARAVEL','content' => $content,'view'=>'200','image_title'=>'1.jpg','user_id'=>'1','status'=>'1','remember_token'=> 0],	
            ['title' => 'Laravel 03 : Group Router trong laravel','content' => $content,'view'=>'200','image_title'=>'1.jpg','user_id'=>'1','status'=>'1','remember_token'=> 0],	
            ['title' => 'Laravel 04 : Controller trong laravel','content' => $content,'view'=>'200','image_title'=>'1.jpg','user_id'=>'1','status'=>'1','remember_token'=> 0],	
            ['title' => 'Laravel 05 : View trong laravel','content' => $content,'view'=>'200','image_title'=>'1.jpg','user_id'=>'1','status'=>'1','remember_token'=> 0],	
            ['title' => 'Laravel 06 : Truyền tham số từ Controller sang View','content' => $content,'view'=>'200','image_title'=>'1.jpg','user_id'=>'1','status'=>'1','remember_token'=> 0],	
            ['title' => 'Laravel 07 : Truyền dữ liệu ô input từ View .php sang Controller','content' => $content,'view'=>'200','image_title'=>'1.jpg','user_id'=>'1','status'=>'1','remember_token'=> 0],	
            ['title' => 'Laravel 08 : Blade Template trong laravel','content' => $content,'view'=>'200','image_title'=>'1.jpg','user_id'=>'1','status'=>'1','remember_token'=> 0],	
            ['title' => 'Laravel 09 : Cú pháp có thể sử dụng trong file blade.php của laravel','content' => $content,'view'=>'200','image_title'=>'1.jpg','user_id'=>'2','status'=>'1','remember_token'=> 0],	
            ['title' => 'Laravel 10 : Hiển thị nội dung từ controller sang View sử dụng cú pháp blade của laravel','content' => $content,'view'=>'200','image_title'=>'1.jpg','user_id'=>'2','status'=>'1','remember_token'=> 0],	
            ['title' => 'Laravel 11 : Tránh lỗi file css,js khi blade template','content' => $content,'view'=>'200','image_title'=>'1.jpg','user_id'=>'2','status'=>'1','remember_token'=> 0],	
            ['title' => 'Laravel 12 : Validate,Validator trong laravel','content' => $content,'view'=>'200','image_title'=>'1.jpg','user_id'=>'2','status'=>'1','remember_token'=> 0],	
            ['title' => 'Laravel 13 : Hiển Thị Thông báo lỗi – validate Trong Laravel.','content' => $content,'view'=>'200','image_title'=>'1.jpg','user_id'=>'2','status'=>'1','remember_token'=> 0],	
            ['title' => 'Laravel 14 : Clear Code Validate bằng Form Request trong laravel','content' => $content,'view'=>'200','image_title'=>'1.jpg','user_id'=>'3','status'=>'1','remember_token'=> 0],	
            ['title' => 'Laravel 15 : Sử dụng Schema builder Thao tác với bảng','content' => $content,'view'=>'200','image_title'=>'1.jpg','user_id'=>'3','status'=>'1','remember_token'=> 0],	
            ['title' => 'Laravel 16 : Quản lý bảng bằng Migration trong laravel','content' => $content,'view'=>'200','image_title'=>'1.jpg','user_id'=>'3','status'=>'1','remember_token'=> 0],	
            ['title' => 'Laravel 17 : Query builder thực thi truy vấn CSDL','content' => $content,'view'=>'200','image_title'=>'1.jpg','user_id'=>'3','status'=>'1','remember_token'=> 0],	
            ['title' => 'Laravel 18 :Tạo dữ liệu mẫu với Seeding','content' => $content,'view'=>'200','image_title'=>'1.jpg','user_id'=>'3','status'=>'1','remember_token'=> 0],	
            ['title' => 'LARAVEL 02 :Laravel 19 :Phân trang trong laravel','content' => $content,'view'=>'200','image_title'=>'1.jpg','user_id'=>'3','status'=>'1','remember_token'=> 0],	
            ['title' => 'LARAVEL 02 : Laravel 20 :Tìm hiểu về session trong laravel','content' => $content,'view'=>'200','image_title'=>'1.jpg','user_id'=>'3','status'=>'1','remember_token'=> 0],	
    ]);
    }
}
