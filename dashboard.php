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
    <link rel="icon" type="image/png" href="./assets/images/favicon.ico">


    <style>
        #alert-3 {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1050;
            width: auto;
        }

        .tooltip {
            position: relative;
            display: inline-block;
            border-bottom: 1px dotted black;
            z-index: 9999;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 120px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;

            /* Position the tooltip */
            position: absolute;
            z-index: 9999;
            top: 100%;
            left: 50%;
            margin-left: -60px;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
        }

        .indiv,
        .vpButton {
            background: linear-gradient(to right, #9181F4, #5038ED);
            background: -webkit-linear-gradient(to right, #9181F4, #5038ED);
            background-color: #5038ED;
            transition: background-color 500ms ease-in;
        }

        .vpButton:hover {
            background: #5038ED;
        }
    </style>
</head>

<body class="bg-slate-200">
    <!-- ========== Alert ========== -->
    <?php
    $msg = isset($_GET['msg']) ? $_GET['msg'] : "";

    if ($msg == "uploaded") { ?>
        <div id="alert-3" class="flex items-center p-4 mb-4 text-green-800  bg-slate-800 dark:bg-gray-800 dark:text-green-400" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <div class="ms-3 text-sm font-medium">
                <strong>Yey!</strong> Individual added successfully.
            </div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-slate-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    <?php } elseif ($msg == "deleted") { ?>

        <div id="alert-3" class="flex items-center p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <div class="ms-3 text-sm font-medium">
                <strong>Individual deleted</strong> successfully.
            </div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>

    <?php } elseif ($msg == "updated") { ?>

        <div id="alert-3" class="flex items-center p-4 mb-4 text-green-800  bg-slate-800 dark:bg-gray-800 dark:text-green-400" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <div class="ms-3 text-sm font-medium">
                <strong>Individual Updated</strong> successfully.
            </div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-slate-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>


    <?php } ?>



    <!-- ========== Navbar ========== -->
    <nav class="p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-10 py-2 bg-slate-100 rounded-xl">
            <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block font-medium rounded-lg text-sm px-5 py-2.5" type="button">
                <i class="bi bi-plus-circle"></i> Add Individual
            </button>

            <form action="./controllers/logout.php" method="post">
                <span class="tooltiptext">Logout</span>
                <button type="submit" class="tooltip text-slate-500 text-xl hover:text-slate-900 focus:outline-none">
                    <i class="bi bi-arrow-right-circle"></i>
                </button>
            </form>

        </div>
    </nav>


    <!-- ========== Edit Modal ========== -->
    <div id="editModal" tabindex="-1" aria-hidden="true" class="bg-opacity-70 bg-gray-900 hidden fixed inset-0 overflow-y-auto flex items-center justify-center z-50">
        <div class="relative bg-white rounded-lg shadow w-full max-w-md">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900">
                    Edit Individual <i class="bi bi-pencil"></i>
                </h3>
                <button type="button" onclick="closeModal()" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <div class="p-4 md:p-5">
                <form id="editForm" class="space-y-4" action="./models/updateIndiv.php" method="post">
                    <input type="hidden" name="indiv_id" id="editIndivId" value="">
                    <div>
                        <label for="editName" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                        <input type="text" name="name" id="editName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-gray-400" placeholder="Name">
                    </div>
                    <div>
                        <label for="editTitle" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                        <input type="text" name="title" id="editTitle" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-gray-400" placeholder="Title">
                    </div>
                    <div>
                        <label for="git_link" class="block mb-2 text-sm font-medium text-gray-900">Github Link</label>
                        <input type="text" name="git_link" id="editgit_link" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-gray-400" placeholder="Github Link">
                    </div>
                    <div>
                        <label for="fb_link" class="block mb-2 text-sm font-medium text-gray-900">Facebook Link</label>
                        <input type="text" name="fb_link" id="editfb_link" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-gray-400" placeholder="Facebook Link">
                    </div>
                    <div>
                        <label for="editBio" class="block mb-2 text-sm font-medium text-gray-900">Bio</label>
                        <textarea name="bio" id="editBio" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-gray-400" rows="5" placeholder="Bio"></textarea>
                    </div>
                    <div class="flex justify-end mt-4">
                        <button type="button" onclick="closeModal()" class="px-5 py-2 mr-2 bg-gray-500 text-white rounded-md hover:bg-gray-700">Cancel</button>
                        <button type="submit" class="px-5 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- ========== ADD INDIVIDUAL MODEL ========== -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow ">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900 ">
                        Add a Individual <i class="bi bi-person-arms-up"></i>
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
                    <form class="space-y-4" action="./models/addIndiv.php" method="post" enctype="multipart/form-data">
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
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Give a name" required />
                        </div>
                        <div>
                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                            <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Give a title" required />
                        </div>
                        <div>
                            <label for="git_link" class="block mb-2 text-sm font-medium text-gray-900">Github Link</label>
                            <input type="text" name="git_link" id="git_link" class="bg-white-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Give Github link" />
                        </div>
                        <div>
                            <label for="fb_link" class="block mb-2 text-sm font-medium text-gray-900">Facebook Link</label>
                            <input type="text" name="fb_link" id="fb_link" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Give Facebook link" />
                        </div>
                        <div>
                            <label for="desc" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                            <textarea type="textarea" name="desc" id="desc" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" rows="5" cols="10" placeholder="Give a short description" required></textarea>
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
    ?>
    <div class="container mx-auto px-10 py-15">
        <div class="flex flex-wrap -mx-2" id="card-container">
            <?php while ($row = $res->fetch_assoc()) { ?>
                <div class="w-full sm:w-1/2 lg:w-1/4 p-5 relative">
                    <div class="card flex flex-col items-center max-w-full max-h-fit rounded-xl shadow-lg pb-6">
                        <div class="absolute top-0 left-0 mt-3 ml-3">
                            <button type="button" class="bg-blue-500 text-white rounded-full w-8 h-8 flex items-center justify-center hover:bg-blue-700 edit-button" onclick="openEditModal(<?php echo $row['indiv_id']; ?>, '<?php echo htmlspecialchars($row['name']); ?>', '<?php echo htmlspecialchars($row['title']); ?>', '<?php echo htmlspecialchars($row['bio']); ?>', '<?php echo htmlspecialchars($row['git_link']); ?>', '<?php echo htmlspecialchars($row['fb_link']); ?>')">
                                <i class="bi bi-pencil"></i>
                            </button>

                        </div>
                        <div class="absolute top-0 right-0 mt-3 mr-3">
                            <form method="POST" action="./models/deleteIndiv.php">
                                <input type="hidden" name="indiv_id" value="<?php echo $row['indiv_id']; ?>">
                                <button type="submit" class="bg-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center hover:bg-red-700">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </div>
                        <div class="indiv w-full rounded-t-xl py-3">
                            <div class="info flex flex-col items-center justify-center">
                                <img class="rounded-full w-20 h-20 shadow-lg" src="./assets/images/pfps/<?php echo isset($row['pfp_path']) && $row['pfp_path'] !== '' ? $row['pfp_path'] : 'person.png'; ?>" alt="">
                                <p class="font-bold text-white text-2xl mt-2"><?php echo $row['name']; ?></p>
                                <p class="text-white"><?php echo $row['title']; ?></p>
                            </div>
                            <div class="socials flex items-center justify-center gap-2 mt-3">
                                <?php if (!empty($row['git_link'])) { ?>
                                    <a href="<?php echo $row['git_link']; ?>">
                                        <i class="bi text-white bi-github text-xl"></i>
                                    </a>
                                <?php } else { ?>
                                    <i class="invisible bi bi-github text-xl"></i>
                                <?php } ?>
                                <?php if (!empty($row['fb_link'])) { ?>
                                    <a href="<?php echo $row['fb_link']; ?>">
                                        <i class="bi text-white bi-facebook text-xl"></i>
                                    </a>
                                <?php } else { ?>
                                    <i class="invisible bi bi-facebook text-xl"></i>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="descriptions w-full min-h-32 mt-5 px-5">
                            <p class="text-wrap">
                                <?php echo $row['bio']; ?>
                            </p>
                        </div>
                        <div class="navigation mt-3">
                            <a href="./views/viewProfile.php?id=<?= $row['indiv_id']; ?>" class="vpButton rounded text-white text-sm px-5 py-2">VIEW PROFILE</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>



    <script>
        document.getElementById('toggle-menu').addEventListener('click', function() {
            document.getElementById('responsive-links').classList.toggle('hidden');
        });


        function openEditModal(id, name, title, bio, gitlink, fblink) {
            var modal = document.getElementById('editModal');
            var editForm = modal.querySelector('#editForm');

            editForm.querySelector('#editIndivId').value = id;
            editForm.querySelector('#editName').value = name;
            editForm.querySelector('#editTitle').value = title;
            editForm.querySelector('#editBio').value = bio;
            editForm.querySelector('#editgit_link').value = gitlink;
            editForm.querySelector('#editfb_link').value = fblink;

            modal.classList.remove('hidden');
        }

        function closeModal() {
            var modal = document.getElementById('editModal');
            modal.classList.add('hidden');
        }


        const tooltipTrigger = document.getElementById('tooltipTrigger');
        const tooltipContent = document.getElementById('tooltipContent');

        tooltipTrigger.addEventListener('mouseenter', () => {
            tooltipContent.classList.add('active');
        });

        tooltipTrigger.addEventListener('mouseleave', () => {
            tooltipContent.classList.remove('active');
        });
    </script>

</body>

</html>