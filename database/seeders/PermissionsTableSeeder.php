<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'auth_profile_edit',
            ],
            [
                'id'    => 2,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 3,
                'title' => 'permission_create',
            ],
            [
                'id'    => 4,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 5,
                'title' => 'permission_show',
            ],
            [
                'id'    => 6,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 7,
                'title' => 'permission_access',
            ],
            [
                'id'    => 8,
                'title' => 'role_create',
            ],
            [
                'id'    => 9,
                'title' => 'role_edit',
            ],
            [
                'id'    => 10,
                'title' => 'role_show',
            ],
            [
                'id'    => 11,
                'title' => 'role_delete',
            ],
            [
                'id'    => 12,
                'title' => 'role_access',
            ],
            [
                'id'    => 13,
                'title' => 'user_create',
            ],
            [
                'id'    => 14,
                'title' => 'user_edit',
            ],
            [
                'id'    => 15,
                'title' => 'user_show',
            ],
            [
                'id'    => 16,
                'title' => 'user_delete',
            ],
            [
                'id'    => 17,
                'title' => 'user_access',
            ],
            [
                'id'    => 18,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 19,
                'title' => 'user_alert_edit',
            ],
            [
                'id'    => 20,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 21,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 22,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 23,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 24,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 25,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 26,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 27,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 28,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 29,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 30,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 31,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 32,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 33,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 34,
                'title' => 'task_create',
            ],
            [
                'id'    => 35,
                'title' => 'task_edit',
            ],
            [
                'id'    => 36,
                'title' => 'task_show',
            ],
            [
                'id'    => 37,
                'title' => 'task_delete',
            ],
            [
                'id'    => 38,
                'title' => 'task_access',
            ],
            [
                'id'    => 39,
                'title' => 'task_calendar_access',
            ],
            [
                'id'    => 40,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 41,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 42,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 43,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 44,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 45,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 46,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 47,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 48,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 49,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 50,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 51,
                'title' => 'system_calendar_access',
            ],
            [
                'id'    => 52,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 53,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 54,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 55,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 56,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 57,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 58,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 59,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 60,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 61,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 62,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 63,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 64,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 65,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 66,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 67,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 68,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 69,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 70,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 71,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 72,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 73,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 74,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 75,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 76,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 77,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 78,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 79,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 80,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 81,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 82,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 83,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 84,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 85,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 86,
                'title' => 'product_create',
            ],
            [
                'id'    => 87,
                'title' => 'product_edit',
            ],
            [
                'id'    => 88,
                'title' => 'product_show',
            ],
            [
                'id'    => 89,
                'title' => 'product_delete',
            ],
            [
                'id'    => 90,
                'title' => 'product_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
