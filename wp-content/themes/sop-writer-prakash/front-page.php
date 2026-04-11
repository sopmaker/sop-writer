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
$content_data = sop_writer_prakash_get_content_data();
$service_items = $content_data['service_items'];
$process_steps = $content_data['process_steps'];
$specialized_countries = $content_data['specialized_countries'];
$college_logo_items = $content_data['college_logo_items'];
$client_reviews = $content_data['client_reviews'];
$study_program_sops = $content_data['study_program_sops'];
$visa_sop_types = $content_data['visa_sop_types'];
$why_choose_points = $content_data['why_choose_points'];
$section_pages = sop_writer_prakash_get_section_pages();

$contact_status = filter_input(INPUT_GET, 'contact_status', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
?>

<main>
    <section class="hero" id="about">
        <div class="container hero-grid">
            <div>
                <span class="eyebrow">Connect With Your SOP Editor Directly</span>
                <h1>Need Guidance With Your SOP?</h1>
                <p class="hero-subtitle">100% personalized SOP approach. Let’s shape your voice.</p>
                <p>
                    Our SOP consulting services in India support students across 100+ programs and courses worldwide.
                    Your SOP, LOR, VISA SOP, and profile documents are structured with factual clarity and professional tone.
                </p>
                <div class="cta-row">
                    <a class="btn btn-primary" href="#contact">Book Free Consultation</a>
                    <a class="btn btn-secondary" href="<?php echo esc_url($current_site_url); ?>" target="_blank" rel="noopener noreferrer">Visit Current Website</a>
                </div>
                <div class="hero-stats" aria-label="Impact stats">
                    <span><strong>10,041+</strong> People Helped</span>
                    <span><strong>8.5+ Years</strong> Experience</span>
                    <span><strong>100+</strong> Programs Supported</span>
                </div>
            </div>
            <aside class="card profile-card">
                <img src="<?php echo esc_url($prakash_image_url); ?>" alt="Prakash at SOP by Prakash" loading="lazy">
                <p><strong>A guarantee that no other SOP consultant can give:</strong> work directly with your editor and build the strategy around your own profile.</p>
            </aside>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <span class="section-kicker">What We Can Help You With</span>
            <h2>Core Services</h2>
            <p class="section-lead">Beyond SOP editing, we support complete admission and visa content strategy.</p>
            <div class="grid-3">
                <?php foreach ($service_items as $service_item) : ?>
                    <article class="card service-card">
                        <h3><?php echo esc_html($service_item['title']); ?></h3>
                        <p><?php echo esc_html($service_item['description']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
            <div class="section-actions">
                <a class="btn btn-secondary" href="<?php echo esc_url(sop_writer_prakash_get_section_page_url('services')); ?>">
                    <?php echo esc_html($section_pages['services']['cta']); ?>
                </a>
            </div>
        </div>
    </section>

    <section id="process" class="section-soft">
        <div class="container">
            <span class="section-kicker">Process of How We Work</span>
            <h2>Simple, Direct, and Time-Bound</h2>
            <div class="process-grid">
                <?php foreach ($process_steps as $index => $process_step) : ?>
                    <article class="card process-card">
                        <span class="step-badge"><?php echo esc_html((string) ($index + 1)); ?></span>
                        <h3><?php echo esc_html($process_step['title']); ?></h3>
                        <p><?php echo esc_html($process_step['description']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
            <div class="section-actions">
                <a class="btn btn-secondary" href="<?php echo esc_url(sop_writer_prakash_get_section_page_url('process')); ?>">
                    <?php echo esc_html($section_pages['process']['cta']); ?>
                </a>
            </div>
        </div>
    </section>

    <section id="program-sop-types">
        <div class="container">
            <span class="section-kicker">In-Demand SOP Support</span>
            <h2>SOPs for Programs</h2>
            <div class="pill-list" aria-label="SOPs for programs">
                <?php foreach ($study_program_sops as $study_program_sop) : ?>
                    <span><?php echo esc_html($study_program_sop); ?></span>
                <?php endforeach; ?>
            </div>
            <div class="section-actions">
                <a class="btn btn-secondary" href="<?php echo esc_url(sop_writer_prakash_get_section_page_url('programs')); ?>">
                    <?php echo esc_html($section_pages['programs']['cta']); ?>
                </a>
            </div>
        </div>
    </section>

    <section id="visa-sop-types" class="section-soft">
        <div class="container">
            <span class="section-kicker">Specialized VISA Guidance</span>
            <h2>High-Focus VISA SOP Categories</h2>
            <p class="section-lead">Countries are stricter than before. Strong case presentation now matters more than ever.</p>
            <div class="pill-list" aria-label="VISA SOP types">
                <?php foreach ($visa_sop_types as $visa_sop_type) : ?>
                    <span><?php echo esc_html($visa_sop_type); ?></span>
                <?php endforeach; ?>
            </div>
            <div class="section-actions">
                <a class="btn btn-secondary" href="<?php echo esc_url(sop_writer_prakash_get_section_page_url('visa')); ?>">
                    <?php echo esc_html($section_pages['visa']['cta']); ?>
                </a>
            </div>
        </div>
    </section>

    <section id="ai-warning">
        <div class="container card callout-card">
            <span class="section-kicker">Important Guidance</span>
            <h2>Have You Written Your SOP With AI Tools?</h2>
            <p>
                AI content may look polished, but many universities use advanced detection and authenticity checks.
                For fee-based applications, weak authenticity can cost both admission chances and money.
                Final verdict: a profile-first SOP from scratch is safer than over-reliance on AI rewriting.
            </p>
            <div class="section-actions">
                <a class="btn btn-secondary" href="<?php echo esc_url(sop_writer_prakash_get_section_page_url('ai-guidance')); ?>">
                    <?php echo esc_html($section_pages['ai-guidance']['cta']); ?>
                </a>
            </div>
        </div>
    </section>

    <section id="countries">
        <div class="container">
            <span class="section-kicker">Countries We Serve for SOP &amp; LOR Guidance</span>
            <h2>Countries We Specialize In</h2>
            <div class="country-list" aria-label="Specialized countries">
                <?php foreach ($specialized_countries as $country) : ?>
                    <span><?php echo esc_html($country); ?></span>
                <?php endforeach; ?>
            </div>
            <div class="section-actions">
                <a class="btn btn-secondary" href="<?php echo esc_url(sop_writer_prakash_get_section_page_url('countries')); ?>">
                    <?php echo esc_html($section_pages['countries']['cta']); ?>
                </a>
            </div>
        </div>
    </section>

    <section id="colleges" class="section-soft">
        <div class="container">
            <span class="section-kicker">College Acceptances</span>
            <h2>Universities and Colleges with Successful Outcomes</h2>
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
            <div class="section-actions">
                <a class="btn btn-secondary" href="<?php echo esc_url(sop_writer_prakash_get_section_page_url('colleges')); ?>">
                    <?php echo esc_html($section_pages['colleges']['cta']); ?>
                </a>
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
            <div class="section-actions">
                <a class="btn btn-secondary" href="<?php echo esc_url(sop_writer_prakash_get_section_page_url('reviews')); ?>">
                    <?php echo esc_html($section_pages['reviews']['cta']); ?>
                </a>
            </div>
        </div>
    </section>

    <section id="why-us" class="section-soft">
        <div class="container why-grid">
            <div>
                <span class="section-kicker">Why Choose Us Over Others</span>
                <h2>Expert SOP Guidance That Students Trust</h2>
                <ul class="check-list">
                    <?php foreach ($why_choose_points as $why_choose_point) : ?>
                        <li><?php echo esc_html($why_choose_point); ?></li>
                    <?php endforeach; ?>
                </ul>
                <div class="section-actions">
                    <a class="btn btn-secondary" href="<?php echo esc_url(sop_writer_prakash_get_section_page_url('why-us')); ?>">
                        <?php echo esc_html($section_pages['why-us']['cta']); ?>
                    </a>
                </div>
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
                <h2>Talk Directly to Your SOP Editor</h2>
                <p class="section-lead">Share your profile and get direct guidance for SOP, LOR, VISA SOP, and admission strategy.</p>
                <p><strong>Phone / WhatsApp:</strong> <a href="tel:+918447385389">+91 84473 85389</a></p>
                <p><strong>Email:</strong> <a href="mailto:contact@sop-writer.in">contact@sop-writer.in</a></p>
                <?php if ('success' === $contact_status) : ?>
                    <p class="form-message form-success">Thanks! Your message has been submitted successfully.</p>
                <?php elseif ('failed' === $contact_status) : ?>
                    <p class="form-message form-error">Something went wrong. Please try again or contact us directly.</p>
                <?php endif; ?>
                <div class="section-actions">
                    <a class="btn btn-secondary" href="<?php echo esc_url(sop_writer_prakash_get_section_page_url('contact')); ?>">
                        <?php echo esc_html($section_pages['contact']['cta']); ?>
                    </a>
                </div>
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
                        <option value="VISA SOP">VISA SOP</option>
                        <option value="Profile Assistance">Profile Assistance</option>
                        <option value="Resume">Resume</option>
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
