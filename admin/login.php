<?php include '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND role = 'admin'");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = 'admin';
            header("Location: dashboard.php");
            exit();
        }
    }
    $error = "Invalid admin credentials!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PowerFeedback - Admin Login</title>
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
    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/60 to-black/60 z-0"></div>

    <div class="max-w-md w-full relative z-10 glass-card rounded-2xl overflow-hidden p-8 shadow-2xl">
        <a href="../auth/login.php" class="inline-flex items-center text-gray-600 hover:text-primary-600 transition-colors mb-6 text-sm font-medium">
            <i data-lucide="arrow-left" class="w-4 h-4 mr-2"></i>
            Back to User Login
        </a>

        <div class="text-center mb-8">
            <div class="bg-primary-600/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 backdrop-blur-sm">
                <i data-lucide="shield" class="h-8 w-8 text-primary-700"></i>
            </div>
            <h1 class="text-2xl font-bold text-gray-800">Admin Portal</h1>
            <p class="text-gray-600 text-sm mt-1">Restricted access area</p>
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
            <!-- Username -->
            <div class="input-group">
                <label class="block text-sm font-medium text-gray-700 mb-1 transition-colors">Admin Username</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i data-lucide="user-cog" class="h-5 w-5 text-gray-400 transition-colors"></i>
                    </div>
                    <input type="text" name="username" required 
                        class="block w-full pl-10 pr-3 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 bg-white/50 transition-all placeholder-gray-400"
                        placeholder="admin">
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

            <button type="submit" 
                class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-gray-900 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 transform transition-all hover:-translate-y-0.5 shadow-lg">
                Access Dashboard
            </button>
        </form>
        
        <div class="mt-6 text-center">
            <p class="text-sm text-gray-600">
                <i data-lucide="info" class="h-4 w-4 inline-block mr-1"></i>
                Note: Admin credentials are provided separately
            </p>
        </div>
    </div>

    <script>
        // Initialize Lucide icons
        lucide.createIcons();
    </script>
</body>
</html>