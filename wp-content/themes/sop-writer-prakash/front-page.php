<?php
/**
 * Front page template.
 *
 * @package SOP_Writer_Prakash
 */

get_header();

$hero_image_url = 'https://sop-writer.in/wp-content/uploads/2026/02/prakash-sop-india.jpg';
$meet_prakash_image_url = 'https://sop-writer.in/wp-content/uploads/2026/02/prakash-sop-india.jpg';
$whatsapp_message = rawurlencode('Hi Prakash, I\'d like to talk about my SOP.');
$whatsapp_url = 'https://wa.me/918447385389?text=' . $whatsapp_message;
?>

<main>
    <section class="hero" id="about">
        <div class="container hero-grid">
            <div class="hero-copy">
                <p class="eyebrow">Direct Access to Your Editor — No Agents, No Templates</p>
                <h1>Your SOP Should Sound Like You. Not Like 500 Other Applicants.</h1>
                <div class="track-changes compact">
                    <p class="track-original">I have always been passionate about [field] since childhood and have dreamed of studying abroad.</p>
                    <p class="track-note">↳ This is the kind of line Prakash rewrites — on your SOP, with you, sentence by sentence.</p>
                </div>
                <p class="hero-subhead">Prakash has personally read, questioned, and rewritten 10,000+ SOPs, LORs, and visa documents for students applying to 100+ programs across 12+ countries — working directly with you, never through a sales team or a template library.</p>
                <div class="hero-cta">
                    <a class="btn btn-primary" href="#contact">Book a Free Consultation</a>
                    <a class="btn btn-secondary" href="#process">See How the Process Works</a>
                </div>
                <div class="trust-strip" aria-label="Trust metrics">
                    <div><strong>10,041+</strong><span>Students Guided</span></div>
                    <div><strong>8.5+</strong><span>Years of Editing Experience</span></div>
                    <div><strong>100+</strong><span>Programs Supported</span></div>
                    <div><strong>12+</strong><span>Countries</span></div>
                </div>
            </div>
            <aside class="hero-visual">
                <figure class="paper-photo hero-photo">
                    <img src="<?php echo esc_url($hero_image_url); ?>" alt="Prakash with the 8th anniversary trophy" loading="lazy">
                </figure>
            </aside>
        </div>
    </section>

    <section id="sound-familiar">
        <div class="container narrow">
            <p class="eyebrow">Before You Read Any Further</p>
            <h2>If Your SOP Has Done Any of This, You&#39;re Not Alone</h2>
            <p class="section-intro">Every week, students arrive here after one of the experiences below. None of it is your fault — and all of it is fixable.</p>
            <div class="pain-list">
                <p><strong>A consultant wrote it for you — and it reads like it.</strong> Admissions officers read thousands of SOPs a year. A ghostwritten one is rarely as invisible as the agency promised.</p>
                <p><strong>It came back &quot;too polished.&quot;</strong> Every sentence is grammatically perfect and emotionally empty — and now you&#39;re worried it looks AI-generated, because often, it was.</p>
                <p><strong>You never met the person actually writing it.</strong> You spoke to a counsellor or a sales executive. The draft was handled by someone you&#39;ve never spoken to, using a structure that&#39;s been reused for years.</p>
                <p><strong>It was rejected, and now the clock is louder.</strong> A refusal or resubmission request has eaten into your timeline, and you need a rewrite that&#39;s both fast and genuinely different — not a faster version of the same problem.</p>
                <p><strong>You wrote it with ChatGPT and you&#39;re not sure it&#39;s safe to submit.</strong> It sounds fine to you. You don&#39;t know how it sounds to a reviewer trained to notice the difference.</p>
            </div>
            <div class="annotation-block">
                <p class="mono-title">Two Edits Prakash Makes Constantly</p>
                <div class="track-changes">
                    <p class="track-original">Since childhood, I have been fascinated by [field] and have always dreamed of studying abroad to broaden my horizons and contribute to society.</p>
                    <p class="track-note">↳ Replace the dream with the decision. What specific moment, project, mistake, or conversation actually moved you toward this program?</p>
                </div>
                <div class="track-changes">
                    <p class="track-original">My indefatigable zeal for academic excellence and unwavering commitment to societal betterment render me an exemplary candidate for this esteemed program.</p>
                    <p class="track-note">↳ Say it the way you&#39;d say it to a mentor, not a thesaurus. Confidence reads through plain sentences, not big ones.</p>
                </div>
            </div>
            <p class="section-close">If any of this sounds like your SOP, the fix isn&#39;t another rewrite from another stranger — it&#39;s working directly with the person who&#39;ll actually read and rebuild it.</p>
            <a class="btn btn-primary" href="#contact">Book Free Consultation</a>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <p class="eyebrow">What We Can Help You With</p>
            <h2>Core Services</h2>
            <div class="services-grid">
                <article class="paper-card tilt-left">
                    <p class="card-tag">SOP</p>
                    <h3>Statement of Purpose</h3>
                    <p>Built from your academic record, work experience, and goals — not a template with your name dropped in. Prakash writes and edits every draft personally.</p>
                </article>
                <article class="paper-card tilt-right">
                    <p class="card-tag">LOR</p>
                    <h3>Letter of Recommendation</h3>
                    <p>Guidance for your recommenders so the letter reflects how they actually know you, structured to match what reviewers in your target country expect.</p>
                </article>
                <article class="paper-card tilt-right">
                    <p class="card-tag">VISA</p>
                    <h3>VISA SOP / Letter of Motivation</h3>
                    <p>Country-specific visa documentation that presents a clear, honest case for your intent — written for the officer reading it, not a generic checklist.</p>
                </article>
                <article class="paper-card tilt-left">
                    <p class="card-tag">FREE</p>
                    <h3>Profile Assessment</h3>
                    <p>Before you commit to anything: a free, honest read of your profile — what&#39;s strong, what&#39;s missing, and what realistic program and country options look like.</p>
                </article>
                <article class="paper-card tilt-left">
                    <p class="card-tag">RESUME</p>
                    <h3>Resume for Admissions</h3>
                    <p>A resume structured for academic and visa reviewers, whether you&#39;re applying with zero work experience or a full career history.</p>
                </article>
                <article class="paper-card tilt-right">
                    <p class="card-tag">FULL</p>
                    <h3>Complete Application Support</h3>
                    <p>Editing and strategy across every document in your application, coordinated so your SOP, LOR, and resume tell one consistent story.</p>
                </article>
            </div>
            <div class="section-cta">
                <a class="btn btn-secondary" href="#contact">See Full Service Details</a>
            </div>
        </div>
    </section>

    <section id="meet-prakash">
        <div class="container split-layout reverse">
            <figure class="paper-photo about-photo">
                <img src="<?php echo esc_url($meet_prakash_image_url); ?>" alt="Prakash reviewing a printed draft at a desk" loading="lazy">
                <figcaption>EDITOR</figcaption>
            </figure>
            <div class="section-main">
                <p class="eyebrow">Who Actually Works on Your SOP</p>
                <h2>Meet Prakash</h2>
                <p>For 8.5+ years, Prakash has worked one-on-one with students applying to universities across Canada, the US, UK, Australia, Germany, South Korea, and more — reading their drafts, asking the questions a reviewer would ask, and rewriting until the SOP sounds like the person sitting across from him, not a template.</p>
                <p>There&#39;s no in-house writing team, no outsourcing, and no SOP that goes out without Prakash personally working on it. If you&#39;re talking to SOP by Prakash, you&#39;re talking to the person who will write your document.</p>
                <blockquote>
                    <p>&#8220;A good SOP doesn&#39;t sound impressive. It sounds true.&#8221;</p>
                    <cite>— Prakash</cite>
                </blockquote>
                <div class="mini-credentials">
                    <span>10,041+ SOPs &amp; profiles reviewed</span>
                    <span>100+ programs across 12+ countries</span>
                    <span>8.5+ years, one-on-one only</span>
                </div>
            </div>
        </div>
    </section>

    <section id="process">
        <div class="container manuscript-grid">
            <aside class="margin-rail" aria-hidden="true">
                <div class="rail-step">01</div>
                <div class="rail-step">02</div>
                <div class="rail-step">03</div>
                <div class="rail-step">04</div>
            </aside>
            <div class="section-main">
                <p class="eyebrow">Process of How We Work</p>
                <h2>Simple, Direct, and Time-Bound</h2>
                <ol class="process-list">
                    <li>
                        <h3>Talk to Prakash Directly</h3>
                        <p>No intermediary, no pre-sales call with someone else. You describe your situation — program, timeline, concerns — directly to the person who will work on your SOP.</p>
                    </li>
                    <li>
                        <h3>Profile Understanding</h3>
                        <p>Prakash goes through your academic record, work experience, target country, and program requirements to understand what story your profile can support, and what&#39;s missing.</p>
                    </li>
                    <li>
                        <h3>Draft, Question, Revise</h3>
                        <p>You receive a draft built around your profile. Prakash flags weak spots, asks follow-up questions where your story is thin, and revises until the language, structure, and tone all hold up.</p>
                    </li>
                    <li>
                        <h3>Submission-Ready Delivery</h3>
                        <p>You receive a final SOP (and supporting documents, if included in your package) with honest, practical notes on what to expect next — not vague reassurance.</p>
                    </li>
                </ol>
            </div>
        </div>
    </section>

    <section id="results">
        <div class="container">
            <p class="eyebrow">Real Profiles, Real Rewrites</p>
            <h2>From Stuck to Submitted</h2>
            <p class="section-intro"><strong>[PLACEHOLDER — CLIENT-AUTHORIZED CASE STUDIES NEEDED]</strong> The three cards below are structural placeholders showing the intended format. Before launch, replace the bracketed content with real, anonymized outcomes Prakash can stand behind. Do not publish specific success-rate percentages or guaranteed-outcome language — unverifiable numeric claims are the single biggest trust-killer in this industry (and a common red flag students are specifically warned to look for).</p>
            <div class="results-stack">
                <article class="paper-card overlap-left">
                    <h3>PhD Applicant</h3>
                    <p><strong>Arrived with:</strong> A rejected SOP that listed research interests without connecting them to the program or any specific faculty.</p>
                    <p><strong>Rebuilt around:</strong> Existing publications, a focused research question, and named potential supervisors.</p>
                    <p><strong>Outcome:</strong> [insert verified result]</p>
                </article>
                <article class="paper-card overlap-mid">
                    <h3>Study Visa Applicant</h3>
                    <p><strong>Arrived with:</strong> An AI-drafted SOP that read fluently but generically, and had been flagged in a prior visa interview.</p>
                    <p><strong>Rebuilt around:</strong> Specific, verifiable personal and financial ties, written in the applicant&#39;s own voice.</p>
                    <p><strong>Outcome:</strong> [insert verified result]</p>
                </article>
                <article class="paper-card overlap-right">
                    <h3>Master&#39;s Applicant</h3>
                    <p><strong>Arrived with:</strong> A template-based SOP from a previous consultant that didn&#39;t reflect the applicant&#39;s actual background.</p>
                    <p><strong>Rebuilt around:</strong> A clear narrative connecting past work experience to the specific program and career plan.</p>
                    <p><strong>Outcome:</strong> [insert verified result]</p>
                </article>
            </div>
        </div>
    </section>

    <section id="comparison">
        <div class="container">
            <p class="eyebrow">What Actually Changes</p>
            <h2>How This Is Different From the Last Consultant</h2>
            <div class="table-wrap">
                <table class="comparison-table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Typical Agency Experience</th>
                            <th>Working With Prakash</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Who writes it</th>
                            <td>Junior staff or an outsourced &quot;content team&quot; you never speak to</td>
                            <td class="prakash-col">Prakash, personally, every time</td>
                        </tr>
                        <tr>
                            <th>The first draft</th>
                            <td>A reused structure with your details swapped in</td>
                            <td class="prakash-col">Built from scratch around your profile and goals</td>
                        </tr>
                        <tr>
                            <th>AI involvement</th>
                            <td>Often AI-generated or AI-&quot;polished,&quot; undisclosed</td>
                            <td class="prakash-col">AI can be your tool — never ours. Every word is human-edited</td>
                        </tr>
                        <tr>
                            <th>Communication</th>
                            <td>Routed through a counsellor or sales executive</td>
                            <td class="prakash-col">Direct conversation with the person writing your SOP</td>
                        </tr>
                        <tr>
                            <th>Pricing</th>
                            <td>Add-on charges appear as you go</td>
                            <td class="prakash-col">One transparent package, confirmed before you start</td>
                        </tr>
                        <tr>
                            <th>Revisions</th>
                            <td>Limited, or charged separately</td>
                            <td class="prakash-col">Structured review cycles included in every package</td>
                        </tr>
                        <tr>
                            <th>Promises</th>
                            <td>&quot;Guaranteed admission&quot; or &quot;guaranteed visa&quot;</td>
                            <td class="prakash-col">No outcome guarantees — only a guarantee of effort, originality, and your deadline</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section id="pricing">
        <div class="container narrow">
            <p class="eyebrow">No Hidden Add-Ons</p>
            <h2>Pricing, Before You Ask</h2>
            <p class="section-intro">Most complaints about education consultants start with money — costs that appear after you&#39;ve already paid for something else. Here&#39;s how packages work. Exact pricing is confirmed during your free consultation, based on your program and timeline, and never changes mid-way without your agreement.</p>
            <div class="pricing-grid">
                <article class="paper-card no-tilt">
                    <h3>SOP Essentials</h3>
                    <p>One SOP, built from your profile, with structured review cycles. Best for a single program application.</p>
                    <p class="price-line">Starting at ₹[X],000</p>
                    <!-- TODO: Replace [X] with confirmed SOP Essentials starting price -->
                </article>
                <article class="paper-card no-tilt">
                    <h3>SOP + LOR</h3>
                    <p>SOP plus recommender guidance for one application, so both documents tell a consistent story.</p>
                    <p class="price-line">Starting at ₹[X],000</p>
                    <!-- TODO: Replace [X] with confirmed SOP + LOR starting price -->
                </article>
                <article class="paper-card no-tilt">
                    <h3>Complete Application Support</h3>
                    <p>SOP, LOR guidance, resume, and profile strategy across multiple programs or applications.</p>
                    <p class="price-line">Starting at ₹[X],000</p>
                    <!-- TODO: Replace [X] with confirmed Complete Application Support starting price -->
                </article>
            </div>
            <p class="pricing-note">Multi-program and visa-SOP pricing is discussed during your free consultation. Every quote is given in writing, before any payment.</p>
            <div class="section-cta">
                <a class="btn btn-primary" href="#contact">Get My Quote — Free Consultation</a>
            </div>
            <p class="dev-note"><strong>Dev note:</strong> If Prakash prefers not to display numeric prices publicly, replace the price line with &quot;Get a written quote before you pay anything&quot; — but a visible starting price is strongly recommended for both trust signaling and for capturing &quot;SOP writing cost India&quot; search queries.</p>
        </div>
    </section>

    <section id="faq">
        <div class="container narrow">
            <p class="eyebrow">FAQ</p>
            <h2>Frequently Asked Questions</h2>
            <p class="section-intro">The full FAQ block will be added in the next brief section.</p>
            <!-- TODO: Add final FAQ content and one light track-changes example from part 3 of the brief -->
        </div>
    </section>

    <section id="contact">
        <div class="container narrow">
            <p class="eyebrow">Contact</p>
            <h2>Talk Directly to Prakash</h2>
            <p class="section-intro">The complete contact section and form will be added in the next brief section.</p>
            <p><strong>Phone / WhatsApp:</strong> <a href="tel:+918447385389">+91 84473 85389</a></p>
            <p><strong>Email:</strong> <a href="mailto:contact@sop-writer.in">contact@sop-writer.in</a></p>
            <!-- TODO: Add final conversion form structure from part 3 of the brief -->
        </div>
    </section>
</main>

<a class="whatsapp-float" href="<?php echo esc_url($whatsapp_url); ?>" target="_blank" rel="noopener noreferrer" aria-label="Chat with Prakash on WhatsApp">
    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
        <path d="M20 11.5C20 16.1944 16.1944 20 11.5 20C10.0069 20 8.60373 19.6151 7.38458 18.9396L4 20L5.10663 16.7322C4.39533 15.2866 4 13.6605 4 11.9412C4 7.24677 7.80558 3.44118 12.5 3.44118C17.1944 3.44118 21 7.24677 21 11.9412" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M9.2 8.9C9.5 8.2 10.1 8.1 10.5 8.1C10.7 8.1 10.9 8.1 11.1 8.2C11.3 8.3 11.5 8.6 11.7 9L12.1 9.9C12.2 10.1 12.2 10.4 12.1 10.6C12 10.8 11.7 11.1 11.6 11.3C11.5 11.5 11.3 11.7 11.5 12C11.7 12.4 12 12.8 12.4 13.1C12.8 13.5 13.2 13.8 13.7 14C14 14.2 14.2 14.1 14.4 13.9C14.6 13.7 14.9 13.4 15.1 13.2C15.3 13 15.6 12.9 15.8 13L16.9 13.5C17.3 13.7 17.6 13.8 17.7 14.1C17.8 14.4 17.8 14.8 17.6 15.1C17.4 15.4 17.1 15.8 16.6 16C16.1 16.2 15.5 16.2 14.9 16C14.2 15.8 13.4 15.5 12.6 14.9C11.8 14.3 11.1 13.6 10.5 12.8C9.9 12 9.5 11.2 9.4 10.5C9.2 9.9 9.2 9.3 9.2 8.9Z" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
</a>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var button = document.querySelector('.whatsapp-float');
    var hero = document.querySelector('.hero');

    if (!button || !hero) {
        return;
    }

    var toggleButton = function () {
        if (window.scrollY > hero.offsetHeight * 0.9) {
            button.classList.add('is-visible');
        } else {
            button.classList.remove('is-visible');
        }
    };

    toggleButton();
    window.addEventListener('scroll', toggleButton, { passive: true });
});
</script>

<?php
get_footer();
