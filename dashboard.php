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
    <nav class="p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-10 py-2">
            <a href="#" class="text-slate-500 text-xl hover:text-slate-900 "><i class="bi bi-sun"></i></a>
            <a href="#" class="text-slate-500 text-xl hover:text-slate-900 "><i class="bi bi-plus-circle"></i></a>
            <a href="#" class="text-slate-500 text-xl hover:text-slate-900 "><i class="bi bi-list-nested"></i></a>
        </div>
    </nav>    
    

    <!-- Card Container: Can handle multiple cards -->
    <div class="flex flex-wrap items-start justify-start gap-10 px-24 py-10 " id="card-container">
        <!-- Card format:  -->
        <div class="card flex flex-col items-center max-w-80 max-h-fit rounded-xl shadow-lg pb-6">
            <div class="w-full bg-orange-200 rounded-t-xl py-3">
                <div class="info flex flex-col items-center justify-center">
                    <img class="rounded-full max-w-40 shadow-lg" src="./assets/images/person.png" alt="">
                    <p class="font-bold text-2xl mt-2">Full name</p>
                    <p class="">Student</p>
                </div>
                <div class="socials flex items-center justify-center gap-12 mt-5">
                    <i class="bi bi-github text-xl"></i>
                    <i class="bi bi-facebook text-xl"></i>
                    <i class="bi bi-gitlab text-xl"></i>
                    <i class="bi bi-twitter text-xl"></i>
                </div>
            </div>
            <div class="descriptions w-full min-h-32 mt-5 px-2">
                <p class="text-wrap">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, ab dolor molestias ea ut nihil architecto ipsam provident enim sed.
                </p>
            </div>
            <div class="navigation mt-3">
                <button class="bg-slate-800 rounded text-white text-sm px-5 py-2 hover:bg-slate-600">VIEW PROFILE</button>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('toggle-menu').addEventListener('click', function() {
            document.getElementById('responsive-links').classList.toggle('hidden');
        });
    </script>
    
</body>
</html>