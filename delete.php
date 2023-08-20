<?php
include("delConf.php")
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
                    <p class="text-2xl font-inter font-semibold">Delete User By: </p>
                </div>
                <div class="container">
                    <form class="flex flex-col gap-2" action="delConf.php"  method="POST">
                    <div class="mb-3  flex flex-col gap-2">
                      <label class="text-lg font-inter font-medium">Username :</label>
                      <input class="border-2 border-[#9AA2B1] rounded-md w-64 py-1 px-3 placeholder:text-[#9AA2B1]" placeholder="Masukkan Nama.." type="text"  id="Username" name="username"  autocomplete="off" />
                    </div>
                    <div class="mb-3 flex flex-col gap-2">
                        <label class="text-lg font-inter font-medium">Email :</label>
                        <input class="border-2 border-[#9AA2B1] rounded-md w-64 py-1 px-3 placeholder:text-[#9AA2B1]" placeholder="Masukkan Email.." type="text"  id="Email" name="email"  autocomplete="off" />
                    </div>
                    <div class="my-3 flex flex-col gap-2">
                        <button class="py-2 px-6 bg-danger rounded-xl shadow-xl text-kuro font-inter text-sm font-semibold w-24 duration-75 ease-in-out hover:-translate-y-1" type="submit" name="delete">
                            DELETE
                        </button>
                        <p style="display: none; color: #FF2709;" id="cek">Please fill the form</p>
                        <p style="display: none; color: #FF2709;" id="cek2">Please choose one option</p>
                        <p style="display: none; color: #FF2709;" id="cek3">User does not exist</p>
                        <p style="display: none; color: #FF2709;" id="cek4">Email does not exist</p>
                    </div>
                    </form>
                </div>
            </div>
            <div class="">
                <a href="input.php">balik</a>
            </div>
        </div>
    </div>

    <script>
      var a = document.getElementById("cek");
      if (window.location.href.indexOf("gakada") > -1) {
        a.style.display = "block";
      }
      var b = document.getElementById("cek2");
      if (window.location.href.indexOf("fullbang") > -1) {
        b.style.display = "block";
      }
      var c = document.getElementById("cek3");
      if (window.location.href.indexOf("usernoexist") > -1) {
        c.style.display = "block";
      }
      var d = document.getElementById("cek4");
      if (window.location.href.indexOf("emailnoexist") > -1) {
        d.style.display = "block";
      }

    </script>
</body>
</html>