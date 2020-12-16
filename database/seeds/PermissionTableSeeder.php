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
    'اضافة مستخدم',
    'تعديل مستخدم',
    'حذف مستخدم',

    'عرض صلاحية',
    'اضافة صلاحية',
    'تعديل صلاحية',
    'حذف صلاحية',
];
foreach ($permissions as $permission) {
Permission::create(['name' => $permission]);
}
}
}
