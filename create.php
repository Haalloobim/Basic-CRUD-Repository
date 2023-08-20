<?php
include("createConf.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Noto+Serif:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        danger: '#EA3D76', 
                        warning: '#F6E069',
                        success: '#33D685', 
                        primary: '#61ADDB',
                    },
                    fontFamily: {
                        inter: ['Inter'],
                        roboto: ['roboto'],
                        noto: ['Noto Serif']
                    }
                }
            }
        }
    </script>
    <title>Create Page</title>
</head>
<body>
    <div class="h-screen py-4 bg-slate-50">
        <div class="container m-auto p-4 flex flex-col h-full">
            <div class="m-auto p-6 rounded-lg shadow-lg bg-white flex flex-col gap-4">
                <div>
                    <p class="text-2xl font-inter font-semibold">Add New User:</p>
                </div>
                <div class="container">
                    <form class="flex flex-col gap-2" action="createConf.php"  method="POST">
                    <div class="mb-3  flex flex-col gap-2">
                      <label class="text-lg font-inter font-medium">Username :</label>
                      <input class="border-2 border-[#9AA2B1] rounded-md w-64 py-1 px-3 placeholder:text-[#9AA2B1]" placeholder="Masukkan Nama.." type="text"  id="Username" name="username" required autocomplete="off" />
                      <p style="display: none; color: #FF2709;" id="user">Username already taken!</p>
                    </div>
                    <div class="mb-3 flex flex-col gap-2">
                        <label class="text-lg font-inter font-medium">Email :</label>
                        <input class="border-2 border-[#9AA2B1] rounded-md w-64 py-1 px-3 placeholder:text-[#9AA2B1]" placeholder="Masukkan Email.." type="text"  id="Email" name="email" required autocomplete="off" />
                        <p style="display: none; color: #FF2709;" id="email">Email already taken!</p>
                    </div>
                    <div class="mb-3 flex flex-col gap-2">
                      <label class="text-lg font-inter font-medium">Age :</label>
                      <input class="border-2 border-[#9AA2B1] rounded-md w-64 py-1 px-3 placeholder:text-[#9AA2B1]" placeholder="Masukkan Umur.." type="number"  id="Age" name="umur" required autocomplete="off" />
                    </div>
                    <div class="my-3">
                        <button class="py-2 px-6 bg-success rounded-xl shadow-xl text-kuro font-inter text-sm font-semibold" type="submit" name="create">
                            SUBMIT
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
      var x = document.getElementById("user");
      if (window.location.href.indexOf("user_exist") > -1) {
        x.style.display = "block";
      }

      var z = document.getElementById("email");
      if (window.location.href.indexOf("email_exist") > -1) {
        z.style.display = "block"
      }

    </script>
</body>
</html>