<?php
/**
 * Front page template.
 *
 * @package SOP_Writer_Prakash
 */

get_header();

$prakash_image_url = 'https://sop-writer.in/wp-content/uploads/2026/02/prakash-sop-india.jpg';
$client_chat_image_url = 'https://sop-writer.in/wp-content/uploads/2025/07/sop-writing-client.png';
$youtube_video_url = 'https://www.youtube.com/embed/JnYweo2khlw';
$google_reviews_embed_url = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.9466727296626!2d77.09129197412494!3d28.48115259094144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d19a45667bc61%3A0xc5bf5878d5222956!2sSOP-Writer.in%20-%20SOP%20Writing%20Services!5e0!3m2!1sen!2sin!4v1682795940888!5m2!1sen!2sin';
?>

<main>
    <section class="hero" id="about">
        <div class="container hero-grid">
            <div>
                <span class="eyebrow">Delhi-Based Personal SOP Consultancy</span>
                <h1>SOP by Prakash</h1>
                <p class="hero-subtitle">Built personally by Prakash for students and their parents.</p>
                <p>
                    At SOP by Prakash, every application story is crafted by one expert—not by a random team and never by copy-paste templates.
                    Parents get confidence, students get clarity, and every SOP is tailored to real goals, real profile history, and real visa/admission expectations.
                </p>
                <div class="cta-row">
                    <a class="btn btn-primary" href="#audit">Get Free SOP Audit/Review</a>
                    <a class="btn btn-secondary" href="https://sop-writer.in" target="_blank" rel="noopener noreferrer">Visit Current Website</a>
                </div>
                <div class="hero-tags" aria-label="Highlights">
                    <span>100% Personalized Drafting</span>
                    <span>Directly by Prakash</span>
                    <span>Trusted in Delhi &amp; Beyond</span>
                </div>
            </div>
            <aside class="hero-card profile-card">
                <img src="<?php echo esc_url($prakash_image_url); ?>" alt="Prakash holding a trophy in a professional suit" loading="lazy">
                <p>
                    <strong>Prakash</strong> is the face, strategist, and writer behind SOP by Prakash.
                    No outsourcing. No generic AI phrasing. Just experienced, profile-specific human writing.
                </p>
            </aside>
        </div>
    </section>

    <section id="audit">
        <div class="container card banner-card">
            <span class="section-kicker">Free Value First</span>
            <h2>Free SOP Audit/Review for Students &amp; Parents</h2>
            <p class="section-lead">
                Share your existing SOP and get direct feedback from Prakash on structure, tone, relevance, and rejection risks before you submit.
            </p>
            <a class="btn btn-primary" href="#contact">Request Your Free Audit</a>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <span class="section-kicker">What We Offer</span>
            <h2>Services</h2>
            <div class="grid-3">
                <article class="card"><h3>SOP</h3><p>Personalized Statements of Purpose for admissions and visas.</p></article>
                <article class="card"><h3>LOR</h3><p>Powerful Letters of Recommendation aligned with your profile and goals.</p></article>
                <article class="card"><h3>Profile Assistance</h3><p>Strategic profiling and positioning to strengthen your complete application.</p></article>
                <article class="card"><h3>Resume</h3><p>Academic and professional resume building for global admissions.</p></article>
                <article class="card"><h3>Admission Support</h3><p>End-to-end support for document planning and application readiness.</p></article>
                <article class="card"><h3>Visa SOP</h3><p>Country-focused SOPs that address credibility, intent, and compliance.</p></article>
            </div>
        </div>
    </section>

    <section id="proof">
        <div class="container proof-grid">
            <div>
                <span class="section-kicker">Why Human SOP Matters</span>
                <h2>AI-Generated SOPs Often Get Rejected</h2>
                <p class="section-lead">
                    Many students think AI can replace expert SOP strategy. In reality, repetitive language, weak personalization,
                    and generic arguments can trigger rejection.
                </p>
                <p>
                    This real WhatsApp screenshot highlights a client regret: writing SOP with AI led to rejection from Canada.
                    The lesson is simple—high-stakes SOPs need experienced human judgement.
                </p>
            </div>
            <aside class="card media-card">
                <img src="<?php echo esc_url($client_chat_image_url); ?>" alt="WhatsApp chat screenshot where client regrets using AI SOP and was rejected by Canada" loading="lazy">
            </aside>
        </div>
    </section>

    <section id="video">
        <div class="container">
            <span class="section-kicker">Learn from Prakash</span>
            <h2>How to Write a Winning SOP by Yourself</h2>
            <div class="video-wrap card">
                <iframe src="<?php echo esc_url($youtube_video_url); ?>" title="How to write a winning SOP by yourself" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <section id="countries">
        <div class="container">
            <span class="section-kicker">Global Support</span>
            <h2>Countries We Serve</h2>
            <p class="section-lead">We support students applying to almost all major study destinations across the world.</p>
            <div class="country-list" aria-label="Countries served">
                <span>Canada</span><span>USA</span><span>UK</span><span>Australia</span><span>New Zealand</span>
                <span>Germany</span><span>Ireland</span><span>France</span><span>Netherlands</span><span>Singapore</span>
                <span>UAE</span><span>Europe &amp; More</span>
            </div>
        </div>
    </section>

    <section id="reviews">
        <div class="container">
            <span class="section-kicker">Verified Trust</span>
            <h2>Google Reviews</h2>
            <div class="map-wrap card">
                <iframe src="<?php echo esc_url($google_reviews_embed_url); ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="SOP Writer Google Reviews"></iframe>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
