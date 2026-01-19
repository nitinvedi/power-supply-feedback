<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Zephyr Group</title>
    <link rel="icon" href="./assets/images/favicon.png" type="image/png" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <!-- styling -->
    <style>
      body {
        font-family: "Inter", sans-serif;
        background-color: #f8fafc;
      }

      .glass-nav {
         background: rgba(255, 255, 255, 0.7);
         backdrop-filter: blur(12px);
         -webkit-backdrop-filter: blur(12px);
         border: 1px solid rgba(255, 255, 255, 0.3);
      }
      
      .hero-overlay {
          background: linear-gradient(to bottom, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.6) 100%);
      }
      
      .btn-primary {
          background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
          transition: all 0.3s ease;
      }
      
      .btn-primary:hover {
          transform: translateY(-2px);
          box-shadow: 0 10px 20px -10px rgba(79, 70, 229, 0.5);
      }
      
      .hero-video {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          object-fit: cover;
          z-index: -1;
      }

      .hero-overlay {
          background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.7));
      }
      
      /* Reveal on Scroll Animation */
      .reveal-on-scroll {
          opacity: 0;
          transform: translateY(30px);
          transition: all 0.8s cubic-bezier(0.5, 0, 0, 1);
      }
      
      .reveal-on-scroll.revealed {
          opacity: 1;
          transform: translateY(0);
      }

      /* Glass Card for Features */
      .glass-feature {
          background: rgba(255, 255, 255, 0.7);
          backdrop-filter: blur(10px);
          -webkit-backdrop-filter: blur(10px);
          border: 1px solid rgba(255, 255, 255, 0.5);
          transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .glass-feature:hover {
          transform: translateY(-10px);
          box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
          border-color: rgba(99, 102, 241, 0.5); /* Indigo-500 */
      }
    </style>
  </head>
  <body class="bg-gray-50 text-gray-900">
    <!-- landing view -->

    <section class="relative h-screen flex flex-col">
      <!-- Video Background -->
      <div class="hero-video">
        <video autoplay muted loop playsinline class="w-full h-full object-cover">
          <source src="./assets/videos/wind.mp4" type="video/mp4" />
          Your browser does not support the video tag.
        </video>
        <div class="absolute inset-0 hero-overlay"></div>
      </div>

      <!-- 🔹 Navbar Component -->
      <?php include 'components/navbar.php'; ?>
      
      <!-- Hero Content -->
      <div class="relative z-10 flex flex-col justify-center items-center h-full text-center px-4 pb-20 pt-20">
          <div class="max-w-4xl mx-auto space-y-6">
              <h1 class="text-5xl md:text-7xl font-extrabold text-white tracking-tight drop-shadow-lg leading-tight">
                  ZEPHYR <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-indigo-300">GROUP</span>
              </h1>
              <p class="text-xl md:text-2xl text-gray-200 font-light max-w-2xl mx-auto drop-shadow-md">
                  Empowering campus sustainability through efficient power management and real-time feedback.
              </p>
              
              <div class="pt-8">
                  <a href="#feedback" onclick="window.location.href='auth/login.php'" class="btn-primary inline-flex items-center px-8 py-4 rounded-full text-white font-semibold text-lg shadow-xl hover:shadow-2xl transition-all group">
                      Go to Feedback Section
                      <i data-lucide="arrow-right" class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                  </a>
              </div>
          </div>
          
          <!-- Scroll Indicator -->
          <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce text-white/70">
              <i data-lucide="chevron-down" class="w-8 h-8"></i>
          </div>
      </div>
    </section>            >
            <a
              href="tnc.html" target="_blank"
              class="text-black hover:text-indigo-600 transition"
              >Terms & Conditions</a
            >
          </div>

          <div class="flex items-center space-x-4">
            <div class="relative group">
              <button
                id="loginBtn"
                class="px-4 py-2 text-black hover:text-indigo-600 font-medium transition flex items-center"
              >
                Login
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-4 w-4 ml-1"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M19 9l-7 7-7-7"
                  />
                </svg>
              </button>
              <div
                id="loginDropdown"
                class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 hidden z-50 border border-gray-100"
              >
                <a
                  href="auth/login.php"
                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50"
                  >User Login</a
                >
                <a
                  href="admin/login.php"
                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50"
                  >Admin Login</a
                >
              </div>
            </div>
            <button
              onclick="window.location.href='signup.php'"
              class="px-4 py-2 bg-indigo-600 text-white rounded-full hover:bg-indigo-700 transition font-medium"
            >
              Sign Up
            </button>
          </div>
        </nav>
      </header>

      <!-- 🔹 Hero Section -->
  <section class="relative z-10 flex-grow h-[calc(100vh-80px)] flex items-center justify-center px-6 py-16 sm:py-24 lg:px-8">
    <div class="text-center text-white">
      <h1 class="text-4xl font-bold tracking-tight sm:text-5xl md:text-6xl drop-shadow-lg">
        <span id="text1"></span><br>
        <span id="text2" class="text-indigo-200"></span>
      </h1>
      <p class="mt-6 max-w-lg mx-auto text-lg font-semibold text-white drop-shadow animate-blink">
        Share your experience with power supply in your area and help us improve reliability for everyone.
      </p>
      <div class="mt-10 flex items-center justify-center gap-x-6">
        <a href="#feedback-position" class="rounded-md bg-indigo-600 px-6 py-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
          Go to Feedback Section
        </a>
      </div>
    </div>
  </section>
    </section>

    <!-- Features Section -->

    <!-- Features Section -->
    <section id="features" class="bg-gray-50 py-24 sm:py-32 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5 pointer-events-none">
            <svg width="100%" height="100%">
                <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                    <path d="M 40 0 L 0 0 0 40" fill="none" stroke="currentColor" stroke-width="1"/>
                </pattern>
                <rect width="100%" height="100%" fill="url(#grid)" />
            </svg>
        </div>

        <div class="mx-auto max-w-7xl px-6 lg:px-8 relative z-10">
            <div class="mx-auto max-w-2xl lg:text-center reveal-on-scroll">
                <h2 class="text-base font-semibold leading-7 text-indigo-600 tracking-wide uppercase">Power Supply Tracking</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                    Better insights for <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-blue-500">better reliability</span>
                </p>
                <p class="mt-6 text-lg leading-8 text-gray-600">
                    Our system collects feedback from users like you to identify patterns and improve power supply across regions.
                </p>
            </div>
            
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                    
                    <!-- Feature Card 1 -->
                    <div class="glass-feature flex flex-col bg-white/60 p-8 rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300 reveal-on-scroll" style="transition-delay: 100ms;">
                        <dt class="flex items-center gap-x-3 text-lg font-bold leading-7 text-gray-900">
                            <div class="p-2 bg-blue-100 rounded-lg text-blue-600">
                                <i data-lucide="zap" class="w-6 h-6"></i>
                            </div>
                            Real-time Monitoring
                        </dt>
                        <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600">
                            <p class="flex-auto">Track power supply status in your area with up-to-the-minute accuracy and live updates.</p>
                        </dd>
                    </div>

                    <!-- Feature Card 2 -->
                    <div class="glass-feature flex flex-col bg-white/60 p-8 rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300 reveal-on-scroll" style="transition-delay: 200ms;">
                        <dt class="flex items-center gap-x-3 text-lg font-bold leading-7 text-gray-900">
                            <div class="p-2 bg-amber-100 rounded-lg text-amber-600">
                                <i data-lucide="history" class="w-6 h-6"></i>
                            </div>
                            Historical Data
                        </dt>
                        <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600">
                            <p class="flex-auto">Access historical power supply data to identify long-term patterns and seasonal trends.</p>
                        </dd>
                    </div>

                    <!-- Feature Card 3 -->
                    <div class="glass-feature flex flex-col bg-white/60 p-8 rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300 reveal-on-scroll" style="transition-delay: 300ms;">
                        <dt class="flex items-center gap-x-3 text-lg font-bold leading-7 text-gray-900">
                            <div class="p-2 bg-emerald-100 rounded-lg text-emerald-600">
                                <i data-lucide="bar-chart-3" class="w-6 h-6"></i>
                            </div>
                            Analytics Dashboard
                        </dt>
                        <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600">
                            <p class="flex-auto">View comprehensive analytics and visual reports on power supply reliability across regions.</p>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>

    <!-- Stats Section (New) -->
    <section class="py-24 bg-indigo-900 relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('./assets/images/grid-pattern.svg')] opacity-10"></div>
        <div class="mx-auto max-w-7xl px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 gap-y-16 gap-x-8 text-center lg:grid-cols-3">
                <div class="mx-auto flex max-w-xs flex-col gap-y-4 reveal-on-scroll">
                    <dt class="text-base leading-7 text-indigo-200">Total Feedbacks</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight text-white sm:text-5xl">
                        <span class="stat-counter" data-target="15000">0</span>+
                    </dd>
                </div>
                <div class="mx-auto flex max-w-xs flex-col gap-y-4 reveal-on-scroll" style="transition-delay: 100ms;">
                    <dt class="text-base leading-7 text-indigo-200">Active Users</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight text-white sm:text-5xl">
                        <span class="stat-counter" data-target="8000">0</span>+
                    </dd>
                </div>
                <div class="mx-auto flex max-w-xs flex-col gap-y-4 reveal-on-scroll" style="transition-delay: 200ms;">
                    <dt class="text-base leading-7 text-indigo-200">Regions Covered</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight text-white sm:text-5xl">
                        <span class="stat-counter" data-target="50">0</span>+
                    </dd>
                </div>
            </div>
        </div>
    </section>

    <!-- Feedback Section -->
    <section
      id="feedback-position"
      class="relative isolate overflow-hidden bg-gradient-to-r from-[#1d4ed8] to-[#1e3a8a] py-16 sm:py-24 lg:py-32"
    >
      <div class="absolute inset-0 -z-10 opacity-30">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="100%"
          height="100%"
          preserveAspectRatio="none"
        >
          <defs>
            <pattern
              id="dotPattern"
              width="20"
              height="20"
              patternUnits="userSpaceOnUse"
            >
              <circle cx="2" cy="2" r="1" fill="currentColor" />
            </pattern>
          </defs>
          <rect width="100%" height="100%" fill="url(#dotPattern)" />
        </svg>
      </div>

      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div
          class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2"
        >
          <!-- Left Column (Text + Button) -->
          <div class="max-w-xl lg:max-w-lg">
            <h2
              class="text-3xl font-bold tracking-tight text-white sm:text-4xl"
            >
              Ready to share your feedback?
            </h2>
            <p class="mt-4 text-lg leading-8 text-blue-100">
              Your input helps us identify and address power supply issues more
              effectively.
            </p>
            <div class="mt-6 flex max-w-md gap-x-4">
              <button
                onclick="window.location.href='auth/login.php'",
                class="rounded-md bg-white px-5 py-3 text-sm font-semibold text-primary-600 shadow-md hover:bg-blue-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white transition-all duration-300"
              >
                Go to Feedback Form
              </button>
            </div>
          </div>

          <!-- Right Column (Features) -->
          <dl class="grid grid-cols-1 gap-x-8 gap-y-10 sm:grid-cols-2 lg:pt-2">
            <!-- Feature 1 -->
            <div class="flex flex-col items-start">
              <div class="rounded-md bg-white/10 p-3 ring-1 ring-white/20">
                <svg
                  class="h-6 w-6 text-white"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5"
                  />
                </svg>
              </div>
              <dt class="mt-4 font-semibold text-white">24/7 Monitoring</dt>
              <dd class="mt-2 leading-7 text-blue-100">
                We track power supply around the clock to ensure quick response
                to outages.
              </dd>
            </div>

            <!-- Feature 2 -->
            <div class="flex flex-col items-start">
              <div class="rounded-md bg-white/10 p-3 ring-1 ring-white/20">
                <svg
                  class="h-6 w-6 text-white"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z"
                  />
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z"
                  />
                </svg>
              </div>
              <dt class="mt-4 font-semibold text-white">Data-Driven</dt>
              <dd class="mt-2 leading-7 text-blue-100">
                Our decisions are based on real user feedback and comprehensive
                data analysis.
              </dd>
            </div>
          </dl>
        </div>
      </div>
    </section>

    <!-- Stats Section -->

    <section id="stats" class="bg-gray-50 py-8 sm:py-24">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:max-w-none">
          <!-- Header -->
          <div class="text-center">
            <h2
              class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"
            >
              Trusted by power consumers nationwide
            </h2>
            <p class="mt-4 text-lg leading-8 text-gray-600">
              Our platform processes thousands of feedback reports daily to
              improve grid reliability.
            </p>
          </div>

          <!-- Stats Grid -->
          <div
            class="mt-16 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4"
          >
            <!-- Stat 1: Feedback Reports -->
            <div
              class="flex flex-col bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition border border-gray-100"
            >
              <dt class="text-sm font-semibold leading-6 text-gray-500">
                Feedback Reports
              </dt>
              <dd
                class="mt-2 inline order-first text-3xl font-bold tracking-tight text-blue-600"
              >
                <span class="count-up" data-target="25000">1</span
                ><span>+</span>
              </dd>
            </div>

            <!-- Stat 2: Cities Covered -->
            <div
              class="flex flex-col bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition border border-gray-100"
            >
              <dt class="text-sm font-semibold leading-6 text-gray-500">
                Cities Covered
              </dt>
              <dd
                class="mt-2 order-first text-3xl font-bold tracking-tight text-blue-600"
              >
                <span class="count-up" data-target="120">0</span><span>+</span>
              </dd>
            </div>

            <!-- Stat 3: Response Time -->
            <div
              class="flex flex-col bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition border border-gray-100"
            >
              <dt class="text-sm font-semibold leading-6 text-gray-500">
                Response Time
              </dt>
              <dd
                class="mt-2 order-first text-3xl font-bold tracking-tight text-amber-500"
              >
                Under 2h
              </dd>
            </div>

            <!-- Stat 4: Satisfaction Rate -->
            <div
              class="flex flex-col bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition border border-gray-100"
            >
              <dt class="text-sm font-semibold leading-6 text-gray-500">
                Satisfaction Rate
              </dt>
              <dd
                class="mt-2 order-first text-3xl font-bold tracking-tight text-emerald-600"
              >
                <span class="count-up" data-target="95">1</span><span>%</span>
              </dd>
            </div>
          </div>
        </div>
      </div>
    </section>

        <!-- Testimonials -->
        <section class="bg-gray-50 py-16 sm:py-24">
          <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
              <h2
                class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"
              >
                Trusted by energy professionals
              </h2>
              <p class="mt-4 text-lg leading-8 text-gray-600">
                Hear from industry experts who rely on our power solutions daily.
              </p>
            </div>
    
            <div class="mt-16 grid gap-6 md:grid-rows-2 md:grid-cols-4">
              <!-- Testimonial 1 (Primary - Blue) -->
              <div
                class="p-8 rounded-xl shadow-lg bg-[#2563eb] text-white col-span-4 md:col-span-2 relative overflow-hidden transform transition-all duration-300 hover:scale-[1.02]"
              >
                <div class="absolute -top-10 -right-10 opacity-10">
                  <svg class="w-40 h-40" fill="currentColor" viewBox="0 0 24 24">
                    <path
                      d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z"
                    />
                  </svg>
                </div>
                <div class="relative z-10">
                  <div class="flex items-center">
                    <img
                      class="w-10 h-10 rounded-full border-2 border-blue-300"
                      src="https://randomuser.me/api/portraits/men/32.jpg"
                      alt="Michael Chen"
                    />
                    <div class="ml-4">
                      <p class="text-blue-100 font-semibold">Michael Chen</p>
                      <p class="text-blue-200 text-sm">
                        Senior Power Systems Engineer
                      </p>
                    </div>
                  </div>
                  <h4 class="mt-6 text-xl font-semibold leading-snug">
                    The most reliable power supply units I've worked with
                  </h4>
                  <p class="mt-4 text-blue-100 line-clamp-6 md:line-clamp-none">
                    "After implementing these power supply units across our data
                    centers, we've seen a 40% reduction in power-related failures.
                    The efficiency metrics exceeded our expectations." Lorem ipsum
                    dolor sit, amet consectetur adipisicing elit. Quaerat nesciunt
                    assumenda at omnis aperiam necessitatibus incidunt blanditiis
                    sapiente ipsam est perferendis corrupti, molestiae asperiores
                    earum hic tempora quidem atque illo cum, eius minus nemo quos
                    rerum unde. Magni, reprehenderit tenetur.
                  </p>
                </div>
              </div>
    
              <!-- Testimonial 2 (Green) -->
              <div
                class="p-8 rounded-xl shadow-lg bg-emerald-600 text-white col-span-4 md:col-span-1 transform transition-all duration-300 hover:scale-[1.02]"
              >
                <div class="flex items-center">
                  <img
                    class="w-10 h-10 rounded-full border-2 border-emerald-300"
                    src="https://randomuser.me/api/portraits/women/44.jpg"
                    alt="Sarah Johnson"
                  />
                  <div class="ml-4">
                    <p class="text-emerald-100 font-semibold">Sarah Johnson</p>
                    <p class="text-emerald-200 text-sm">Data Center Manager</p>
                  </div>
                </div>
                <h4 class="mt-6 text-xl font-semibold leading-snug">
                  Unmatched efficiency
                </h4>
                <p class="mt-4 text-emerald-100">
                  "200+ units deployed with zero failures in 3 years. Reduced our
                  energy costs by 18% annually." Lorem ipsum, dolor sit amet
                  consectetur adipisicing elit. Iusto labore officia obcaecati
                  eligendi magni numquam.
                </p>
              </div>
    
              <!-- Testimonial 3 (White - Long) -->
              <div
                class="p-8 rounded-xl shadow-lg bg-white text-gray-800 col-span-4 md:col-span-1 row-span-2 border border-gray-100 transform transition-all duration-300 hover:scale-[1.02]"
              >
                <div class="flex items-center">
                  <img
                    class="w-10 h-10 rounded-full"
                    src="https://randomuser.me/api/portraits/men/75.jpg"
                    alt="David Rodriguez"
                  />
                  <div class="ml-4">
                    <p class="font-semibold">David Rodriguez</p>
                    <p class="text-gray-600 text-sm">
                      Electrical Engineering Consultant
                    </p>
                  </div>
                </div>
                <h4 class="mt-6 text-xl font-semibold leading-snug text-gray-900">
                  Industrial power solutions perfected
                </h4>
                <p class="mt-4 text-gray-700">
                  "I've specified these for dozens of manufacturing clients. They
                  deliver clean, stable power even in the most demanding
                  environments with electrical noise and fluctuations." Lorem ipsum
                  dolor sit amet consectetur, adipisicing elit. Quae nihil
                  laudantium dolores neque tempora nobis? Obcaecati optio maxime
                  rerum. Placeat cumque vitae ratione maiores modi neque vel
                  possimus dolorum officiis assumenda quia vero iure, facilis in
                  culpa corrupti recusandae veritatis.
                </p>
              </div>
    
              <!-- Testimonial 4 (Amber) -->
              <div
                class="p-8 rounded-xl shadow-lg bg-amber-500 text-white col-span-4 md:col-span-1 transform transition-all duration-300 hover:scale-[1.02]"
              >
                <div class="flex items-center">
                  <img
                    class="w-10 h-10 rounded-full border-2 border-amber-300"
                    src="https://randomuser.me/api/portraits/women/68.jpg"
                    alt="Jennifer Park"
                  />
                  <div class="ml-4">
                    <p class="text-amber-100 font-semibold">Jennifer Park</p>
                    <p class="text-amber-200 text-sm">
                      Renewable Energy Specialist
                    </p>
                  </div>
                </div>
                <h4 class="mt-6 text-xl font-semibold leading-snug">
                  Perfect for solar installations
                </h4>
                <p class="mt-4 text-amber-100">
                  "The wide input voltage range handles solar fluctuations
                  beautifully in our hybrid systems." Lorem ipsum dolor sit amet
                  consectetur adipisicing elit. Repudiandae, odit!
                </p>
              </div>
    
              <!-- Testimonial 5 (Dark Blue) -->
              <div
                class="p-8 rounded-xl shadow-lg bg-blue-800 text-white col-span-4 md:col-span-2 transform transition-all duration-300 hover:scale-[1.02]"
              >
                <div class="flex items-center">
                  <img
                    class="w-10 h-10 rounded-full border-2 border-blue-400"
                    src="https://randomuser.me/api/portraits/men/91.jpg"
                    alt="Robert Williams"
                  />
                  <div class="ml-4">
                    <p class="text-blue-100 font-semibold">Robert Williams</p>
                    <p class="text-blue-200 text-sm">CTO, Telecom Solutions</p>
                  </div>
                </div>
                <h4 class="mt-6 text-xl font-semibold leading-snug">
                  Revolutionized tower power reliability
                </h4>
                <p class="mt-4 text-blue-100">
                  "300% increase in mean time between failures at 150 cellular
                  sites. Remote monitoring transformed our maintenance." Lorem,
                  ipsum dolor sit amet consectetur adipisicing elit. Temporibus eius
                  distinctio, quae blanditiis eos libero molestiae voluptatibus
                  alias excepturi id vero totam sed aspernatur dignissimos!
                </p>
              </div>
            </div>
          </div>
        </section>

    <!-- Footer -->

    <footer class="bg-gray-900 text-white py-12">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
          <!--Logo -->
          <div class="space-y-4">
            <img
              src="./assets/images/weblogo.png"
              alt="PowerGrid Solutions"
              class="w-28 h-auto"
            />
            <p class="text-gray-400">
              Empowering communities with reliable electricity insights and
              solutions.
            </p>
            <div class="flex space-x-4 text-blue-400 text-lg">
              <a
                href="#"
                class="hover:text-blue-300 transition"
                aria-label="Facebook"
              >
                <i class="fab fa-facebook"></i>
              </a>
              <a
                href="#"
                class="hover:text-blue-300 transition"
                aria-label="Twitter"
              >
                <i class="fab fa-twitter"></i>
              </a>
              <a
                href="#"
                class="hover:text-blue-300 transition"
                aria-label="LinkedIn"
              >
                <i class="fab fa-linkedin"></i>
              </a>
              <a
                href="#"
                class="hover:text-blue-300 transition"
                aria-label="YouTube"
              >
                <i class="fab fa-youtube"></i>
              </a>
            </div>
          </div>

          <!--  Quick Links -->
          <div>
            <h3 class="text-blue-400 text-lg font-semibold mb-4">
              Quick Links
            </h3>
            <ul class="space-y-2">
              <li>
                <a href="#" class="text-gray-400 hover:text-blue-300 transition"
                  >About</a
                >
              </li>
              <li>
                <a href="faq.php" class="text-gray-400 hover:text-blue-300 transition"
                  >FAQS</a
                >
              </li>
              <li>
                <a href="tnq.html" target="_blank" class="text-gray-400 hover:text-blue-300 transition"
                  >Terms & Conditions</a
                >
              </li>
            </ul>
          </div>

          <!--  Contact -->
          <div>
            <h3 class="text-blue-400 text-lg font-semibold mb-4">Contact Us</h3>
            <div class="space-y-3">
              <div class="flex items-start">
                <i class="fas fa-map-marker-alt text-blue-400 mt-1 mr-3"></i>
                <p class="text-gray-400">
                  123 LPU, Phagwara 500<br />Punjab, India 144410
                </p>
              </div>
              <div class="flex items-center">
                <i class="fas fa-phone-alt text-blue-400 mr-3"></i>
                <p class="text-gray-400">+91 7068458933</p>
              </div>
              <div class="flex items-center">
                <i class="fas fa-envelope text-blue-400 mr-3"></i>
                <p class="text-gray-400">support@powergridtracker.com</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Newsletter Signup -->
        <div class="mt-12 pt-8 border-t border-gray-800">
          <div class="max-w-md mx-auto">
            <h3 class="text-blue-400 text-lg font-semibold text-center mb-4">
              Get Power Updates
            </h3>
            <form class="flex">
              <input
                type="email"
                placeholder="Your email address"
                class="flex-grow px-4 py-3 bg-gray-800 text-white rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                required
              />
              <button
                type="submit"
                class="px-6 py-3 bg-blue-600 hover:bg-blue-500 text-white font-medium rounded-r-lg transition"
              >
                Subscribe
              </button>
            </form>
            <p class="text-gray-500 text-xs mt-2 text-center">
              We'll never share your email. Unsubscribe anytime.
            </p>
          </div>
        </div>

        <!-- Copyright -->
        <div class="mt-12 text-center text-gray-500 text-sm">
          <p>© 2023 ZEPHYR. All rights reserved.</p>
        </div>
      </div>
    </footer>

    <!-- Script for our page -->

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        // Login button handler
        document
          .getElementById("loginBtn")
          .addEventListener("click", function () {
            const dropdown = this.nextElementSibling;
            dropdown.classList.toggle("hidden");
          });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
          anchor.addEventListener("click", function (e) {
            e.preventDefault();
            const targetId = this.getAttribute("href");
            if (targetId === "#") return;

            const targetElement = document.querySelector(targetId);
            if (targetElement) {
              targetElement.scrollIntoView({
                behavior: "smooth",
              });
            }
          });
        });

        const text1 = "ZEPHYR";
        const text2 = "GROUPS";

        let index1 = 0;
        let index2 = 0;

        function typeLetter1() {
          const el = document.getElementById("text1");
          if (index1 < text1.length && el) {
            el.innerHTML += text1.charAt(index1);
            index1++;
            const typingSpeed = Math.random() * 30 + 50;
            setTimeout(typeLetter1, typingSpeed);
          } else {
            setTimeout(typeLetter2, 300);
          }
        }

        function typeLetter2() {
          const el = document.getElementById("text2");
          if (index2 < text2.length && el) {
            el.innerHTML += text2.charAt(index2);
            index2++;
            const typingSpeed = Math.random() * 30 + 50;
            setTimeout(typeLetter2, typingSpeed);
          }
        }

        setTimeout(typeLetter1, 1000);
      });

      const counters = document.querySelectorAll(".count-up");

      const animateCount = (el, target) => {
        let start = 0;
        const duration = 2000;
        const increment = target / (duration / 16);

        const updateCounter = () => {
          start += increment;
          if (start < target) {
            el.textContent = Math.floor(start).toLocaleString();
            requestAnimationFrame(updateCounter);
          } else {
            el.textContent = target.toLocaleString(); // Add commas
            if (el.dataset.suffix) el.textContent += el.dataset.suffix;
          }
        };

        updateCounter();
      };

      const observer = new IntersectionObserver(
        (entries) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              // Animate only if not already counting
              counters.forEach((el) => {
                const target = +el.getAttribute("data-target");
                const suffix = el.getAttribute("data-suffix") || "";
                el.setAttribute("data-suffix", suffix);
                animateCount(el, target);
              });
            } else {
              // Reset counters when out of view so they animate again next time
              counters.forEach((el) => {
                el.textContent = el.dataset.start || "0";
              });
            }
          });
        },
        { threshold: 0.5 }
      );

      const statsSection = document.querySelector("#stats");
      if (statsSection) observer.observe(statsSection);
    </script>
  </body>
</html>
