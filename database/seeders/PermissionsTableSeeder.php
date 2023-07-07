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
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'asset_management_access',
            ],
            [
                'id'    => 18,
                'title' => 'asset_category_create',
            ],
            [
                'id'    => 19,
                'title' => 'asset_category_edit',
            ],
            [
                'id'    => 20,
                'title' => 'asset_category_show',
            ],
            [
                'id'    => 21,
                'title' => 'asset_category_delete',
            ],
            [
                'id'    => 22,
                'title' => 'asset_category_access',
            ],
            [
                'id'    => 23,
                'title' => 'asset_location_create',
            ],
            [
                'id'    => 24,
                'title' => 'asset_location_edit',
            ],
            [
                'id'    => 25,
                'title' => 'asset_location_show',
            ],
            [
                'id'    => 26,
                'title' => 'asset_location_delete',
            ],
            [
                'id'    => 27,
                'title' => 'asset_location_access',
            ],
            [
                'id'    => 28,
                'title' => 'asset_status_create',
            ],
            [
                'id'    => 29,
                'title' => 'asset_status_edit',
            ],
            [
                'id'    => 30,
                'title' => 'asset_status_show',
            ],
            [
                'id'    => 31,
                'title' => 'asset_status_delete',
            ],
            [
                'id'    => 32,
                'title' => 'asset_status_access',
            ],
            [
                'id'    => 33,
                'title' => 'asset_create',
            ],
            [
                'id'    => 34,
                'title' => 'asset_edit',
            ],
            [
                'id'    => 35,
                'title' => 'asset_show',
            ],
            [
                'id'    => 36,
                'title' => 'asset_delete',
            ],
            [
                'id'    => 37,
                'title' => 'asset_access',
            ],
            [
                'id'    => 38,
                'title' => 'assets_history_access',
            ],
            [
                'id'    => 39,
                'title' => 'agent_create',
            ],
            [
                'id'    => 40,
                'title' => 'agent_edit',
            ],
            [
                'id'    => 41,
                'title' => 'agent_show',
            ],
            [
                'id'    => 42,
                'title' => 'agent_delete',
            ],
            [
                'id'    => 43,
                'title' => 'agent_access',
            ],
            [
                'id'    => 44,
                'title' => 'marchant_create',
            ],
            [
                'id'    => 45,
                'title' => 'marchant_edit',
            ],
            [
                'id'    => 46,
                'title' => 'marchant_show',
            ],
            [
                'id'    => 47,
                'title' => 'marchant_delete',
            ],
            [
                'id'    => 48,
                'title' => 'marchant_access',
            ],
            [
                'id'    => 49,
                'title' => 'interface_panel_access',
            ],
            [
                'id'    => 50,
                'title' => 'active_user_create',
            ],
            [
                'id'    => 51,
                'title' => 'active_user_edit',
            ],
            [
                'id'    => 52,
                'title' => 'active_user_show',
            ],
            [
                'id'    => 53,
                'title' => 'active_user_delete',
            ],
            [
                'id'    => 54,
                'title' => 'active_user_access',
            ],
            [
                'id'    => 55,
                'title' => 'interfacepane_create',
            ],
            [
                'id'    => 56,
                'title' => 'interfacepane_edit',
            ],
            [
                'id'    => 57,
                'title' => 'interfacepane_show',
            ],
            [
                'id'    => 58,
                'title' => 'interfacepane_delete',
            ],
            [
                'id'    => 59,
                'title' => 'interfacepane_access',
            ],
            [
                'id'    => 60,
                'title' => 'marchant_panel_create',
            ],
            [
                'id'    => 61,
                'title' => 'marchant_panel_edit',
            ],
            [
                'id'    => 62,
                'title' => 'marchant_panel_show',
            ],
            [
                'id'    => 63,
                'title' => 'marchant_panel_delete',
            ],
            [
                'id'    => 64,
                'title' => 'marchant_panel_access',
            ],
            [
                'id'    => 65,
                'title' => 'agent_panel_access',
            ],
            [
                'id'    => 66,
                'title' => 'marchant_panelmenu_access',
            ],
            [
                'id'    => 67,
                'title' => 'active_agent_create',
            ],
            [
                'id'    => 68,
                'title' => 'active_agent_edit',
            ],
            [
                'id'    => 69,
                'title' => 'active_agent_show',
            ],
            [
                'id'    => 70,
                'title' => 'active_agent_delete',
            ],
            [
                'id'    => 71,
                'title' => 'active_agent_access',
            ],
            [
                'id'    => 72,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 73,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 74,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 75,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 76,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 77,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 78,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 79,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 80,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 81,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 82,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 83,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 84,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 85,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 86,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 87,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 88,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 89,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 90,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 91,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 92,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 93,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 94,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 95,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 96,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 97,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 98,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 99,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 100,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 101,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 102,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 103,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 104,
                'title' => 'product_create',
            ],
            [
                'id'    => 105,
                'title' => 'product_edit',
            ],
            [
                'id'    => 106,
                'title' => 'product_show',
            ],
            [
                'id'    => 107,
                'title' => 'product_delete',
            ],
            [
                'id'    => 108,
                'title' => 'product_access',
            ],
            [
                'id'    => 109,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 110,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 111,
                'title' => 'team_create',
            ],
            [
                'id'    => 112,
                'title' => 'team_edit',
            ],
            [
                'id'    => 113,
                'title' => 'team_show',
            ],
            [
                'id'    => 114,
                'title' => 'team_delete',
            ],
            [
                'id'    => 115,
                'title' => 'team_access',
            ],
            [
                'id'    => 116,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 117,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 118,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 119,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 120,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 121,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 122,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 123,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 124,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 125,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 126,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 127,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 128,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 129,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 130,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 131,
                'title' => 'task_create',
            ],
            [
                'id'    => 132,
                'title' => 'task_edit',
            ],
            [
                'id'    => 133,
                'title' => 'task_show',
            ],
            [
                'id'    => 134,
                'title' => 'task_delete',
            ],
            [
                'id'    => 135,
                'title' => 'task_access',
            ],
            [
                'id'    => 136,
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => 137,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 138,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 139,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 140,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 141,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 142,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 143,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 144,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 145,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 146,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 147,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 148,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 149,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 150,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 151,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 152,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 153,
                'title' => 'faq_management_access',
            ],
            [
                'id'    => 154,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 155,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 156,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 157,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 158,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 159,
                'title' => 'faq_question_create',
            ],
            [
                'id'    => 160,
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => 161,
                'title' => 'faq_question_show',
            ],
            [
                'id'    => 162,
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => 163,
                'title' => 'faq_question_access',
            ],
            [
                'id'    => 164,
                'title' => 'expense_management_access',
            ],
            [
                'id'    => 165,
                'title' => 'expense_category_create',
            ],
            [
                'id'    => 166,
                'title' => 'expense_category_edit',
            ],
            [
                'id'    => 167,
                'title' => 'expense_category_show',
            ],
            [
                'id'    => 168,
                'title' => 'expense_category_delete',
            ],
            [
                'id'    => 169,
                'title' => 'expense_category_access',
            ],
            [
                'id'    => 170,
                'title' => 'income_category_create',
            ],
            [
                'id'    => 171,
                'title' => 'income_category_edit',
            ],
            [
                'id'    => 172,
                'title' => 'income_category_show',
            ],
            [
                'id'    => 173,
                'title' => 'income_category_delete',
            ],
            [
                'id'    => 174,
                'title' => 'income_category_access',
            ],
            [
                'id'    => 175,
                'title' => 'expense_create',
            ],
            [
                'id'    => 176,
                'title' => 'expense_edit',
            ],
            [
                'id'    => 177,
                'title' => 'expense_show',
            ],
            [
                'id'    => 178,
                'title' => 'expense_delete',
            ],
            [
                'id'    => 179,
                'title' => 'expense_access',
            ],
            [
                'id'    => 180,
                'title' => 'income_create',
            ],
            [
                'id'    => 181,
                'title' => 'income_edit',
            ],
            [
                'id'    => 182,
                'title' => 'income_show',
            ],
            [
                'id'    => 183,
                'title' => 'income_delete',
            ],
            [
                'id'    => 184,
                'title' => 'income_access',
            ],
            [
                'id'    => 185,
                'title' => 'expense_report_create',
            ],
            [
                'id'    => 186,
                'title' => 'expense_report_edit',
            ],
            [
                'id'    => 187,
                'title' => 'expense_report_show',
            ],
            [
                'id'    => 188,
                'title' => 'expense_report_delete',
            ],
            [
                'id'    => 189,
                'title' => 'expense_report_access',
            ],
            [
                'id'    => 190,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 191,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 192,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 193,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 194,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 195,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 196,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 197,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 198,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 199,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 200,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 201,
                'title' => 'client_management_setting_access',
            ],
            [
                'id'    => 202,
                'title' => 'currency_create',
            ],
            [
                'id'    => 203,
                'title' => 'currency_edit',
            ],
            [
                'id'    => 204,
                'title' => 'currency_show',
            ],
            [
                'id'    => 205,
                'title' => 'currency_delete',
            ],
            [
                'id'    => 206,
                'title' => 'currency_access',
            ],
            [
                'id'    => 207,
                'title' => 'transaction_type_create',
            ],
            [
                'id'    => 208,
                'title' => 'transaction_type_edit',
            ],
            [
                'id'    => 209,
                'title' => 'transaction_type_show',
            ],
            [
                'id'    => 210,
                'title' => 'transaction_type_delete',
            ],
            [
                'id'    => 211,
                'title' => 'transaction_type_access',
            ],
            [
                'id'    => 212,
                'title' => 'income_source_create',
            ],
            [
                'id'    => 213,
                'title' => 'income_source_edit',
            ],
            [
                'id'    => 214,
                'title' => 'income_source_show',
            ],
            [
                'id'    => 215,
                'title' => 'income_source_delete',
            ],
            [
                'id'    => 216,
                'title' => 'income_source_access',
            ],
            [
                'id'    => 217,
                'title' => 'client_status_create',
            ],
            [
                'id'    => 218,
                'title' => 'client_status_edit',
            ],
            [
                'id'    => 219,
                'title' => 'client_status_show',
            ],
            [
                'id'    => 220,
                'title' => 'client_status_delete',
            ],
            [
                'id'    => 221,
                'title' => 'client_status_access',
            ],
            [
                'id'    => 222,
                'title' => 'project_status_create',
            ],
            [
                'id'    => 223,
                'title' => 'project_status_edit',
            ],
            [
                'id'    => 224,
                'title' => 'project_status_show',
            ],
            [
                'id'    => 225,
                'title' => 'project_status_delete',
            ],
            [
                'id'    => 226,
                'title' => 'project_status_access',
            ],
            [
                'id'    => 227,
                'title' => 'client_management_access',
            ],
            [
                'id'    => 228,
                'title' => 'client_create',
            ],
            [
                'id'    => 229,
                'title' => 'client_edit',
            ],
            [
                'id'    => 230,
                'title' => 'client_show',
            ],
            [
                'id'    => 231,
                'title' => 'client_delete',
            ],
            [
                'id'    => 232,
                'title' => 'client_access',
            ],
            [
                'id'    => 233,
                'title' => 'project_create',
            ],
            [
                'id'    => 234,
                'title' => 'project_edit',
            ],
            [
                'id'    => 235,
                'title' => 'project_show',
            ],
            [
                'id'    => 236,
                'title' => 'project_delete',
            ],
            [
                'id'    => 237,
                'title' => 'project_access',
            ],
            [
                'id'    => 238,
                'title' => 'note_create',
            ],
            [
                'id'    => 239,
                'title' => 'note_edit',
            ],
            [
                'id'    => 240,
                'title' => 'note_show',
            ],
            [
                'id'    => 241,
                'title' => 'note_delete',
            ],
            [
                'id'    => 242,
                'title' => 'note_access',
            ],
            [
                'id'    => 243,
                'title' => 'document_create',
            ],
            [
                'id'    => 244,
                'title' => 'document_edit',
            ],
            [
                'id'    => 245,
                'title' => 'document_show',
            ],
            [
                'id'    => 246,
                'title' => 'document_delete',
            ],
            [
                'id'    => 247,
                'title' => 'document_access',
            ],
            [
                'id'    => 248,
                'title' => 'transaction_create',
            ],
            [
                'id'    => 249,
                'title' => 'transaction_edit',
            ],
            [
                'id'    => 250,
                'title' => 'transaction_show',
            ],
            [
                'id'    => 251,
                'title' => 'transaction_delete',
            ],
            [
                'id'    => 252,
                'title' => 'transaction_access',
            ],
            [
                'id'    => 253,
                'title' => 'client_report_create',
            ],
            [
                'id'    => 254,
                'title' => 'client_report_edit',
            ],
            [
                'id'    => 255,
                'title' => 'client_report_show',
            ],
            [
                'id'    => 256,
                'title' => 'client_report_delete',
            ],
            [
                'id'    => 257,
                'title' => 'client_report_access',
            ],
            [
                'id'    => 258,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
