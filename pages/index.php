<?php
include '../includes/header.php';
?>

    <div class="top-bar">
        <div class="container">
            <div class="contact-info">
                <span><i class="fas fa-map-marker-alt"></i> [Insert Address Here]</span>
                <span><i class="fas fa-envelope"></i> contact@yourdomain.com</span>
            </div>
            <div class="social-icons">
                <a href="#" title="Facebook" aria-label="Follow us on Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" title="Twitter" aria-label="Follow us on Twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" title="Instagram" aria-label="Follow us on Instagram"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <header>
        <div class="container nav-container">
            <img src="../img/logo1.PNG" alt="African Rising Network logo featuring a stylized yellow feather overlaid on a dark blue silhouette of the African continent, with ARN text and tagline Empowering Future Leaders" class="logo-img" style="max-width: 120px; height: auto;">
            <a href="#" class="logo" style="margin-left: -105px;">African Rising Network</a>
            <button class="hamburger" aria-label="Toggle navigation menu">
                <i class="fas fa-bars"></i>
            </button>
            <nav class="nav-menu">
                <ul>
                    <li><a href="#home" class="nav-link">Home</a></li>
                    <li><a href="about.html" class="nav-link active">About Us</a></li>
                    <li><a href="programs.html" class="nav-link">Programs</a></li>
                    <li><a href="media.html" class="nav-link">Media</a></li>
                    <li><a href="contact.html" class="nav-link">Contact</a></li>
                </ul>
            </nav>
         <!-- <a href="#donate" class="btn btn-primary">Donate Now</a>
            <div class="hamburger">
                <i class="fas fa-bars"></i>
            </div>
        </div> -->
    </header>

    <section id="home" class="hero">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <h1>Fostering Innovation in <span>Future Leaders</span></h1>
            <p>Empowering young minds with the skills, tools, and opportunities to build a better tomorrow.</p>
            <div class="hero-btns">
                <a href="programs.html" class="btn btn-primary">Explore Programs</a>
                <a href="about.html" class="btn btn-secondary">Read About Us</a>
            </div>
        </div>
    </section>

    <section id="about" class="section">
        <div class="container about-grid">
            <div class="about-text">
                <h4 class="sub-heading">About Us</h4>
                <h2>Bridging the Digital Divide</h2>
                <p>African Rising Network (ARN) is a youth-centered organization committed to unlocking the potential of marginalized and underserved 100,000 youth in Sierra Leone and beyond through STEM education, mentorship, leadership development, and career readiness by 2040. We are committed to ensuring that every young person regardless of socioeconomic background, gender, or location has access to the guidance, skills, and opportunities required to succeed in an increasingly competitive and technology-driven world.</p>
                <ul class="feature-list">
                    <li><i class="fas fa-check-circle"></i> Quality Education for All</li>
                    <li><i class="fas fa-check-circle"></i> Reducing Inequalities</li>
                    <li><i class="fas fa-check-circle"></i> Community Empowerment</li>
                </ul>
                <a href="#" class="btn btn-outline">Learn More</a>
            </div>
            <div class="about-image">
                <img src="img/work mage.png" alt="Kids Learning" class="about-image-img" style="width: 100%; height: auto; max-width: 500px;">
            </div>
        </div>
    </section>

    <section class="stats-section">
        <div class="container stats-grid">
            <div class="stat-item">
                <h3 class="counter" data-target="5470">0</h3>
                <p>Individuals Impacted</p>
            </div>
            <div class="stat-item">
                <h3 class="counter" data-target="305">0</h3>
                <p>Community Projects</p>
            </div>
            <div class="stat-item">
                <h3 class="counter" data-target="1400">0</h3>
                <p>Volunteers</p>
            </div>
            <div class="stat-item">
                <h3 class="counter" data-target="50">0</h3>
                <p>Partner Schools</p>
            </div>
        </div>
    </section>

    <section id="programs" class="section bg-light">
        <div class="container">
            <div class="section-header">
                <h4 class="sub-heading">What We Do</h4>
                <h2>Our Programs</h2>
            </div>
            <div class="programs-grid">
                <div class="program-card">
                    <div class="card-icon"><i class="fas fa-laptop-code"></i></div>
                    <h3>Digital Skills Fellowship</h3>
                    <p>Providing essential digital literacy and coding training for students in rural and urban communities.</p>
                    <a href="#" class="read-more">Learn more &rarr;</a>
                </div>
                <div class="program-card">
                    <div class="card-icon"><i class="fas fa-users"></i></div>
                    <h3>Teen Leadership Camp</h3>
                    <p>A development camp designed to empower teenagers to unlock their leadership potential.</p>
                    <a href="#" class="read-more">Learn more &rarr;</a>
                </div>
                <div class="program-card">
                    <div class="card-icon"><i class="fas fa-rocket"></i></div>
                    <h3>Tech Incubation</h3>
                    <p>An entrepreneurship program enabling young innovators to start and scale their own tech solutions.</p>
                    <a href="#" class="read-more">Learn more &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    <section id="media" class="section">
        <div class="container">
            <div class="section-header">
                <h4 class="sub-heading">Media</h4>
                <h2>Recent News & Updates</h2>
            </div>
            <div class="news-grid">
                <article class="news-card">
                    <div class="news-img"></div>
                    <div class="news-content">
                        <span class="date">Feb 01, 2026</span>
                        <h3>Driving Climate Justice Through Tech</h3>
                        <p>How our youth ambassadors are using data to solve local environmental challenges.</p>
                        <a href="#">Read Full Story</a>
                    </div>
                </article>
                <article class="news-card">
                    <div class="news-img"></div>
                    <div class="news-content">
                        <span class="date">Jan 15, 2026</span>
                        <h3>Courtesy Visit to Ministry of Education</h3>
                        <p>Discussing the future of STEM integration in public school curriculums.</p>
                        <a href="#">Read Full Story</a>
                    </div>
                </article>
                <article class="news-card">
                    <div class="news-img"></div>
                    <div class="news-content">
                        <span class="date">Dec 20, 2025</span>
                        <h3>End of Year Impact Report</h3>
                        <p>A look back at the milestones we achieved together in the past year.</p>
                        <a href="#">Read Full Story</a>
                    </div>
                </article>
            </div>
        </div>
    </section>
<?php
include '../includes/footer.php';
?>