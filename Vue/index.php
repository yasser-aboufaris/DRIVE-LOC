<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <nav class="bg-gray-800 text-white">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <a href="#" class="text-xl font-bold">Drive & Loc</a>
            <ul class="flex space-x-6">
                <li><a href="#" class="hover:text-gray-300">Home</a></li>
                <li><a href="#" class="hover:text-gray-300">Vehicles</a></li>
                <li><a href="#" class="hover:text-gray-300">Categories</a></li>
                <li><a href="#" class="hover:text-gray-300">About</a></li>
                <li><a href="#" class="hover:text-gray-300">Contact</a></li>
            </ul>
            <a href="#" class="bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded">Login</a>
        </div>
    </nav>

    <?php
    ?>
    <div class="max-w-sm w-full lg:max-w-full lg:flex mb-6">
        <div class="flex flex-col lg:flex-row lg:max-w-4xl rounded-lg bg-white shadow-lg">
            <!-- Car Image Section -->
            <div class="h-56 lg:h-auto lg:w-48 flex-none bg-cover rounded-t-lg lg:rounded-l-lg text-center overflow-hidden"
                style="background-image: url('../imges/car.jpg');">
                <!-- Placeholder image, replace with actual car image -->
            </div>

            <!-- Car Details Section -->
            <div class="flex flex-col justify-between p-6">
                <!-- Car Info Header -->
                <div class="flex justify-between items-center">
                    <h2 class="text-xl font-semibold text-gray-900">Toyota Camry</h2>
                    <p class="text-gray-600 text-sm">Car ID: #12345</p>
                </div>

                <!-- Car Description -->
                <p class="mt-2 text-gray-600 text-base">
                    A comfortable and reliable sedan, perfect for both city driving and long trips.
                </p>

                <!-- Rental Information -->
                <div class="mt-4 flex justify-between items-center">
                    <p class="text-lg font-semibold text-green-600">$45.00 / day</p>

                    <!-- Rental Duration (Days) -->
                    <div class="flex items-center">
                        <input type="number" value="1" min="1"
                            class="w-12 text-center border-t border-b border-gray-300" />
                    </div>
                </div>

                <!-- Cart Action Section -->
                <div class="flex justify-between items-center mt-4">
                    <!-- Remove Button -->
                    <button class="text-red-500 text-sm hover:underline">Remove</button>

                    <!-- Add to Cart Button -->
                    <button class="px-4 py-2 bg-blue-600 text-white text-sm rounded-md hover:bg-blue-700">Add to
                        Cart</button>
                </div>
            </div>
        </div>
    </div>



    <footer class="bg-gray-900 text-gray-400 py-6">
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