<?php
/**
 * Front page template.
 *
 * @package SOP_Writer_Prakash
 */

get_header();

$prakash_image_url = 'https://sop-writer.in/wp-content/uploads/2026/02/prakash-sop-india.jpg';
$youtube_video_url = 'https://www.youtube.com/embed/JnYweo2khlw';
$current_site_url = 'https://sop-writer.in';

$service_items = [
    [
        'title' => 'Statement of Purpose (SOP)',
        'description' => 'Profile-based SOP writing for undergraduate, postgraduate, MBA, and visa pathways.',
    ],
    [
        'title' => 'Letter of Recommendation (LOR)',
        'description' => 'Structured and impactful LOR drafting aligned to course and university expectations.',
    ],
    [
        'title' => 'CV / Resume for Admissions',
        'description' => 'Academic and professional CV design that supports your SOP narrative and strengths.',
    ],
    [
        'title' => 'Complete Profile Assistance',
        'description' => 'End-to-end application document support for students and parents needing clarity.',
    ],
    [
        'title' => 'Visa SOP Specialization',
        'description' => 'Intent-focused visa SOPs with clear purpose, financial logic, and long-term plans.',
    ],
    [
        'title' => 'Application Content Strategy',
        'description' => 'Guidance for building a coherent story across essays, SOP, LOR, and interview profile.',
    ],
];

$process_steps = [
    [
        'title' => 'Discovery Call',
        'description' => 'We understand your profile, goals, target course, and concerns from both student and parent perspective.',
    ],
    [
        'title' => 'Profile Deep Dive',
        'description' => 'Prakash reviews academics, work history, achievements, and program fit before writing starts.',
    ],
    [
        'title' => 'Draft + Refinement',
        'description' => 'You receive a custom first draft, followed by guided revisions for tone, clarity, and impact.',
    ],
    [
        'title' => 'Final Submission Support',
        'description' => 'Final SOP/LOR package is polished for submission with practical checks for consistency.',
    ],
];

$specialized_countries = [
    'Canada',
    'United Kingdom',
    'United States',
    'Australia',
    'New Zealand',
    'Germany',
    'Ireland',
    'France',
    'Netherlands',
    'Singapore',
    'UAE',
    'Sweden',
];

$college_logo_items = [
    ['name' => 'University of Toronto', 'logo' => 'https://logo.clearbit.com/utoronto.ca'],
    ['name' => 'University of British Columbia', 'logo' => 'https://logo.clearbit.com/ubc.ca'],
    ['name' => 'University of Melbourne', 'logo' => 'https://logo.clearbit.com/unimelb.edu.au'],
    ['name' => 'University of Manchester', 'logo' => 'https://logo.clearbit.com/manchester.ac.uk'],
    ['name' => 'Monash University', 'logo' => 'https://logo.clearbit.com/monash.edu'],
    ['name' => 'University College Dublin', 'logo' => 'https://logo.clearbit.com/ucd.ie'],
    ['name' => 'Arizona State University', 'logo' => 'https://logo.clearbit.com/asu.edu'],
    ['name' => 'University of Sydney', 'logo' => 'https://logo.clearbit.com/sydney.edu.au'],
];

$client_reviews = [
    [
        'name' => 'Ananya S.',
        'text' => 'Prakash explained every SOP line and helped my family understand the admission strategy. My Canada admit came in the first cycle.',
    ],
    [
        'name' => 'Rohit K.',
        'text' => 'Unlike generic agencies, this process was fully personal. The SOP sounded exactly like my profile and background.',
    ],
    [
        'name' => 'Mansi P.',
        'text' => 'The visa SOP was practical, realistic, and complete. We got clear direction at every step and avoided common mistakes.',
    ],
];

$contact_status = filter_input(INPUT_GET, 'contact_status', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
?>

<main>
    <section class="hero" id="about">
        <div class="container hero-grid">
            <div>
                <span class="eyebrow">SOP Writing Services by Prakash</span>
                <h1>Personalized SOP Support for Students &amp; Parents</h1>
                <p class="hero-subtitle">A brighter, simpler, and structured process focused on outcomes.</p>
                <p>
                    Work directly with Prakash for SOP, LOR, resume, and admission content strategy.
                    No copy-paste templates. No generic AI drafts. Only profile-specific writing that fits university and visa expectations.
                </p>
                <div class="cta-row">
                    <a class="btn btn-primary" href="#contact">Book a Free Consultation</a>
                    <a class="btn btn-secondary" href="<?php echo esc_url($current_site_url); ?>" target="_blank" rel="noopener noreferrer">Visit Current Website</a>
                </div>
            </div>
            <aside class="card profile-card">
                <img src="<?php echo esc_url($prakash_image_url); ?>" alt="Prakash at SOP by Prakash" loading="lazy">
                <p><strong>Directly with Prakash:</strong> every document is planned, drafted, and reviewed with human judgement and country-specific strategy.</p>
            </aside>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <span class="section-kicker">What We Do</span>
            <h2>Our Services</h2>
            <p class="section-lead">Clear offerings for admission and visa documentation, from first draft to final submission.</p>
            <div class="grid-3">
                <?php foreach ($service_items as $service_item) : ?>
                    <article class="card service-card">
                        <h3><?php echo esc_html($service_item['title']); ?></h3>
                        <p><?php echo esc_html($service_item['description']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="process" class="section-soft">
        <div class="container">
            <span class="section-kicker">How We Work</span>
            <h2>Simple 4-Step Process</h2>
            <div class="process-grid">
                <?php foreach ($process_steps as $index => $process_step) : ?>
                    <article class="card process-card">
                        <span class="step-badge"><?php echo esc_html((string) ($index + 1)); ?></span>
                        <h3><?php echo esc_html($process_step['title']); ?></h3>
                        <p><?php echo esc_html($process_step['description']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="countries">
        <div class="container">
            <span class="section-kicker">Countries We Specialize In</span>
            <h2>Global Admission Destinations</h2>
            <p class="section-lead">Targeted SOP and visa documentation support based on country-specific expectations.</p>
            <div class="country-list" aria-label="Specialized countries">
                <?php foreach ($specialized_countries as $country) : ?>
                    <span><?php echo esc_html($country); ?></span>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="colleges" class="section-soft">
        <div class="container">
            <span class="section-kicker">Acceptances</span>
            <h2>Colleges Where Students Received Offers</h2>
            <div class="logo-slider" aria-label="University logo slider">
                <div class="logo-track">
                    <?php foreach (array_merge($college_logo_items, $college_logo_items) as $college_logo_item) : ?>
                        <div class="logo-item card">
                            <img src="<?php echo esc_url($college_logo_item['logo']); ?>" alt="<?php echo esc_attr($college_logo_item['name']); ?> logo" loading="lazy">
                            <p><?php echo esc_html($college_logo_item['name']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section id="reviews">
        <div class="container">
            <span class="section-kicker">Client Reviews</span>
            <h2>What Students &amp; Parents Say</h2>
            <div class="grid-3">
                <?php foreach ($client_reviews as $client_review) : ?>
                    <article class="card review-card">
                        <p class="stars" aria-label="5 star review">★★★★★</p>
                        <p><?php echo esc_html($client_review['text']); ?></p>
                        <h3><?php echo esc_html($client_review['name']); ?></h3>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="why-us" class="section-soft">
        <div class="container why-grid">
            <div>
                <span class="section-kicker">Why Choose Us</span>
                <h2>Why Students Choose SOP by Prakash Over Others</h2>
                <ul class="check-list">
                    <li>Direct communication with Prakash, not a random backend team.</li>
                    <li>Structured storytelling that reflects your real profile and goals.</li>
                    <li>Country and visa-specific SOP strategy instead of one-template-fits-all.</li>
                    <li>Parent-friendly process with clarity on every draft and revision.</li>
                    <li>Human-led writing quality that avoids generic AI style and repetition.</li>
                </ul>
            </div>
            <div class="card video-wrap">
                <iframe src="<?php echo esc_url($youtube_video_url); ?>" title="How to write a winning SOP" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container contact-grid">
            <div>
                <span class="section-kicker">Contact Prakash</span>
                <h2>Get a Callback &amp; Free SOP Consultation</h2>
                <p class="section-lead">Fill out the form and we will connect with you to discuss profile fit, timeline, and required documents.</p>
                <p><strong>Phone/WhatsApp:</strong> <a href="tel:+919000000000">+91 90000 00000</a></p>
                <p><strong>Email:</strong> <a href="mailto:contact@sop-writer.in">contact@sop-writer.in</a></p>
                <?php if ('success' === $contact_status) : ?>
                    <p class="form-message form-success">Thanks! Your message has been submitted successfully.</p>
                <?php elseif ('failed' === $contact_status) : ?>
                    <p class="form-message form-error">Something went wrong. Please try again or contact us directly.</p>
                <?php endif; ?>
            </div>
            <div class="card contact-form-wrap">
                <form class="contact-form" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
                    <input type="hidden" name="action" value="sop_writer_prakash_contact">
                    <?php wp_nonce_field('sop_writer_prakash_contact_nonce', 'sop_writer_prakash_contact_nonce'); ?>

                    <label for="sp-name">Full Name *</label>
                    <input id="sp-name" type="text" name="full_name" required>

                    <label for="sp-email">Email *</label>
                    <input id="sp-email" type="email" name="email" required>

                    <label for="sp-phone">Phone / WhatsApp</label>
                    <input id="sp-phone" type="text" name="phone">

                    <label for="sp-country">Target Country</label>
                    <input id="sp-country" type="text" name="target_country">

                    <label for="sp-service">Service Needed</label>
                    <select id="sp-service" name="service_needed">
                        <option value="SOP">SOP</option>
                        <option value="LOR">LOR</option>
                        <option value="Resume">Resume</option>
                        <option value="Profile Assistance">Profile Assistance</option>
                        <option value="Visa SOP">Visa SOP</option>
                        <option value="Complete Support">Complete Support</option>
                    </select>

                    <label for="sp-message">Message *</label>
                    <textarea id="sp-message" name="message" rows="4" required></textarea>

                    <button class="btn btn-primary" type="submit">Submit Inquiry</button>
                </form>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
