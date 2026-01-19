<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Zephyr Group - About Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="assets/js/lucide.js"></script>
    <link rel="icon" href="./assets/images/favicon.png" type="image/png" />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
    <script src="assets/js/animations.js" defer></script>
    <style>
      body {
        font-family: "Inter", sans-serif;
        background-color: #f8fafc;
      }
      
      .reveal-on-scroll {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.8s cubic-bezier(0.5, 0, 0, 1);
      }
      
      .reveal-on-scroll.revealed {
        opacity: 1;
        transform: translateY(0);
      }

      .team-card {
          transition: all 0.3s ease;
      }
      
      .team-card:hover {
          transform: translateY(-8px);
          box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
      }
      
      .gradient-text {
          background: linear-gradient(135deg, #2563eb 0%, #7c3aed 100%);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
      }
    </style>
  </head>
  <body class="text-gray-800 bg-gray-50">
    
    <!-- Navbar -->
    <?php include 'components/navbar.php'; ?>
    
    <div class="pt-20"></div>

    <!-- 🔹 About Hero Section -->
    <section class="py-24 px-6 relative overflow-hidden">
      <!-- Decor element -->
      <div class="absolute top-0 right-0 -mr-20 -mt-20 w-80 h-80 bg-indigo-100 rounded-full blur-3xl opacity-50 z-0"></div>
      <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 bg-blue-100 rounded-full blur-3xl opacity-50 z-0"></div>

      <div class="max-w-4xl mx-auto text-center relative z-10 reveal-on-scroll">
        <span class="inline-block py-1 px-3 rounded-full bg-indigo-50 text-indigo-600 text-sm font-semibold tracking-wide mb-4">OUR STORY</span>
        <h2 class="text-5xl font-extrabold mb-6 text-gray-900 tracking-tight">Revolutionizing <span class="gradient-text">Power Feedback</span></h2>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto leading-relaxed">
          We're on a mission to democratize power supply data. At <strong>Zephyr Group</strong>, we believe every voice matters in building a more reliable energy future for India.
        </p>
      </div>
    </section>

    <!-- 🔹 What We Do -->
    <section class="py-16 px-6 relative">
      <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-16 items-center">
        <div class="reveal-on-scroll" style="transition-delay: 100ms;">
          <h3 class="text-3xl font-bold text-gray-900 mb-6">
            Empowering Communities with <br><span class="text-indigo-600">Real-time Data</span>
          </h3>
          <p class="text-gray-600 mb-6 leading-relaxed">
            Infrastructure gaps are often invisible to those who can fix them. We bridge that gap by providing a platform for real-time reporting and visualization.
          </p>
          <ul class="space-y-4">
            <li class="flex items-start">
                <div class="flex-shrink-0 w-6 h-6 rounded-full bg-green-100 text-green-600 flex items-center justify-center mt-1 mr-3">
                    <i data-lucide="check" class="w-4 h-4"></i>
                </div>
                <span class="text-gray-700">Enable citizens to rate local electricity supply instantly.</span>
            </li>
            <li class="flex items-start">
                <div class="flex-shrink-0 w-6 h-6 rounded-full bg-green-100 text-green-600 flex items-center justify-center mt-1 mr-3">
                    <i data-lucide="check" class="w-4 h-4"></i>
                </div>
                <span class="text-gray-700">Identify underperforming regions with heatmaps.</span>
            </li>
            <li class="flex items-start">
                <div class="flex-shrink-0 w-6 h-6 rounded-full bg-green-100 text-green-600 flex items-center justify-center mt-1 mr-3">
                    <i data-lucide="check" class="w-4 h-4"></i>
                </div>
                <span class="text-gray-700">Drive accountability through transparent public data.</span>
            </li>
          </ul>
        </div>
        <div class="relative reveal-on-scroll" style="transition-delay: 200ms;">
            <div class="absolute inset-0 bg-gradient-to-tr from-indigo-500 to-purple-600 rounded-2xl transform rotate-3 scale-105 opacity-20"></div>
            <img
              src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2670&auto=format&fit=crop"
              alt="Data visualization"
              class="relative w-full rounded-2xl shadow-xl border border-gray-100 object-cover h-80 md:h-96"
            />
        </div>
      </div>
    </section>

    <!-- 🔹 Our Values -->
    <section class="py-24 px-6 bg-gray-900 text-white relative overflow-hidden">
      <!-- Background pattern -->
      <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#6366f1 1px, transparent 1px); background-size: 30px 30px;"></div>
      
      <div class="max-w-6xl mx-auto relative z-10">
        <div class="text-center mb-16 reveal-on-scroll">
          <h3 class="text-3xl font-bold text-white mb-4">Our Core Values</h3>
          <p class="text-indigo-200 max-w-xl mx-auto">The principles that guide every decision we make.</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
          <!-- Value 1 -->
          <div class="bg-gray-800 p-8 rounded-2xl border border-gray-700 hover:border-indigo-500 transition-colors duration-300 reveal-on-scroll">
            <div class="w-12 h-12 bg-indigo-900/50 rounded-lg flex items-center justify-center mb-6 text-indigo-400">
                <i data-lucide="users" class="w-6 h-6"></i>
            </div>
            <h4 class="text-xl font-bold text-white mb-3">Community First</h4>
            <p class="text-gray-400 leading-relaxed">
              We build for the people. Your diverse experiences shape how we improve India’s power infrastructure.
            </p>
          </div>

          <!-- Value 2 -->
          <div class="bg-gray-800 p-8 rounded-2xl border border-gray-700 hover:border-indigo-500 transition-colors duration-300 reveal-on-scroll" style="transition-delay: 100ms;">
            <div class="w-12 h-12 bg-indigo-900/50 rounded-lg flex items-center justify-center mb-6 text-indigo-400">
                <i data-lucide="search" class="w-6 h-6"></i>
            </div>
            <h4 class="text-xl font-bold text-white mb-3">Radical Transparency</h4>
            <p class="text-gray-400 leading-relaxed">
              We believe data should be open. We make power statistics honest, accessible, and actionable for everyone.
            </p>
          </div>

          <!-- Value 3 -->
          <div class="bg-gray-800 p-8 rounded-2xl border border-gray-700 hover:border-indigo-500 transition-colors duration-300 reveal-on-scroll" style="transition-delay: 200ms;">
             <div class="w-12 h-12 bg-indigo-900/50 rounded-lg flex items-center justify-center mb-6 text-indigo-400">
                <i data-lucide="lightbulb" class="w-6 h-6"></i>
            </div>
            <h4 class="text-xl font-bold text-white mb-3">Constant Innovation</h4>
            <p class="text-gray-400 leading-relaxed">
              We leverage smart technology, AI, and user feedback loops to solve real-world energy distribution problems.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- 🔹 Meet the Team -->
    <section id="about" class="py-20 bg-gray-50">
      <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-700 to-indigo-600 mb-4">Meet the Team</h2>
        <p class="text-gray-600 mb-12 max-w-2xl mx-auto text-lg">
          Behind Zephyr Group is a dedicated team passionate about creating
          accessible, efficient, and real-time process visualization tools.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Team Member 1 -->
            <div class="team-card bg-white rounded-xl overflow-hidden shadow-sm border border-gray-100 group">
                <div class="h-80 overflow-hidden relative">
                    <img src="./assets/images/N.jpeg" alt="Nitin Chaturvedi" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end justify-center pb-6 space-x-3">
                        <a href="#" class="p-2 bg-white/20 backdrop-blur-sm rounded-full text-white hover:bg-white/40 transition"><i data-lucide="linkedin" class="w-5 h-5"></i></a>
                        <a href="#" class="p-2 bg-white/20 backdrop-blur-sm rounded-full text-white hover:bg-white/40 transition"><i data-lucide="twitter" class="w-5 h-5"></i></a>
                    </div>
                </div>
                <div class="p-6 text-center relative bg-white">
                    <h3 class="text-xl font-bold text-gray-800 group-hover:text-indigo-600 transition-colors">Nitin Chaturvedi</h3>
                    <p class="text-indigo-500 font-medium text-sm uppercase tracking-wider mt-1">CEO & Founder</p>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="team-card bg-white rounded-xl overflow-hidden shadow-sm border border-gray-100 group">
                 <div class="h-80 overflow-hidden relative">
                    <img src="./assets/images/Aman.jpeg" alt="Aman Kumar" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end justify-center pb-6 space-x-3">
                        <a href="#" class="p-2 bg-white/20 backdrop-blur-sm rounded-full text-white hover:bg-white/40 transition"><i data-lucide="linkedin" class="w-5 h-5"></i></a>
                        <a href="#" class="p-2 bg-white/20 backdrop-blur-sm rounded-full text-white hover:bg-white/40 transition"><i data-lucide="twitter" class="w-5 h-5"></i></a>
                    </div>
                </div>
                 <div class="p-6 text-center relative bg-white">
                    <h3 class="text-xl font-bold text-gray-800 group-hover:text-indigo-600 transition-colors">Aman Ranjan</h3>
                    <p class="text-indigo-500 font-medium text-sm uppercase tracking-wider mt-1">CTO</p>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="team-card bg-white rounded-xl overflow-hidden shadow-sm border border-gray-100 group">
                 <div class="h-80 overflow-hidden relative">
                    <img src="./assets/images/kriti.jpeg" alt="Kriti Rai" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 top-center">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end justify-center pb-6 space-x-3">
                        <a href="#" class="p-2 bg-white/20 backdrop-blur-sm rounded-full text-white hover:bg-white/40 transition"><i data-lucide="linkedin" class="w-5 h-5"></i></a>
                        <a href="#" class="p-2 bg-white/20 backdrop-blur-sm rounded-full text-white hover:bg-white/40 transition"><i data-lucide="twitter" class="w-5 h-5"></i></a>
                    </div>
                </div>
                <div class="p-6 text-center relative bg-white">
                    <h3 class="text-xl font-bold text-gray-800 group-hover:text-indigo-600 transition-colors">Kriti Rai</h3>
                    <p class="text-indigo-500 font-medium text-sm uppercase tracking-wider mt-1">Head of Operations</p>
                </div>
            </div>
             
             <!-- Team Member 4 (Placeholder or Removed if not needed, kept structure but removed content to match visual balance or add Anjali if exists) -->
             <div class="team-card bg-white rounded-xl overflow-hidden shadow-sm border border-gray-100 group flex flex-col justify-center items-center bg-gray-50 border-dashed">
                <div class="p-6 text-center">
                     <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4 text-gray-400">
                         <i data-lucide="user-plus" class="w-8 h-8"></i>
                     </div>
                    <h3 class="text-lg font-semibold text-gray-500">Join Our Team</h3>
                    <p class="text-indigo-500 font-medium text-xs uppercase tracking-wider mt-1 cursor-pointer">View Openings</p>
                </div>
            </div>
        </div>
      </div>
    </section>

    <!-- 🔹 Footer -->
    <footer class="border-t py-12 bg-white">
      <div class="container mx-auto px-4">
        <div
          class="flex flex-col md:flex-row justify-between items-center gap-6"
        >
          <div class="flex items-center gap-2">
            
            <img
              src="./assets/images/weblogo.png"
              alt="PowerGrid Solutions"
              class="w-28 h-auto"
            />
          </div>
          <p class="text-sm text-gray-600">
            © 2025 Zephyr Group. All rights reserved.
          </p>
          <div class="flex flex-wrap gap-4">
            <a href="index.php" class="text-sm text-gray-600 hover:text-blue-600"
              >Home</a
            >
            <a href="tnc.html" target="_blank" class="text-sm text-gray-600 hover:text-blue-600"
              >Terms of Service</a
            >
            <a href="faq.php" class="text-sm text-gray-600 hover:text-blue-600"
              >FAQs</a
            >
            <a href="contact.php" class="text-sm text-gray-600 hover:text-blue-600"
              >Contact</a
            >
          </div>
        </div>
      </div>
    </footer>

    <script>

      document.addEventListener("DOMContentLoaded", function(){

        // Login button handler
        document.getElementById('loginBtn').addEventListener('click', function() {
                  const dropdown = this.nextElementSibling;
                  dropdown.classList.toggle('hidden');
              });

      })
    </script>
  </body>
</html>
