<!DOCTYPE html>
<html lang="en">
<?php require "./models/database.php";

session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script defer src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <title>Dashboard</title>


    <style>
        .alert-overlay {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1050;
            width: auto;
        }
    </style>
</head>

<body>
    <?php
    $msg = isset($_GET['msg']) ? $_GET['msg'] : "";

    if ($msg == "uploaded") : ?>
        <div class="alert alert-sucess alert-dismissible fade show" role="alert">
            <strong>Yey!</strong> Individual added successfully!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif ?>
    <nav class="p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-10 py-2">
            <a href="#" class="text-slate-500 text-xl hover:text-slate-900 "><i class="bi bi-sun"></i></a>
            <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block font-medium rounded-lg text-sm px-5 py-2.5" type="button">
                <i class="bi bi-plus-circle"></i>
            </button>
            <a href="#" class="text-slate-500 text-xl hover:text-slate-900 "><i class="bi bi-list-nested"></i></a>
        </div>
    </nav>
    <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Add a individual <i class="bi bi-person-arms-up"></i>
                    </h3>
                    <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <form class="space-y-4" action="./models/addIndiv.php" method="post">
                        <div class="flex items-center justify-center w-full">
                            <label class="flex flex-col rounded-lg border-4 border-dashed w-full h-30 p-10 group text-center">
                                <div class="h-full w-full text-center flex flex-col items-center justify-center items-center  ">
                                    <div class="flex flex-auto max-h-38 w-2/5 mx-auto -mt-10">
                                        <img class="has-mask h-36 object-center" src="https://img.freepik.com/free-vector/image-upload-concept-landing-page_52683-27130.jpg?size=338&ext=jpg" alt="freepik image">
                                    </div>
                                    <p class="pointer-none text-gray-500 "><span class="text-sm">Drag and drop</span> files here <br /> or <a href="" id="" class="text-blue-600 hover:underline">select a file</a> from your computer</p>
                                </div>
                                <input name="pfp" id="pfp" type="file" class="hidden">
                            </label>
                        </div>
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Give a name" required />
                        </div>
                        <div>
                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                            <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Give a name" required />
                        </div>
                        <div>
                            <label for="desc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                            <textarea type="textarea" name="desc" id="desc" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" rows="5" cols="10" placeholder="Give a short description" required></textarea>
                        </div>
                        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><i class="bi bi-person-plus"></i> Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php

    $sql = "SELECT * FROM individuals WHERE user_id = ?";

    $sql_prep = $conn->prepare($sql);
    $sql_prep->bind_param("i", $_SESSION['uid']);
    $sql_prep->execute();
    $res = $sql_prep->get_result();
    $row = $res->fetch_assoc();
    while ($row > 0) {
    ?>
        <div class="flex flex-wrap items-start justify-start gap-10 px-24 py-10 " id="card-container">
            <div class="card flex flex-col items-center max-w-80 max-h-fit rounded-xl shadow-lg pb-6">
                <div class="w-full bg-orange-200 rounded-t-xl py-3">
                    <div class="info flex flex-col items-center justify-center">
                        <img class="rounded-full max-w-40 shadow-lg" src="./assets/images/person.png" alt="">
                        <p class="font-bold text-2xl mt-2"><?php echo $row['name']; ?></p>
                        <p class=""><?php echo $row['title']; ?></p>
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
                        <?php echo $row['bio']; ?>
                    </p>
                </div>
                <div class="navigation mt-3">
                    <button class="bg-slate-800 rounded text-white text-sm px-5 py-2 hover:bg-slate-600">VIEW PROFILE</button>
                </div>
            </div>
        </div>
    <?php } ?>
    <script>
        document.getElementById('toggle-menu').addEventListener('click', function() {
            document.getElementById('responsive-links').classList.toggle('hidden');
        });
    </script>

</body>

</html>