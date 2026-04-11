<?php
/**
 * Section page definitions.
 *
 * @package SOP_Writer_Prakash
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!function_exists('sop_writer_prakash_get_section_pages')) {
    function sop_writer_prakash_get_section_pages()
    {
        return [
            'services' => [
                'slug' => 'services',
                'title' => 'Core Services',
                'kicker' => 'What We Can Help You With',
                'lead' => 'Detailed SOP, LOR, VISA SOP, resume, and admission support to keep your application credible and strong.',
                'cta' => 'View service details',
            ],
            'process' => [
                'slug' => 'process',
                'title' => 'Our SOP Process',
                'kicker' => 'Process of How We Work',
                'lead' => 'A direct, time-bound workflow built around your profile, timelines, and university expectations.',
                'cta' => 'See the full process',
            ],
            'programs' => [
                'slug' => 'sop-programs',
                'title' => 'SOPs for Programs',
                'kicker' => 'In-Demand SOP Support',
                'lead' => 'Program-specific SOP editing for PhD, Masters, diploma, and specialized postgraduate courses.',
                'cta' => 'Explore SOP programs',
            ],
            'visa' => [
                'slug' => 'visa-sop',
                'title' => 'VISA SOP Categories',
                'kicker' => 'Specialized VISA Guidance',
                'lead' => 'Focused VISA SOP editing to match strict country requirements and scrutiny.',
                'cta' => 'View VISA SOP support',
            ],
            'ai-guidance' => [
                'slug' => 'ai-guidance',
                'title' => 'AI SOP Guidance',
                'kicker' => 'Important Guidance',
                'lead' => 'Why authenticity, originality, and human-led drafting matter for your admission success.',
                'cta' => 'Read AI guidance',
            ],
            'countries' => [
                'slug' => 'countries',
                'title' => 'Countries We Serve',
                'kicker' => 'Countries We Serve for SOP & LOR Guidance',
                'lead' => 'Country-specific editing support backed by insider knowledge of admission expectations.',
                'cta' => 'View country coverage',
            ],
            'colleges' => [
                'slug' => 'colleges',
                'title' => 'College Acceptances',
                'kicker' => 'Successful Outcomes',
                'lead' => 'A snapshot of universities and colleges where our students have secured admits.',
                'cta' => 'View acceptance list',
            ],
            'reviews' => [
                'slug' => 'reviews',
                'title' => 'Client Reviews',
                'kicker' => 'What Students & Parents Say',
                'lead' => 'Direct feedback from applicants and families who worked with SOP by Prakash.',
                'cta' => 'Read client reviews',
            ],
            'why-us' => [
                'slug' => 'why-us',
                'title' => 'Why Choose SOP by Prakash',
                'kicker' => 'Why Choose Us Over Others',
                'lead' => 'Quality, authenticity, and strategy without templates or intermediaries.',
                'cta' => 'Why students choose us',
            ],
            'contact' => [
                'slug' => 'contact',
                'title' => 'Talk Directly to Your SOP Editor',
                'kicker' => 'Contact Prakash',
                'lead' => 'Share your profile and get guidance for SOP, LOR, VISA SOP, and admissions strategy.',
                'cta' => 'Contact us',
            ],
        ];
    }
}

if (!function_exists('sop_writer_prakash_get_section_page_url')) {
    function sop_writer_prakash_get_section_page_url($key)
    {
        $pages = sop_writer_prakash_get_section_pages();
        if (!isset($pages[$key])) {
            return home_url('/');
        }

        return home_url('/' . $pages[$key]['slug'] . '/');
    }
}

if (!function_exists('sop_writer_prakash_register_section_pages')) {
    function sop_writer_prakash_register_section_pages()
    {
        $pages = sop_writer_prakash_get_section_pages();

        foreach ($pages as $page) {
            $existing_page = get_page_by_path($page['slug']);
            if ($existing_page) {
                continue;
            }

            wp_insert_post([
                'post_title' => $page['title'],
                'post_name' => $page['slug'],
                'post_status' => 'publish',
                'post_type' => 'page',
            ]);
        }
    }
}
