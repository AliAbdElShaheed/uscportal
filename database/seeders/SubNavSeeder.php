<?php

namespace Database\Seeders;

use App\Models\SubNav;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubNavSeeder extends Seeder
{
    public function run()
    {
        DB::table('navigation_menus')->delete();


        $sub_nav = SubNav::create([
            'nav_menu_id' => 3,
            'name' => [
                'en' => 'About University',
                'ar' => 'عن الجامعة'
            ],
            'status' => 1,
            'priority' => 1,
            'href' => "{{route('front.about')}}",
            'special' => 0,
        ]);

        $sub_nav = SubNav::create([
            'nav_menu_id' => 3,
            'name' => [
                'en' => 'University Management',
                'ar' => 'إدارة الجامعة'
            ],
            'status' => 1,
            'priority' => 2,
            'href' => "{{route('front.management')}}",
            'special' => 0,
        ]);


        $sub_nav = SubNav::create([
            'nav_menu_id' => 3,
            'name' => [
                'en' => 'Main University Sectors',
                'ar' => 'قطاعات الجامعة الرئيسية'
            ],
            'status' => 0,
            'priority' => 3,
            'href' => '#',
            'special' => 0,
        ]);


        $sub_nav = SubNav::create([
            'nav_menu_id' => 6,
            'name' => [
                'en' => 'Colleges & Institutes',
                'ar' => 'الكليات والمعاهد'
            ],
            'status' => 1,
            'priority' => 4,
            'href' => "{{route('front.colleges')}}",
            'special' => 0,
        ]);


        $sub_nav = SubNav::create([
            'nav_menu_id' => 6,
            'name' => [
                'en' => 'Units & Centers',
                'ar' => 'مراكز ووحدات'
            ],
            'status' => 1,
            'priority' => 5,
            'href' => "{{route('front.istc')}}",
            'special' => 0,
        ]);


        $sub_nav = SubNav::create([
            'nav_menu_id' => 6,
            'name' => [
                'en' => 'Electronic Services',
                'ar' => 'الخدمات الإلكترونية'
            ],
            'status' => 0,
            'priority' => 6,
            'href' => "#",
            'special' => 0,
        ]);


        $sub_nav = SubNav::create([
            'nav_menu_id' => 6,
            'name' => [
                'en' => 'هذه الموقع تجريبى للدخول على الموقع القديم للجامعة',
                'ar' => 'هذه الموقع تجريبى للدخول على الموقع القديم للجامعة'
            ],
            'status' => 1,
            'priority' => 7,
            'href' => "http://demo.usc.edu.eg",
            'special' => 1,
        ]);

    } // end of Run


} // End of Seeder
