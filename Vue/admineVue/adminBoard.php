<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 text-white h-screen p-5">
            <h2 class="text-2xl font-bold mb-5">Admin Dashboard</h2>
            <ul>
                <li class="mb-4"><a href="#" class="hover:text-gray-400">Dashboard</a></li>
                <li class="mb-4"><a href="#" class="hover:text-gray-400">Users</a></li>
                <li class="mb-4"><a href="#" class="hover:text-gray-400">Settings</a></li>
                <li class="mb-4"><a href="#" class="hover:text-gray-400">Logout</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-10">
            <div class="grid grid-cols-3 gap-5 mb-10">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-4">Total Users</h3>
                    <p class="text-3xl">350</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-4">Active Users</h3>
                    <p class="text-3xl">215</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-4">Pending Requests</h3>
                    <p class="text-3xl">45</p>
                </div>
            </div>

            <!-- Chart or Additional Info Section -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-4">Recent Activity</h3>
                <p>Here you can add charts, graphs, or more data.</p>
            </div>
        </div>
    </div>

</body>
</html>
<script>
    let i = <?php
    $i;
    ?>
</script>