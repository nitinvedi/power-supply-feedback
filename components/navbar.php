<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$current_page = basename($_SERVER['PHP_SELF']);
$is_logged_in = isset($_SESSION['user_id']);
$user_role = $_SESSION['role'] ?? 'user';
$dashboard_link = $user_role === 'admin' ? 'admin/dashboard.php' : 'user_dashboard.php';
?>

<style>
    /* Navbar Styles */
    .nav-glass {
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
        border-bottom: 1px solid rgba(255, 255, 255, 0.3);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .nav-scrolled {
        background: rgba(255, 255, 255, 0.95);
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
        padding-top: 0.75rem !important;
        padding-bottom: 0.75rem !important;
    }

    .nav-link {
        position: relative;
        transition: all 0.3s ease;
    }
    
    .nav-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: -2px;
        left: 50%;
        background: linear-gradient(90deg, #4f46e5, #7c3aed);
        transition: all 0.3s ease;
        transform: translateX(-50%);
    }
    
    .nav-link:hover::after,
    .nav-link.active::after {
        width: 80%;
    }
    
    .nav-link:hover,
    .nav-link.active {
        color: #4f46e5;
    }

    .btn-gradient-border {
        position: relative;
        background: white;
        z-index: 1;
        transition: all 0.3s ease;
    }
    
    .btn-gradient-border::before {
        content: "";
        position: absolute;
        inset: -2px;
        z-index: -1;
        background: linear-gradient(135deg, #4f46e5, #7c3aed);
        border-radius: 9999px;
        transition: all 0.3s ease;
        opacity: 0;
    }
    
    .btn-gradient-border:hover::before {
        opacity: 1;
    }
    
    .btn-gradient-border:hover {
        color: white;
        background: transparent;
    }

    /* Mobile Menu Overlay */
    #mobile-menu-overlay {
        transition: opacity 0.3s ease, visibility 0.3s ease;
    }
    
    #mobile-menu-content {
        transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .mobile-nav-link {
        border-left: 3px solid transparent;
    }
    
    .mobile-nav-link.active {
        border-left-color: #4f46e5;
        background: linear-gradient(90deg, #eff6ff, transparent);
        color: #4f46e5;
    }
</style>

<header id="main-navbar" class="fixed top-0 left-0 right-0 z-50 nav-glass py-4 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-12">
            
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="index.php" class="flex items-center space-x-2 group" aria-label="Zephyr Group Home">
                    <img src="./assets/images/weblogo.png" alt="Zephyr Group" class="h-10 w-auto object-contain transition-transform duration-300 group-hover:scale-105 group-hover:drop-shadow-sm">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center space-x-8" aria-label="Main Navigation">
                <?php
                $links = [
                    'index.php' => 'Home',
                    'about.php' => 'About',
                    'contact.php' => 'Contact',
                    'faq.php' => 'FAQs'
                ];
                
                foreach ($links as $url => $label):
                    $isActive = $current_page === $url ? 'active font-semibold' : 'font-medium text-gray-600';
                ?>
                    <a href="<?= $url ?>" 
                       class="nav-link text-sm <?= $isActive ?> hover:text-indigo-600 px-1 py-1"
                       <?= $current_page === $url ? 'aria-current="page"' : '' ?>>
                        <?= $label ?>
                    </a>
                <?php endforeach; ?>
            </nav>

            <!-- Right Actions (Auth/User) -->
            <div class="hidden md:flex items-center space-x-4">
                <?php if ($is_logged_in): ?>
                    <!-- User Dropdown -->
                    <div class="relative group">
                        <button class="flex items-center space-x-2 text-gray-700 hover:text-indigo-600 focus:outline-none transition-colors">
                            <div class="w-8 h-8 rounded-full bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-white shadow-md transform group-hover:scale-105 transition-transform">
                                <i data-lucide="user" class="w-4 h-4"></i>
                            </div>
                            <span class="font-medium text-sm">Account</span>
                            <i data-lucide="chevron-down" class="w-4 h-4 text-gray-400 group-hover:text-indigo-600 transition-colors"></i>
                        </button>
                        
                        <!-- Dropdown Menu -->
                        <div class="absolute right-0 mt-3 w-48 bg-white/95 backdrop-blur-md rounded-xl shadow-xl py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform origin-top-right scale-95 group-hover:scale-100 border border-gray-100">
                             <div class="px-4 py-2 border-b border-gray-100 mb-1">
                                <p class="text-xs text-gray-500 uppercase tracking-wider">Signed in as</p>
                                <p class="text-sm font-semibold text-gray-800 truncate"><?= $user_role ?></p>
                            </div>
                            <a href="<?= $dashboard_link ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition flex items-center">
                                <i data-lucide="layout-dashboard" class="w-4 h-4 mr-2"></i> Dashboard
                            </a>
                            <a href="auth/logout.php" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50 hover:text-red-700 transition flex items-center">
                                <i data-lucide="log-out" class="w-4 h-4 mr-2"></i> Logout
                            </a>
                        </div>
                    </div>
                <?php else: ?>
                    <!-- Login/Signup -->
                     <div class="relative group">
                        <button class="flex items-center space-x-1 text-gray-600 hover:text-indigo-600 font-medium transition focus:outline-none px-3 py-2 rounded-lg hover:bg-gray-50">
                            <span>Login</span>
                            <i data-lucide="chevron-down" class="w-4 h-4"></i>
                        </button>
                        <div class="absolute right-0 mt-2 w-56 bg-white rounded-xl shadow-xl py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform origin-top-right z-50 border border-gray-100">
                            <a href="auth/login.php" class="block px-4 py-3 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition flex items-center group/item">
                                <div class="w-8 h-8 rounded-full bg-indigo-100 text-indigo-600 flex items-center justify-center mr-3 group-hover/item:bg-indigo-600 group-hover/item:text-white transition-colors">
                                    <i data-lucide="user" class="w-4 h-4"></i>
                                </div>
                                <div>
                                    <span class="block font-semibold">User Login</span>
                                    <span class="text-xs text-gray-500">Access your account</span>
                                </div>
                            </a>
                            <a href="admin/login.php" class="block px-4 py-3 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition flex items-center group/item">
                                <div class="w-8 h-8 rounded-full bg-purple-100 text-purple-600 flex items-center justify-center mr-3 group-hover/item:bg-purple-600 group-hover/item:text-white transition-colors">
                                    <i data-lucide="shield" class="w-4 h-4"></i>
                                </div>
                                <div>
                                    <span class="block font-semibold">Admin Login</span>
                                    <span class="text-xs text-gray-500">Staff access only</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <a href="auth/signup.php" class="btn-gradient-border px-6 py-2 rounded-full text-gray-800 font-semibold text-sm shadow-sm hover:shadow-md transform hover:-translate-y-0.5 transition-all">
                        Sign Up
                    </a>
                <?php endif; ?>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button type="button" id="mobile-menu-btn" class="p-2 rounded-md text-gray-600 hover:text-indigo-600 hover:bg-gray-100 focus:outline-none transition" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <i data-lucide="menu" class="h-6 w-6"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu-overlay" class="fixed inset-0 z-40 bg-gray-900/50 backdrop-blur-sm opacity-0 invisible" aria-hidden="true">
        <!-- Close button for overlay -->
        <div class="absolute inset-0" onclick="toggleMobileMenu()"></div>
        
        <!-- Sidebar -->
        <div id="mobile-menu-content" class="fixed inset-y-0 right-0 max-w-xs w-full bg-white shadow-2xl transform translate-x-full overflow-y-auto">
            <div class="p-6">
                <div class="flex items-center justify-between mb-8">
                    <img src="./assets/images/weblogo.png" alt="Logo" class="h-8 w-auto">
                    <button type="button" onclick="toggleMobileMenu()" class="p-2 rounded-full text-gray-400 hover:text-gray-500 hover:bg-gray-100 transition">
                        <i data-lucide="x" class="h-6 w-6"></i>
                    </button>
                </div>

                <div class="space-y-6">
                    <div class="space-y-1">
                        <?php foreach ($links as $url => $label): ?>
                            <a href="<?= $url ?>" 
                               class="mobile-nav-link block px-4 py-3 text-base font-medium text-gray-600 hover:bg-gray-50 rounded-lg transition-all <?= $current_page === $url ? 'active' : '' ?>">
                                <?= $label ?>
                            </a>
                        <?php endforeach; ?>
                    </div>

                    <div class="border-t border-gray-100 pt-6">
                        <?php if ($is_logged_in): ?>
                             <div class="flex items-center px-4 mb-6">
                                <div class="w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600">
                                    <i data-lucide="user" class="h-6 w-6"></i>
                                </div>
                                <div class="ml-3">
                                    <p class="text-base font-medium text-gray-800">Logged in</p>
                                    <p class="text-xs text-gray-500 capitalize"><?= $user_role ?></p>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <a href="<?= $dashboard_link ?>" class="block w-full px-4 py-2 text-center rounded-lg bg-indigo-600 text-white font-medium hover:bg-indigo-700 transition">
                                    Dashboard
                                </a>
                                <a href="auth/logout.php" class="block w-full px-4 py-2 text-center rounded-lg border border-gray-200 text-gray-700 font-medium hover:bg-gray-50 transition">
                                    Sign Out
                                </a>
                            </div>
                        <?php else: ?>
                            <div class="grid grid-cols-2 gap-4">
                                <a href="auth/login.php" class="flex justify-center items-center px-4 py-2 border border-gray-200 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 transition">
                                    Log In
                                </a>
                                <a href="auth/signup.php" class="flex justify-center items-center px-4 py-2 bg-gray-900 rounded-lg text-sm font-medium text-white hover:bg-gray-800 transition">
                                    Sign Up
                                </a>
                            </div>
                            <div class="mt-4 text-center">
                                <a href="admin/login.php" class="text-xs text-gray-500 hover:text-indigo-600 underline">Admin Access</a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    // Initialize Lucide icons
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }

    // Smart Scroll Effect
    const navbar = document.getElementById('main-navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 20) {
            navbar.classList.add('nav-scrolled');
            navbar.classList.remove('py-4');
        } else {
            navbar.classList.remove('nav-scrolled');
            navbar.classList.add('py-4');
        }
    });

    // Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
    const mobileMenuContent = document.getElementById('mobile-menu-content');
    let isMenuOpen = false;

    function toggleMobileMenu() {
        isMenuOpen = !isMenuOpen;
        if (isMenuOpen) {
            mobileMenuOverlay.classList.remove('opacity-0', 'invisible');
            mobileMenuContent.classList.remove('translate-x-full');
            document.body.style.overflow = 'hidden'; // Prevent background scrolling
        } else {
            mobileMenuOverlay.classList.add('opacity-0', 'invisible');
            mobileMenuContent.classList.add('translate-x-full');
            document.body.style.overflow = '';
        }
        
        mobileMenuBtn.setAttribute('aria-expanded', isMenuOpen);
    }

    mobileMenuBtn.addEventListener('click', toggleMobileMenu);

    // Close menu on escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && isMenuOpen) toggleMobileMenu();
    });
</script>
