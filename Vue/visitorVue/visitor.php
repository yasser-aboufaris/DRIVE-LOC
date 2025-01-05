<?php
// Include required files
require_once "../../classes/conn.php";
require_once "../../classes/cars.php";

// Initialize car object
$car = new Cars($conn);

// Get public car listings (we'll create this method in the Cars class)
$cars = $car->read();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Drive & Loc - Browse Cars</title>
</head>
<body>
    <!-- Navigation remains the same -->
    <nav class="bg-gray-900 text-white">
    <!-- First Navbar -->
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <a href="#" class="text-2xl font-bold text-blue-400 hover:text-blue-500 transition duration-200 ease-in-out">Drive & Loc</a>
        <ul class="flex space-x-6">
            <li><a href="#" class="hover:text-blue-400 transition duration-200">Cars</a></li>
            <li><a href="#" class="hover:text-blue-400 transition duration-200">About Us</a></li>
            <li><a href="#" class="hover:text-blue-400 transition duration-200">Contact</a></li>
        </ul>
        <div class="flex space-x-4">
            <a href="register.php" class="text-white bg-gray-800 border-2 border-blue-400 hover:bg-blue-400 hover:text-gray-900 hover:border-blue-500 px-6 py-2 rounded-md shadow-md transition duration-200 ease-in-out">Register</a>
            <a href="login.php" class="bg-gradient-to-r from-blue-500 to-blue-600 text-white hover:from-blue-600 hover:to-blue-700 px-6 py-2 rounded-md shadow-lg transform hover:scale-105 transition-all duration-300 ease-in-out">Login</a>
        </div>
    </div>

    <!-- Second Navbar with Search Bar and Category Dropdown -->
    <div class="bg-gray-800 text-white py-4 px-6">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex space-x-6">
                <div class="relative">
                    <button class="text-white hover:text-blue-400">Categories</button>
                    <div class="absolute hidden bg-gray-900 text-white w-48 mt-2 shadow-lg rounded-md">
                        <a href="#" class="block px-4 py-2 hover:bg-blue-400">SUVs</a>
                        <a href="#" class="block px-4 py-2 hover:bg-blue-400">Sedans</a>
                        <a href="#" class="block px-4 py-2 hover:bg-blue-400">Trucks</a>
                        <a href="#" class="block px-4 py-2 hover:bg-blue-400">Luxury Cars</a>
                    </div>
                </div>
            </div>

            <div class="w-1/2">
                <input type="text" placeholder="Search for cars..." class="w-full py-2 px-4 rounded-md bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
        </div>
    </div>
</nav>

<script>
    // Show dropdown on hover
    const categoryButton = document.querySelector("button");
    const categoryMenu = document.querySelector("div.relative div");

    categoryButton.addEventListener("mouseover", () => {
        categoryMenu.classList.remove("hidden");
    });

    categoryButton.addEventListener("mouseout", () => {
        categoryMenu.classList.add("hidden");
    });
</script>



    

    <!-- Car Display Section -->
    <div class="container mx-auto px-6 py-8">
        <div class="flex flex-wrap gap-3">
            <?php foreach ($cars as $car): ?>
                <div class="max-w-sm bg-white rounded-xl shadow-2xl overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-2xl m-4">
                    <div class="relative">
                        <img 
                            class="w-full h-56 object-cover" 
                            src="<?php echo htmlspecialchars($car['image_url'] ?? 'default-car.jpg'); ?>" 
                            alt="<?php echo htmlspecialchars($car['model']); ?>"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    </div>

                    <div class="p-6 space-y-4">
                        <h3 class="text-2xl font-bold bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 bg-clip-text text-transparent">
                            <?php echo htmlspecialchars($car['model']); ?>
                        </h3>

                        <p class="text-black text-sm leading-relaxed">
                            <?php echo htmlspecialchars($car['description']); ?>
                        </p>

                        <!-- Login prompt for non-registered users -->
                        <a href="login.php" class="block">
                            <button class="w-full bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 hover:from-indigo-600 hover:via-purple-600 hover:to-pink-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-300">
                                Login to Book
                            </button>
                        </a>
                    </div>

                    <div class="h-1 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500"></div>
                </div>
            <?php endforeach;  ?>
        </div>
    </div>

    <!-- Footer section remains the same -->
</body>
</html>