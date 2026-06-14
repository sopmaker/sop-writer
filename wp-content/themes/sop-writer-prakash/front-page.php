<?php
/**
 * Front page template.
 *
 * @package SOP_Writer_Prakash
 */

get_header();

$content_data = sop_writer_prakash_get_content_data();
$college_logo_items = $content_data['college_logo_items'];
$client_reviews = $content_data['client_reviews'];
$hero_image_url = 'https://sop-writer.in/wp-content/uploads/2026/02/prakash-sop-india.jpg';
$meet_prakash_image_url = 'https://sop-writer.in/wp-content/uploads/2026/02/prakash-sop-india.jpg';
$guide_thumb_url = 'https://images.unsplash.com/photo-1526304640581-d334cdbbf45e?auto=format&fit=crop&w=520&q=80';
$contact_status = filter_input(INPUT_GET, 'contact_status', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$whatsapp_message = rawurlencode('Hi Prakash, I\'d like to talk about my SOP.');
$whatsapp_url = 'https://wa.me/918447385389?text=' . $whatsapp_message;

$faq_items = [
    [
        'question' => 'What is a Statement of Purpose (SOP)?',
        'answer' => 'An SOP is a written document, usually 800–1,200 words, where you explain why you\'re applying to a specific program, what in your background supports that choice, and what you plan to do afterward. Universities use it to assess fit and motivation; visa officers sometimes review a version of it to assess intent.',
    ],
    [
        'question' => 'Can universities tell if an SOP was written using AI?',
        'answer' => 'Many universities now use AI-detection and authenticity checks alongside human review. AI-generated text often has a recognizable rhythm — even when factually accurate, it can read as generic. A profile-first SOP, written and edited by someone who knows your background, is less likely to be flagged and more likely to sound like an actual applicant.',
    ],
    [
        'question' => 'Is it safe to use ChatGPT or other AI tools to write my SOP?',
        'answer' => 'AI tools are useful for brainstorming or organizing your thoughts, but submitting AI-generated text directly carries risk — both from detection tools and from the SOP not reflecting your actual voice or specifics. The safer approach: use AI as a starting point, then have a human editor rebuild it around your real profile.',
    ],
    [
        'question' => 'What\'s the difference between an SOP, a personal statement, and an LOR?',
        'answer' => 'An SOP and a personal statement serve a similar purpose — explaining your motivation and fit for a program — but "personal statement" is more common terminology in the UK and for undergraduate applications. A Letter of Recommendation (LOR) is written by someone else, such as a professor or employer, vouching for you — not by the applicant.',
    ],
    [
        'question' => 'How long does it take to get my SOP ready?',
        'answer' => 'Timelines depend on the package and how far along your draft already is, but most SOPs go through 2–3 structured review cycles after the first draft. If you\'re working against a tight deadline, mention this during your free consultation so the schedule can be planned around it.',
    ],
    [
        'question' => 'What if my SOP gets rejected — can I revise it with you?',
        'answer' => 'Yes. A rejection or resubmission request usually means the SOP didn\'t address something specific, and that\'s identifiable and fixable. Rejection-stage SOPs are first reviewed for what likely went wrong before any rewriting starts.',
    ],
    [
        'question' => 'Do you guarantee admission or a visa?',
        'answer' => 'No — and any consultant who does is making a promise they can\'t keep. Admission and visa decisions are made by universities and government officers based on far more than one document.',
        'extra' => 'What\'s guaranteed here: original, profile-based writing, direct access to the person doing the work, and a realistic assessment of your case.',
    ],
    [
        'question' => 'How much does SOP writing cost in India?',
        'answer' => 'Pricing depends on the service — SOP only, SOP + LOR, or full application support — and how many programs or applications are involved. See the Pricing section above for current starting prices. Every quote is given in writing during the free consultation, before any payment.',
    ],
];

$faq_schema_entities = array_map(
    static function ($item) {
        $answer = $item['answer'];
        if (!empty($item['extra'])) {
            $answer .= ' ↳ This is the one promise worth being suspicious of when other consultants make it. ' . $item['extra'];
        }

        return [
            '@type' => 'Question',
            'name' => $item['question'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $answer,
            ],
        ];
    },
    $faq_items
);

$service_schema_entities = [
    'SOP Writing and Editing',
    'LOR Writing and Editing',
    'VISA SOP / Letter of Motivation Support',
    'Profile Assessment',
    'Admissions Resume Writing',
    'Full Application Support',
];
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

    <section id="programs-visa">
        <div class="container narrow">
            <h2>Programs and Visa Categories We Work On</h2>
            <div class="tag-block">
                <h3>By Program Type</h3>
                <p>SOPs are written differently depending on the program — a PhD SOP needs to demonstrate research fit, while a diploma SOP needs to demonstrate intent and progression. Prakash adjusts structure and tone to match what reviewers for each program type are actually looking for.</p>
                <div class="pill-cloud" aria-label="Program types">
                    <span>SOP for PhD</span><span>SOP for Master&#39;s</span><span>SOP for Postgraduate Diploma</span><span>SOP for Bachelor&#39;s</span><span>SOP for Financial Aid Applications</span><span>Master&#39;s in Data Science SOP</span><span>MS in Computer Science SOP</span><span>Master&#39;s in Business Analytics SOP</span><span>Master&#39;s in Cybersecurity SOP</span><span>Master&#39;s in Public Health SOP</span>
                </div>
            </div>
            <div class="tag-block">
                <h3>By Visa Category</h3>
                <p>Visa officers read SOPs (or Letters of Explanation/Motivation) differently from admissions committees — they&#39;re assessing intent, ties, and credibility, not just academic fit. Country-specific expectations matter here more than almost anywhere else.</p>
                <div class="pill-cloud" aria-label="Visa categories">
                    <span>Study Visa SOP</span><span>Tourist Visa SOP</span><span>Research Position SOP</span><span>Academic Transfer SOP</span><span>Dependent Visa SOP</span><span>Spouse Visa SOP</span><span>Work Visa SOP</span><span>SOP for Master&#39;s in the UK</span><span>SOP for Master&#39;s in Canada</span><span>SOP for Master&#39;s in Australia</span>
                </div>
            </div>
        </div>
    </section>

    <section id="ai-callout" class="dark-section">
        <div class="container narrow">
            <p class="eyebrow">Before You Submit</p>
            <h2>Did You Write Your SOP Using AI?</h2>
            <p>AI tools can help you think and draft — but most universities now run authenticity checks, and a visibly AI-shaped SOP can quietly work against a fee-paying application. The fix isn&#39;t necessarily starting over. It&#39;s a profile-first edit that keeps your real story and removes what makes a draft sound machine-written.</p>
            <aside class="callout-annotation">Common giveaway: sentences that are grammatically flawless but say nothing specific about you. A reviewer notices the second one before the first.</aside>
            <a class="btn btn-brass" href="#contact">Get an Honest Read of Your Draft</a>
        </div>
    </section>

    <section id="countries-universities">
        <div class="container">
            <p class="eyebrow">Countries We Serve for SOP &amp; LOR Guidance</p>
            <h2>Where Students Have Applied — and Gotten In</h2>
            <h3>Countries</h3>
            <p>Each country has its own SOP and visa-document conventions — what a UK personal statement expects is different from a Canadian study-permit SOP, which is different again from a US graduate statement of purpose.</p>
            <div class="pill-cloud" aria-label="Countries">
                <span>Canada</span><span>United States</span><span>United Kingdom</span><span>Australia</span><span>New Zealand</span><span>Germany</span><span>France</span><span>Ireland</span><span>Italy</span><span>Singapore</span><span>South Korea</span><span>UAE</span>
            </div>
            <h3>Universities</h3>
            <p>A sample of universities students have been admitted to after working on their SOPs here — not an exhaustive list, and not a promise of similar outcomes for every applicant.</p>
            <div class="logo-strip-wrap">
                <div class="logo-strip" aria-label="University logos">
                    <?php foreach (array_merge($college_logo_items, $college_logo_items) as $college_logo_item) : ?>
                        <div class="logo-chip">
                            <img src="<?php echo esc_url($college_logo_item['logo']); ?>" alt="<?php echo esc_attr($college_logo_item['name']); ?> logo" loading="lazy">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section id="faq">
        <div class="container narrow faq-wrap">
            <p class="eyebrow">Questions People Ask Before Booking</p>
            <h2>Frequently Asked Questions</h2>
            <div class="faq-accordion">
                <?php foreach ($faq_items as $index => $faq_item) : ?>
                    <details <?php echo 0 === $index ? 'open' : ''; ?>>
                        <summary><?php echo esc_html($faq_item['question']); ?></summary>
                        <p><?php echo esc_html($faq_item['answer']); ?></p>
                        <?php if (!empty($faq_item['extra'])) : ?>
                            <p class="faq-annotation">↳ This is the one promise worth being suspicious of when other consultants make it.</p>
                            <p><?php echo esc_html($faq_item['extra']); ?></p>
                        <?php endif; ?>
                    </details>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="reviews-video">
        <div class="container">
            <p class="eyebrow">Client Reviews</p>
            <h2>What Students &amp; Parents Say</h2>
            <div class="review-row">
                <?php foreach ($client_reviews as $review_index => $client_review) : ?>
                    <article class="paper-card review-card-stack <?php echo 0 === $review_index % 2 ? 'tilt-left' : 'tilt-right'; ?>">
                        <p>&ldquo;<?php echo esc_html($client_review['text']); ?>&rdquo;</p>
                        <p class="review-byline">— <?php echo esc_html($client_review['name']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
            <div class="video-frame">
                <iframe src="https://www.youtube.com/embed?listType=search&amp;list=Beyond%20Borders%20with%20Prakash" title="Beyond Borders with Prakash" loading="lazy" allowfullscreen></iframe>
            </div>
            <p class="dev-note"><strong>Dev note:</strong> As more reviews come in, prefer ones that name the program/intake and outcome (with the client&#39;s permission) over generic praise — these are more useful for both readers and AI-search citation.</p>
        </div>
    </section>

    <section id="free-guides">
        <div class="container">
            <p class="eyebrow">Free Guidance, Written by Prakash</p>
            <h2>Before You Book, Read This</h2>
            <div class="guides-grid">
                <article class="paper-card guide-card">
                    <img src="<?php echo esc_url($guide_thumb_url); ?>" alt="Passport and visa documents on a desk" loading="lazy">
                    <h3>How to Write an SOP for a Canadian Study Permit</h3>
                    <p>What Canadian visa officers are actually looking for, and how it differs from a university admissions SOP.</p>
                    <a href="#">Read Guide</a>
                </article>
                <article class="paper-card guide-card">
                    <img src="<?php echo esc_url($guide_thumb_url); ?>" alt="Draft documents and notes on a desk" loading="lazy">
                    <h3>SOP vs. Personal Statement: What&#39;s Actually Different</h3>
                    <p>The terminology changes by country — here&#39;s what stays the same and what doesn&#39;t.</p>
                    <a href="#">Read Guide</a>
                </article>
                <article class="paper-card guide-card">
                    <img src="<?php echo esc_url($guide_thumb_url); ?>" alt="Laptop with edited SOP draft" loading="lazy">
                    <h3>How to Tell If Your SOP Sounds AI-Written (And How to Fix It)</h3>
                    <p>The patterns reviewers notice, and how to edit them out without starting over.</p>
                    <a href="#">Read Guide</a>
                </article>
            </div>
            <p class="dev-note"><strong>Dev note:</strong> [PLACEHOLDER — articles need to be written]. These three titles are recommended starting topics based on common search queries in this space. Each should be a full article (800+ words) living at its own URL, linked from here.</p>
        </div>
    </section>

    <section id="contact">
        <div class="container narrow">
            <div class="contact-grid-home">
                <div>
                    <p class="eyebrow">Contact Prakash</p>
                    <h2>Talk to Prakash Directly</h2>
                    <p>Share your profile and target program, and Prakash will personally get back to you. This isn&#39;t routed through a sales team.</p>
                    <p><strong>Phone / WhatsApp:</strong> <a href="tel:+918447385389">+91 84473 85389</a></p>
                    <p><strong>Email:</strong> <a href="mailto:contact@sop-writer.in">contact@sop-writer.in</a></p>
                    <p>Prefer WhatsApp? <a href="<?php echo esc_url($whatsapp_url); ?>" target="_blank" rel="noopener noreferrer">Message on WhatsApp</a> — usually the fastest way to reach Prakash directly.</p>
                    <?php if ('success' === $contact_status) : ?>
                        <p class="form-message form-success">Thanks! Your message has been submitted successfully.</p>
                    <?php elseif ('failed' === $contact_status) : ?>
                        <p class="form-message form-error">Something went wrong. Please try again or contact us directly.</p>
                    <?php endif; ?>
                </div>
                <div class="paper-card no-tilt contact-form-wrap">
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
                            <option value="Profile Assessment">Profile Assessment</option>
                            <option value="Resume">Resume</option>
                            <option value="Full Application Support">Full Application Support</option>
                        </select>

                        <label for="sp-message">Message *</label>
                        <textarea id="sp-message" name="message" rows="4" required></textarea>

                        <button class="btn btn-primary" type="submit">Submit Inquiry</button>
                    </form>
                </div>
            </div>
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

<script type="application/ld+json">
<?php
echo wp_json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => $faq_schema_entities,
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
?>
</script>
<script type="application/ld+json">
<?php
echo wp_json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Person',
    'name' => 'Prakash',
    'jobTitle' => 'SOP Editor',
    'worksFor' => [
        '@type' => 'Organization',
        'name' => 'SOP by Prakash',
    ],
    'sameAs' => [
        'https://instagram.com/prakashabroad',
        'https://www.youtube.com/@beyondborderswithprakash',
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
?>
</script>
<script type="application/ld+json">
<?php
echo wp_json_encode([
    '@context' => 'https://schema.org',
    '@type' => ['Organization', 'ProfessionalService'],
    'name' => 'SOP by Prakash',
    'url' => home_url('/'),
    'telephone' => '+91 84473 85389',
    'email' => 'contact@sop-writer.in',
    'areaServed' => [
        'India',
        'Canada',
        'United States',
        'United Kingdom',
        'Australia',
        'New Zealand',
        'Germany',
        'France',
        'Ireland',
        'Italy',
        'Singapore',
        'South Korea',
        'United Arab Emirates',
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
?>
</script>
<?php foreach ($service_schema_entities as $service_schema_name) : ?>
    <script type="application/ld+json">
    <?php
    echo wp_json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => $service_schema_name,
        'provider' => [
            '@type' => 'ProfessionalService',
            'name' => 'SOP by Prakash',
            'url' => home_url('/'),
        ],
        'areaServed' => 'India',
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    ?>
    </script>
<?php endforeach; ?>

<?php
get_footer();
