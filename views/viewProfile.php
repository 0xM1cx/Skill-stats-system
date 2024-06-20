<?php

session_start();
require '../models/database.php';

if (isset($_GET['id'])) {
    $_SESSION['indiv_id'] = $_GET['id'];
    $indiv_id = $_SESSION['indiv_id'];
} else {
    $indiv_id = $_SESSION['indiv_id'];
}

$sql = "SELECT * FROM individuals WHERE indiv_id = ?";
$sql_prep = $conn->prepare($sql);
$sql_prep->bind_param("i", $indiv_id);
$sql_prep->execute();
$res = $sql_prep->get_result();
$row = $res->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
    <style>
        #alert-border {
            position: fixed;
            top: 10px;
            right: 10px;
            z-index: 9999;
        }

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
    <title>Profile</title>
</head>

<body class="bg-slate-200">

    <?php
    $msg = isset($_GET['msg']) ? $_GET['msg'] : "";

    if ($msg == "749182317419283708123") { ?>
        <!-- <div class="alert alert-sucess alert-dismissible fade show" role="alert">
            <strong>Yey!</strong> Skill added successfully!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div> -->
        <div id="alert-border" class="flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:text-green-400 dark:bg-gray-800 dark:border-green-800" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <div class="ms-3 text-sm font-medium">
                Skill added <strong>successfully!!</strong>
            </div>
            <button type="button" onclick="closeAlert('alert-border')" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8  dark:text-green-400 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700">
                <span class="sr-only">Dismiss</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    <?php } elseif ($msg == "78572361238491639879123649") { ?>
        <div id="alert-border" class="flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:text-green-400 dark:bg-gray-800 dark:border-green-800" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <div class="ms-3 text-sm font-medium">
                Feedback added <strong>successfully!!</strong>
            </div>
            <button type="button" onclick="closeAlert('alert-border')" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8  dark:text-green-400 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700">
                <span class="sr-only">Dismiss</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>

    <?php } ?>

    <!-- ========== START OF ADD SKILL MODAL ========== -->
    <div id="skill-modal" tabindex="-1" aria-hidden="true" class="fixed inset-0 flex hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-white-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Add a skill <i class="bi bi-hammer"></i>
                    </h3>
                    <button onclick="closeModal('skill-modal')" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                        <span class="sr-only">Close</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <form class="space-y-4" action="../models/addSkill.php" method="post">
                        <div>
                            <label for="skill" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-900">Skill</label>
                            <input type="text" name="skill" id="skill" class=" border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Give a name" required />
                            <input type="hidden" name="indiv_id" value="<?= $row['indiv_id']; ?>">
                        </div>
                        <div>
                            <label for="level" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-900">Select a level</label>
                            <select id="level" name="level" class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                <option selected>Choose a level</option>
                                <option value="Beginner">Beginner</option>
                                <option value="Intermediate">Intermediate</option>
                                <option value="Expert">Expert</option>
                                <option value="Master">Master</option>
                            </select>
                        </div>
                        <button type="submit" class="vpButton w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><i class="bi bi-person-plus"></i> Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== END OF ADD SKILL MODAL ========== -->



    <!-- ========== START OF FEEDBACK MODAL ========== -->
    <div id="feedback-modal" tabindex="-1" aria-hidden="true" class="fixed inset-0 flex hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-white-700">
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Add some feedback <i class="bi bi-chat-left-dots"></i>
                    </h3>
                    <button onclick="closeModal('feedback-modal')" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                        <span class="sr-only">Close</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
                <div class="p-4 md:p-5">
                    <form class="space-y-4" action="../models/addFeedback.php" method="post">
                        <div>
                            <label for="feedback" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-900">Give your feeedback</label>
                            <textarea cols="30" rows="10" type="text" id="feedback" name="feedback" class="block w-full p-4 text-gray-900 border rounded-lg bg-gray-50 text-base"></textarea>
                            <input type="hidden" name="indiv_id" value="<?= $row['indiv_id']; ?>">
                        </div>
                        <button type="submit" class="vpButtonw-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><i class="bi bi-person-plus"></i> Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="fixed top-0 left-0 ml-10 mt-5 mb-5 mr-5">
        <button onclick="redirectToDashboard()" type="button" class="vpButton text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Go Back</button>
    </div>

    <!-- ========== START OF VIEW PROFILE ========== -->
    <div class="main-profile-container mt-5 flex  justify-center p-10" id="main-profile">
        <!-- PROFILE -->
        <div class="flex-shrink-0 w-1/4 " id="profile">
            <div class="bg-slate-100 w-full h-auto rounded-lg p-12 mt-5">
                <div id="profile-image ">
                    <img class="rounded-full w-40 mx-auto" src="../assets/images/pfps/<?php echo isset($row['pfp_path']) && $row['pfp_path'] !== '' ? $row['pfp_path'] : 'person.png'; ?>" alt="person picture here">
                    <br>
                    <strong>
                        <h2 class="text-center"><?= $row['name']; ?></h2>
                    </strong>
                    <p class="mt-2 text-center"><?= $row['title']; ?></p>
                </div>
                <div class="mt-8" id="short-description">
                    <p class="text-justify"><?= $row['bio']; ?></p>
                </div>
            </div>
        </div>
        <!-- SKILL -->
        <div class=" p-5 flex flex-col align-start gap-8" id="profile-information">
            <div class="w-min-full h-min-3/5 p-3 rounded-lg bg-slate-100" id="skills-knowledge">
                <div class="flex justify-between" id="skill-header">
                    <h3 class="block text-xl font-bold mt-1">Skills and Knowledge</h3>
                    <button type="button" class="vpButton px-5 py-2 rounded-md bg-black text-white font-bold text-md" onclick="openModal('skill-modal')">ADD SKILL</button>
                </div>
                <div>
                    <table class="table table-fixed w-full">
                        <thead>
                            <th class="text-start text-slate-400" scope="col">Skill</th>
                            <th class="text-start text-slate-400" scope="col">Level</th>
                            <th class="text-start text-slate-400" scope="col">Action</th>
                        </thead>
                        <tbody>
                            <?php
                            $qSkill = "SELECT * FROM skills where indiv_id = ?";
                            $qSkill_Prep = $conn->prepare($qSkill);
                            $qSkill_Prep->bind_param("i", $indiv_id);
                            $qSkill_Prep->execute();
                            $res = $qSkill_Prep->get_result();
                            while ($skillRow = $res->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td class="pt-2"><?php echo htmlspecialchars($skillRow['skill']); ?></td>
                                    <td class="pt-2"><i class="bi bi-record-circle"></i> <?= htmlspecialchars($skillRow['level']); ?></td>
                                    <td class="pt-2">
                                        <form method="POST" action="../models/deleteSkill.php">
                                            <input type="hidden" name="skill_id" value="<?= $skillRow['skill_id']; ?>">
                                            <button type="submit" class="vpButton bg-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center hover:bg-red-700">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="w-min-full h-min-3/5 p-3 rounded-lg bg-slate-100" id="feeback">
                <div class="flex justify-between" id="feedback-header">
                    <h3 class="block text-xl font-bold mt-1">Feedback</h3>
                    <button type="button" class="vpButton px-5 py-2 rounded-md bg-black text-white font-bold" onclick="openModal('feedback-modal')"> GIVE FEEDBACK</button>
                </div>
                <div class="flex flex-col align-start gap-5 mt-3" id="feedback-content">
                    <?php
                    $fSql = "SELECT * FROM feedback where indiv_id = ?";
                    $fPrep = $conn->prepare($fSql);
                    $fPrep->bind_param("i", $indiv_id);
                    $fPrep->execute();
                    $fRes = $fPrep->get_result();
                    while ($fRow = $fRes->fetch_assoc()) {
                    ?>
                        <div class="bg-neutral-200 rounded-lg w-3/4 px-3 py-2 flex items-center justify-between">
                            <div>
                                <p><i class="bi bi-record-circle"></i> <?= $fRow['feedback']; ?></p>
                            </div>
                            <form method="POST" action="../models/deleteFeedback.php">
                                <input type="hidden" name="feedback_id" value="<?= $fRow['feedback_id']; ?>">
                                <button type="submit" class="vpButton bg-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center hover:bg-red-700">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openModal(modalId) {
            document.getElementById(modalId).classList.remove('hidden');
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.add('hidden');
        }

        function closeAlert(alertId) {
            document.getElementById(alertId).style.display = 'none';

        }

        function redirectToDashboard() {
            window.location.href = '../dashboard.php';
        }
    </script>

</body>

</html>