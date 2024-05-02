<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Header extends Composer
{

    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.header',
        'partials.footer',
        'sections.header',
        'sections.footer',
        'index',
        '404'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [

            /**
             * Header
             */
            'blue_logo'      => get_field('logo_blue', 'option'),
            'white_logo'      => get_field('logo_white', 'option'),

            /**
             * Footer
             */
            'footer_logo'           => get_field('footer_logo', 'option'),
            'visit_us_image'     => get_field('visit_us_image', 'option'),
            'visit_us_url'     => get_field('visit_us_url', 'option'),
            'left_text'   => get_field('left_text', 'option'),
            'copyright_text'        => get_field('copyright_text', 'option'),
            // 'email_address'         => get_field('email_address', 'option'),
            // 'footer_button'         => get_field('footer_button', 'option'),
            // 'social_icons'          => get_field('social_icons', 'option'),
            // 'copyright_text'        => get_field('copyright_text', 'option'),
            // 'rights_reserved_text'  => get_field('rights_reserved_text', 'option'),
            // 'newsletter_text'       => get_field('newsletter_text', 'option'),
            // 'newsletter_button'     => get_field('newsletter_button', 'option'),
        ];
    }
}
