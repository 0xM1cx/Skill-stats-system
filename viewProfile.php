<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Profile</title>
</head>

<body>

    <div class="main-profile-container flex align-start justify-center min-h-dvh p-6" id="main-profile">
        <div class="flex align-start justify-center" id="profile">
            <div class="bg-white w-4/5 h-4/5 rounded-lg p-12 mt-5">
                <div id="profile-image ">
                    <img class="rounded-full w-40 mx-auto" src="./assets/images/person.png" alt="">
                    <p class="text-center">Name</p>
                    <p class="text-center">Student</p>
                </div>
                <div class="mt-8" id="short-description">
                    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates temporibus, eius aliquid itaque esse aperiam.</p>
                </div>
            </div>
        </div>

        <div class=" p-5 flex flex-col align-start gap-8" id="profile-information">
            <div class="bg-white w-min-full h-min-3/5 p-3 rounded-lg" id="skills-knowledge">
                <div class="flex justify-between" id="skill-header">
                    <h3 class="block text-xl font-bold mt-1">Skills and Knowledge</h3>
                    <a class="px-5 py-2 rounded-md bg-black text-white font-bold text-md" href="" role="button"> ADD</a>
                </div>
                <div>
                    <table class="table table-fixed w-full">
                        <thead>
                            <th class="text-start text-slate-400" scope="col">Skill</th>
                            <th class="text-start text-slate-400" scope="col">Level</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="pt-2">Python</td>
                                <td class="pt-2"><i class="bi bi-record-circle"></i> Expert</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="bg-white w-min-full h-min-3/5 p-3 rounded-lg" id="feeback">
                <div class="flex justify-between" id="feedback-header">
                    <h3 class="block text-xl font-bold mt-1">Feedback</h3>
                    <a class="px-5 py-2 rounded-md bg-black text-white font-bold" href="" role="button"> GIVE FEEDBACK</a>
                </div>
                <div class="flex flex-col align-start gap-5 mt-3" id="feedback-content">
                    <div class="bg-neutral-200 rounded-lg w-3/4 px-3 py-2">
                        <p><i class="bi bi-record-circle "></i> Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>

        </div>


    </div>

    <script>

    </script>

</body>

</html>