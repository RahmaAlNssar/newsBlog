<?php
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionTableSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
$permissions = [
    'المشرفين',
    'قائمة المشرفين',
    'صلاحيات المشرفين',
    'اضافة مستخدم',
    'تعديل مستخدم',
    'حذف مستخدم',

    'عرض صلاحية',
    'اضافة صلاحية',
    'تعديل صلاحية',
    'حذف صلاحية',
    'عرض الأنشطة',
    'مشاركة فيسبوك',
    'قائمة الأقسام',
    'اضافة قسم',
    'حذف قسم',
    'تعديل قسم',
    'المقالات',
    'اضافة مقالة',
    'العمليات على المقالات',
    'حذف مقالة',
    'تعديل مقالة',
    ' رفع صورة',

];
foreach ($permissions as $permission) {
Permission::create(['name' => $permission]);
}
}
}
