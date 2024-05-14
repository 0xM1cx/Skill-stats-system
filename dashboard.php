<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Dashboard</title>
</head>
<body>
    <nav class="bg-gray-800 p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="#" class="text-white font-semibold text-lg">Your Logo</a>
            </div>
            <!-- Navigation Links -->
            <div class="hidden md:flex">
                {[
                ['Home', '/dashboard'],
                ['About', '/team'],
                ['services', '/projects'],
                ['Contact', '/reports'],
            ].map(([title, url]) => (
                <a href={url} className="text-gray-300 hover:text-white px-3 py-2">{title}</a>
            ))}
                <!-- <a href="#" class="text-gray-300 hover:text-white px-3 py-2">Home</a>
                <a href="#" class="text-gray-300 hover:text-white px-3 py-2">About</a>
                <a href="#" class="text-gray-300 hover:text-white px-3 py-2">Services</a>
                <a href="#" class="text-gray-300 hover:text-white px-3 py-2">Contact</a> -->
            </div>
            <!-- Hamburger Menu (for smaller screens) -->
            <div class="md:hidden">
                <button id="toggle-menu" class="text-white hover:text-gray-300 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                    </svg>
                </button>
            </div>
        </div>
        <!-- Responsive Navigation Links (for smaller screens) -->
        <div class="md:hidden" id="responsive-links">
            {[
                ['Home', '/dashboard'],
                ['About', '/team'],
                ['services', '/projects'],
                ['Contact', '/reports'],
            ].map(([title, url]) => (
                <a href={url} className="block text-gray-300 hover:text-white px-3 py-2">{title}</a>
            ))}
            <!-- <a href="#" class="block text-gray-300 hover:text-white px-3 py-2">Home</a>
            <a href="#" class="block text-gray-300 hover:text-white px-3 py-2">About</a>
            <a href="#" class="block text-gray-300 hover:text-white px-3 py-2">Services</a>
            <a href="#" class="block text-gray-300 hover:text-white px-3 py-2">Contact</a> -->
        </div>
    </nav>    
    
    <script>
        document.getElementById('toggle-menu').addEventListener('click', function() {
            document.getElementById('responsive-links').classList.toggle('hidden');
        });
    </script>
    
</body>
</html>