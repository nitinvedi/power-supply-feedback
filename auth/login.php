<?php include '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    $password = $_POST['password'];
    
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $login, $login);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = $user['role'];
            header("Location: ".($user['role'] == 'admin' ? '../admin/dashboard.php' : '../user_dashboard.php'));
            exit();
        }
    }
    $error = "Invalid credentials!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zephyr Group - Login</title>
    <link rel="icon" href="../assets/images/favicon.png" type="image/png">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50: '#eff6ff', 100: '#dbeafe', 200: '#bfdbfe', 300: '#93c5fd', 400: '#60a5fa',
                            500: '#3b82f6', 600: '#2563eb', 700: '#1d4ed8', 800: '#1e40af', 900: '#1e3a8a',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .glass-card {
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        }
        
        .video-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
        }

        .input-group:focus-within label {
            color: #2563eb;
        }
        
        .input-group:focus-within i {
            color: #2563eb;
        }
    </style>
</head>
<body class="font-sans min-h-screen relative overflow-hidden flex items-center justify-center p-4">
    <!-- Video Background -->
    <video autoplay muted loop playsinline class="video-bg">
        <source src="../assets/videos/monkey.mp4" type="video/mp4">
    </video>
    <!-- Overlay -->
    <div class="absolute inset-0 bg-gradient-to-br from-blue-900/40 to-purple-900/40 z-0"></div>

    <div class="max-w-4xl w-full relative z-10 flex rounded-2xl overflow-hidden shadow-2xl glass-card">
        
        <!-- Login Form Section -->
        <div class="w-full md:w-1/2 p-8 md:p-12 bg-white/60 backdrop-blur-md">
            <a href="../index.php" class="inline-flex items-center text-gray-600 hover:text-primary-600 transition-colors mb-8">
                <i data-lucide="arrow-left" class="w-5 h-5 mr-2"></i>
                Back to Home
            </a>

            <div class="text-center mb-8">
                <img src="../assets/images/weblogo.png" alt="Logo" class="h-10 mx-auto mb-4 object-contain">
                <h1 class="text-2xl font-bold text-gray-800">Welcome Back</h1>
                <p class="text-gray-600 text-sm mt-1">Please enter your details to sign in.</p>
            </div>
            
            <?php if(isset($error)): ?>
                <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6 rounded-r">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <i data-lucide="alert-circle" class="h-5 w-5 text-red-500"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-red-700"><?php echo $error; ?></p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <form method="POST" class="space-y-6">
                <!-- Username/Email -->
                <div class="input-group">
                    <label class="block text-sm font-medium text-gray-700 mb-1 transition-colors">Username or Email</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i data-lucide="user" class="h-5 w-5 text-gray-400 transition-colors"></i>
                        </div>
                        <input type="text" name="login" required 
                            class="block w-full pl-10 pr-3 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 bg-white/50 transition-all placeholder-gray-400"
                            placeholder="Enter your username">
                    </div>
                </div>

                <!-- Password -->
                <div class="input-group">
                    <label class="block text-sm font-medium text-gray-700 mb-1 transition-colors">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i data-lucide="lock" class="h-5 w-5 text-gray-400 transition-colors"></i>
                        </div>
                        <input type="password" name="password" required 
                            class="block w-full pl-10 pr-3 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 bg-white/50 transition-all placeholder-gray-400"
                            placeholder="••••••••">
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                        <label for="remember-me" class="ml-2 block text-sm text-gray-700">Remember me</label>
                    </div>
                    <div class="text-sm">
                        <a href="forgot-password.php" class="font-medium text-primary-600 hover:text-primary-500 hover:underline transition-all">Forgot password?</a>
                    </div>
                </div>

                <button type="submit" 
                    class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-gradient-to-r from-primary-600 to-indigo-600 hover:from-primary-700 hover:to-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transform transition-all hover:-translate-y-0.5 shadow-lg hover:shadow-xl">
                    Sign in
                </button>
            </form>

            <div class="mt-8">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white/0 backdrop-blur-sm text-gray-500">Or continue with</span>
                    </div>
                </div>

                <div class="mt-6 flex justify-center">
                    <a href="google-login.php" class="w-full max-w-xs flex items-center justify-center px-4 py-2 border border-gray-300 rounded-lg shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 transition-colors">
                        <img src="../assets/images/google.png" alt="Google" class="h-5 w-5 mr-2">
                        Google
                    </a>
                </div>
            </div>
            
             <div class="mt-8 text-center space-y-2">
                <p class="text-sm text-gray-600">
                    Don't have an account? 
                    <a href="signup.php" class="font-medium text-primary-600 hover:text-primary-500 hover:underline transition-all">Sign up</a>
                </p>
                <p class="text-xs text-gray-500">
                    Are you an admin? 
                    <a href="../admin/login.php" class="font-medium text-gray-600 hover:text-primary-600 hover:underline transition-all">Admin login</a>
                </p>
            </div>
        </div>

        <!-- Info Section (Hidden on Mobile) -->
        <div class="hidden md:block w-1/2 p-12 text-white relative flex flex-col justify-center items-center text-center bg-blue-600/20">
            <h2 class="text-3xl font-bold mb-4 drop-shadow-md">Powering the Future</h2>
            <p class="text-lg text-blue-100 max-w-sm drop-shadow">Your feedback helps us identify and resolve power issues efficiently across campus.</p>
        </div>
    </div>

    <script src="../assets/js/animations.js" defer></script>
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const icon = document.querySelector('.eye-icon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.innerHTML = '<path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line>';
            } else {
                passwordInput.type = 'password';
                icon.innerHTML = '<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle>';
            }
            lucide.createIcons();
        }

        // Button Loading State
        document.querySelector('form').addEventListener('submit', function(e) {
            const btn = this.querySelector('button[type="submit"]');
            const originalText = btn.innerText;
            btn.innerHTML = `<svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg> Signing in...`;
            btn.disabled = true;
            btn.classList.add('opacity-75', 'cursor-not-allowed');
        });
    </script>
</body>
</html>