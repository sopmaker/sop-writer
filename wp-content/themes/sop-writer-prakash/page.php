<?php
/**
 * Page template.
 *
 * @package SOP_Writer_Prakash
 */

get_header();

$content_data = sop_writer_prakash_get_content_data();
$section_pages = sop_writer_prakash_get_section_pages();
$section_key = null;
$section_page = null;
$slug = get_post_field('post_name', get_queried_object_id());

foreach ($section_pages as $key => $page) {
    if ($page['slug'] === $slug) {
        $section_key = $key;
        $section_page = $page;
        break;
    }
}

$service_items = $content_data['service_items'];
$process_steps = $content_data['process_steps'];
$specialized_countries = $content_data['specialized_countries'];
$college_logo_items = $content_data['college_logo_items'];
$client_reviews = $content_data['client_reviews'];
$study_program_sops = $content_data['study_program_sops'];
$visa_sop_types = $content_data['visa_sop_types'];
$why_choose_points = $content_data['why_choose_points'];
$contact_status = filter_input(INPUT_GET, 'contact_status', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
?>

<main class="page-main">
    <?php if ($section_key) : ?>
        <section class="page-hero">
            <div class="container">
                <span class="section-kicker"><?php echo esc_html($section_page['kicker']); ?></span>
                <h1><?php echo esc_html($section_page['title']); ?></h1>
                <p class="section-lead"><?php echo esc_html($section_page['lead']); ?></p>
            </div>
        </section>

        <?php if ('services' === $section_key) : ?>
            <section>
                <div class="container">
                    <div class="grid-3">
                        <?php foreach ($service_items as $service_item) : ?>
                            <article class="card service-card">
                                <h3><?php echo esc_html($service_item['title']); ?></h3>
                                <p><?php echo esc_html($service_item['description']); ?></p>
                            </article>
                        <?php endforeach; ?>
                    </div>
                    <p class="section-note">We also support returning clients across corporate, ecommerce, finance, technology, and research domains.</p>
                </div>
            </section>
        <?php elseif ('process' === $section_key) : ?>
            <section class="section-soft">
                <div class="container">
                    <div class="process-grid">
                        <?php foreach ($process_steps as $index => $process_step) : ?>
                            <article class="card process-card">
                                <span class="step-badge"><?php echo esc_html((string) ($index + 1)); ?></span>
                                <h3><?php echo esc_html($process_step['title']); ?></h3>
                                <p><?php echo esc_html($process_step['description']); ?></p>
                            </article>
                        <?php endforeach; ?>
                    </div>
                    <p class="section-note">Every stage is time-bound and transparent so you know exactly what is being improved and why.</p>
                </div>
            </section>
        <?php elseif ('programs' === $section_key) : ?>
            <section>
                <div class="container">
                    <div class="pill-list" aria-label="SOPs for programs">
                        <?php foreach ($study_program_sops as $study_program_sop) : ?>
                            <span><?php echo esc_html($study_program_sop); ?></span>
                        <?php endforeach; ?>
                    </div>
                    <div class="section-copy">
                        <p>2026 September intake PhD applications are already closing in some countries. We help you align research proposals, theories, publications, and experience into a clear statement.</p>
                        <p>Our editors support PhD applicants from healthcare, engineering, physics, chemistry, medicine, dentistry, and more.</p>
                    </div>
                </div>
            </section>
        <?php elseif ('visa' === $section_key) : ?>
            <section class="section-soft">
                <div class="container">
                    <div class="pill-list" aria-label="VISA SOP types">
                        <?php foreach ($visa_sop_types as $visa_sop_type) : ?>
                            <span><?php echo esc_html($visa_sop_type); ?></span>
                        <?php endforeach; ?>
                    </div>
                    <div class="section-copy">
                        <p>Study VISA SOPs are the most demanding today. Countries like Canada, Australia, and New Zealand are enforcing stricter visa checks, longer processing times, and higher rejection rates.</p>
                        <p>We help you present a practical, consistent case that respects financial logic, course alignment, and post-study intent.</p>
                    </div>
                </div>
            </section>
        <?php elseif ('ai-guidance' === $section_key) : ?>
            <section>
                <div class="container">
                    <div class="card callout-card">
                        <p>AI-written SOPs may look polished, but university detection is far more advanced than public tools. For paid applications, weak authenticity can cost both admissions and fees.</p>
                        <p>Final verdict: write your SOP from scratch or work with an editor who understands your real profile. Even AI rephrasing can harm credibility.</p>
                    </div>
                </div>
            </section>
        <?php elseif ('countries' === $section_key) : ?>
            <section>
                <div class="container">
                    <div class="country-list" aria-label="Specialized countries">
                        <?php foreach ($specialized_countries as $country) : ?>
                            <span><?php echo esc_html($country); ?></span>
                        <?php endforeach; ?>
                    </div>
                    <p class="section-note">We tailor SOPs to each country’s expectations, course fit, and visa requirements so your narrative feels locally aligned.</p>
                </div>
            </section>
        <?php elseif ('colleges' === $section_key) : ?>
            <section class="section-soft">
                <div class="container">
                    <div class="logo-grid" aria-label="College acceptance logos">
                        <?php foreach ($college_logo_items as $college_logo_item) : ?>
                            <div class="logo-item card">
                                <img src="<?php echo esc_url($college_logo_item['logo']); ?>" alt="<?php echo esc_attr($college_logo_item['name']); ?> logo" loading="lazy">
                                <p><?php echo esc_html($college_logo_item['name']); ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        <?php elseif ('reviews' === $section_key) : ?>
            <section>
                <div class="container">
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
        <?php elseif ('why-us' === $section_key) : ?>
            <section class="section-soft">
                <div class="container">
                    <div class="why-grid">
                        <div>
                            <ul class="check-list">
                                <?php foreach ($why_choose_points as $why_choose_point) : ?>
                                    <li><?php echo esc_html($why_choose_point); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="card">
                            <p>SOPs are personal. Guidance makes them stronger. Work directly with your editor and keep every draft aligned with your profile story.</p>
                        </div>
                    </div>
                </div>
            </section>
        <?php elseif ('contact' === $section_key) : ?>
            <section>
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
        <?php endif; ?>
    <?php else : ?>
        <section class="page-hero">
            <div class="container">
                <span class="section-kicker"><?php echo esc_html(get_the_title()); ?></span>
                <h1><?php echo esc_html(get_the_title()); ?></h1>
            </div>
        </section>
        <section class="page-content">
            <div class="container">
                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            </div>
        </section>
    <?php endif; ?>
</main>

<?php
get_footer();
