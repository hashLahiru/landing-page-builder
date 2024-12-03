<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ComponentFieldValue;


// Nithya Jayasooriya - 2024/12/    
class navbarSeeder extends Seeder
{
    public function run()
    {
        $component = Component::create([
            'name' => 'navbar',
            'description' => 'This is the navbar section of the landing page',
            
        
        ]);

        $fields = [
            'nav_title',
            'nav_title_url',
            'nav_img',
            'nav_text1',
            'nav_text1_url',
            'nav_text1A',
            'nav_text1A_url',
            'nav_text1B',
            'nav_text1B_url',
            'nav_text1C',
            'nav_text1C_url',
            'nav_text2',
            'nav_text2_url',
            'nav_text2A',
            'nav_text2A_url',
            'nav_text2A_icon',
            'nav_text2B',
            'nav_text2B_url',
            'nav_text2B_icon',
            'nav_text2C',
            'nav_text2C_url',
            'nav_text2C_icon',
            'nav_text2D',
            'nav_text2D_url',
            'nav_text2D_icon',
            'nav_text2E',
            'nav_text2E_url',
            'nav_text2E_icon',
            'nav_text2F',
            'nav_text2F_url',
            'nav_text2F_icon',
            'nav_text2G',
            'nav_text2G_url',
            'nav_text2G_icon',
            'nav_text2H',
            'nav_text2H_url',
            'nav_text2H_icon',



            // 'nav_text3',
            // 'nav_text3_url',
            // 'nav_text3A',
            // 'nav_text3A_url',
            // 'nav_text3A_icon',
            // 'nav_text3B',
            // 'nav_text3B_url',
            // 'nav_text3B_icon',
            // 'nav_text3C',
            // 'nav_text3C_url',
            // 'nav_text3C_icon',
            // 'nav_text3D',
            // 'nav_text3D_url',
            // 'nav_text3D_icon',
            // 'nav_text3E',
            // 'nav_text3E_url',
            // 'nav_text3E_icon',
            // 'nav_text3F',
            // 'nav_text3F_url',
            // 'nav_text3F_icon',
            // 'nav_text3G',
            // 'nav_text3G_url',
            // 'nav_text3G_icon',
            // 'nav_text3H',
            // 'nav_text3H_url',
            // 'nav_text3H_icon',
            // 'nav_text3I',
            // 'nav_text3I_url',
            // 'nav_text3I_icon',
            // 'nav_text3J',
            // 'nav_text3J_url',
            // 'nav_text3J_icon',
            // 'nav_text3K',
            // 'nav_text3K_url',
            // 'nav_text3K_icon',
            // 'nav_text3L',
            // 'nav_text3L_url',
            // 'nav_text3L_icon',
            // 'nav_text3M',
            // 'nav_text3M_url',
            // 'nav_text3M_icon',
            // 'nav_text3N',
            // 'nav_text3N_url',
            // 'nav_text3N_icon',
            // 'nav_text3O',
            // 'nav_text3O_url',
            // 'nav_text3O_icon',
            // 'nav_btn_text',
            // 'nav_btn_icon',
            // 'nav_btn_url',



        
        ];

        foreach ($fields as $field) {
            $componentField = ComponentField::create([
                'component_id' => $component->id,
                'field_name' => $field,
            ]);

            $fieldValues = $this->getSampleValues($field);

            foreach ($fieldValues as $value) {
                ComponentFieldValue::create([
                    'component_field_id' => $componentField->id,
                    'value' => $value,
                ]);
            }
        }
    }

    private function getSampleValues($field)
    {
        $sampleValues = [
              
            'nav_title' => [' Paper Kit 2 Pro'],
            'nav_title_url' => ['../index-2.html'],
            'nav_img' => ['../assets/img/blurred-image-1.jpg'],
            'nav_text1' => ['Components'],
            'nav_text1_url' => ['#'],
            'nav_text1A' => ['All Components'],
            'nav_text1A_url' => ['../index-2.html'],
            'nav_text1B' => ['Presentation'],
            'nav_text1B_url' => ['../presentation.html'],
            'nav_text1C' => ['Documentation'],
            'nav_text1C_url' => ['../docs/1.0/getting-started/introduction.html'],
            'nav_text2' => [' Sections'],
            'nav_text2_url' => ['#'],
            'nav_text2A' => ['Headers'],
            'nav_text2A_url' => ['../sections.html#headers'],
            'nav_text2A_icon' => ['nc-icon nc-tile-56'],
            'nav_text2B' => ['Features'],
            'nav_text2B_url' => ['../sections.html#features'],
            'nav_text2B_icon' => ['nc-icon nc-settings'],
            'nav_text2C' => ['Blogs'],
            'nav_text2C_url' => ['../sections.html#blogs'],
            'nav_text2C_icon' => ['nc-icon nc-bullet-list-67'],
            'nav_text2D' => ['Teams'],
            'nav_text2D_url' => ['../sections.html#teams'],
            'nav_text2D_icon' => ['nc-icon nc-single-02'],
            'nav_text2E' => ['Projects'],
            'nav_text2E_url' => ['../sections.html#projects'],
            'nav_text2E_icon' => ['nc-icon nc-calendar-60'],
            'nav_text2F' => ['Pricing'],
            'nav_text2F_url' => ['../sections.html#pricing'],
            'nav_text2F_icon' => ['nc-icon nc-money-coins'],
            'nav_text2G' => ['Testimonials'],
            'nav_text2G_url' => ['../sections.html#testimonials'],
            'nav_text2G_icon' => ['nc-icon nc-badge'],
            'nav_text2H' => ['Contact Us'],
            'nav_text2H_url' => ['../sections.html#contactus'],
            'nav_text2H_icon' => ['nc-icon nc-mobile'],



            // 'nav_text3' => ['Examples'],
            // 'nav_text3_url' => ['#'],
            // 'nav_text3A' => ['About-us'],
            // 'nav_text3A_url' => ['about-us.html'],
            // 'nav_text3A_icon' => ['nc-icon nc-bank'],
            // 'nav_text3B' => ['Add Product'],
            // 'nav_text3B_url' => ['add-product.html'],
            // 'nav_text3B_icon' => ['nc-icon nc-basket'],
            // 'nav_text3C' => ['Blog Post'],
            // 'nav_text3C_url' => ['blog-post.html'],
            // 'nav_text3C_icon' => ['nc-icon nc-badge'],
            // 'nav_text3D' => [' Blog Posts'],
            // 'nav_text3D_url' => ['blog-posts.html'],
            // 'nav_text3D_icon' => ['nc-icon nc-bullet-list-67'],
            // 'nav_text3E' => ['Contact Us'],
            // 'nav_text3E_url' => ['contact-us.html'],
            // 'nav_text3E_icon' => ['nc-icon nc-mobile'],
            // 'nav_text3F' => ['Discover'],
            // 'nav_text3F_url' => ['discover.html'],
            // 'nav_text3F_icon' => ['nc-icon nc-world-2'],
            // 'nav_text3G' => ['Ecommerce'],
            // 'nav_text3G_url' => ['ecommerce.html'],
            // 'nav_text3G_icon' => ['nc-icon nc-send'],
            // 'nav_text3H' => ['Landing Page'],
            // 'nav_text3H_url' => ['landing-page.html'],
            // 'nav_text3H_icon' => ['nc-icon nc-spaceship'],
            // 'nav_text3I' => ['Login Page'],
            // 'nav_text3I_url' => ['login-page.html'],
            // 'nav_text3I_icon' => ['nc-icon nc-lock-circle-open'],
            // 'nav_text3J' => [' Product Page'],
            // 'nav_text3J_url' => ['product-page.htm'],
            // 'nav_text3J_icon' => ['nc-icon nc-album-2'],
            // 'nav_text3K' => [' Profile Page'],
            // 'nav_text3K_url' => ['profile-page.html'],
            // 'nav_text3K_icon' => ['nc-icon nc-single-02'],
            // 'nav_text3L' => [' Register Page'],
            // 'nav_text3L_url' => ['register-page.html'],
            // 'nav_text3L_icon' => ['nc-icon nc-bookmark-2'],
            // 'nav_text3M' => ['Search Page'],
            // 'nav_text3M_url' => ['search-with-sidebar.html'],
            // 'nav_text3M_icon' => ['nc-icon nc-zoom-split'],
            // 'nav_text3N' => ['Settings Page'],
            // 'nav_text3N_url' => ['settings.html'],
            // 'nav_text3N_icon' => ['nc-icon nc-settings-gear-65'],
            // 'nav_text3O' => [' Twitter'],
            // 'nav_text3O_url' => ['twitter-redesign.html'],
            // 'nav_text3O_icon' => ['nc-icon nc-tie-bow'],


            // 'nav_btn_text' => [' Buy Now'],
            // 'nav_btn_icon' => ['nc-icon nc-cart-simple'],
            // 'nav_btn_url' => ['https://www.creative-tim.com/product/paper-kit-2-pro'],

           
        ];
        return $sampleValues[$field] ?? [];
    }
}
