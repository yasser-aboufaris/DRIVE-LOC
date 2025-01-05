<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
        <!-- Top Navigation Bar -->
<nav class="bg-gray-900 text-white">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <!-- Logo -->
        <a href="#" class="text-2xl font-bold text-blue-400">Drive & Loc</a>

        <!-- Main Navigation Links -->
        <ul class="flex space-x-6">
            <li><a href="#" class="hover:text-blue-400 transition">Home</a></li>
            <li><a href="#" class="hover:text-blue-400 transition">Vehicles</a></li>
            <li><a href="#categories" class="hover:text-blue-400 transition">Categories</a></li>
            <li><a href="#" class="hover:text-blue-400 transition">About</a></li>
            <li><a href="#" class="hover:text-blue-400 transition">Reserve</a></li>
        </ul>

        <!-- Login Button -->
        <a href="#" class="bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded shadow-lg transition">Login</a>
    </div>
</nav>
<!-- <-- /////////////////////////////////////////////////////////////////////// --> 
<div class="flex flex-wrap gap-3">
<?php include "../../classes/conn.php"; 
include "../../classes/cars.php" ;
foreach ($car->read() as $result) { ?>
    <div class="max-w-sm bg-white rounded-xl shadow-2xl overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-2xl m-4">
        <!-- Image Container with Gradient Overlay -->
        <div class="relative">
            <img class="w-full h-56 object-cover" src="car-image-url.jpg" alt="Car Image">
            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
            <!-- Category Badge -->
            
        </div>
    
        <!-- Content Container -->
        <div class="p-6 space-y-4">
            <!-- Title with Gradient Text -->
            <h3 class="text-2xl font-bold bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 bg-clip-text text-transparent">
                <?php echo $result['model']; ?>
            </h3>
    
            <!-- Description -->
            <p class="text-black text-sm leading-relaxed">
                <?php echo $result['description']; ?>
            </p>
    
            <!-- Action Buttons -->
            <div class="flex gap-3 pt-4">
                <button class="flex-1 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 hover:from-indigo-600 hover:via-purple-600 hover:to-pink-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-300 transform hover:-translate-y-0.5 hover:shadow-lg">
                    Edit
                </button>
                <button class="flex-1 bg-gradient-to-r from-red-500 to-pink-500 hover:from-red-600 hover:to-pink-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-300 transform hover:-translate-y-0.5 hover:shadow-lg">
                    Delete
                </button>
            </div>
        </div>
    
        <!-- Bottom Accent -->
        <div class="h-1 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500"></div>
    </div>
    <?php } ?></div>
    

    <footer class="bg-gray-900 text-gray-400 py-6 mt-4">
        <div class="container mx-auto text-center space-y-4">
            <p>© 2024 Drive & Loc. All Rights Reserved.</p>
            <ul class="flex justify-center space-x-6">
                <li><a href="#" class="hover:text-white">Privacy Policy</a></li>
                <li><a href="#" class="hover:text-white">Terms of Service</a></li>
                <li><a href="#" class="hover:text-white">Support</a></li>
            </ul>
            <div class="flex justify-center space-x-4">
                <a href="#" class="hover:text-white">Facebook</a>
                <a href="#" class="hover:text-white">Twitter</a>
                <a href="#" class="hover:text-white">Instagram</a>
            </div>
        </div>
    </footer>
</body>

</html>