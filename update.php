<?php
include("updateUserConf.php");
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
                        kuro: '#212121',
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
    <title>Update Data</title>
</head>
<body>
    <div class="h-screen py-4 bg-slate-50">
        <div class="container p-6 px-8 m-auto flex lg:flex-row flex-col gap-12 justify-center items-center h-full">
            <div class="my-auto p-6 rounded-lg shadow-lg bg-white flex flex-col gap-4">
                <div>
                    <p class="text-2xl font-inter font-semibold">Update Username: </p>
                </div>
                <div class="container">
                    <form class="flex flex-col gap-2" action="updateUSerConf.php"  method="POST">
                    <div class="mb-3  flex flex-col gap-2">
                      <label class="text-lg font-inter font-medium">Old Username :</label>
                      <input class="border-2 border-[#9AA2B1] rounded-md w-64 py-1 px-3 placeholder:text-[#9AA2B1]" placeholder="Username yang ingin diubah..." type="text"  id="Username" name="username"  autocomplete="off" />
                    </div>
                    <div class="mb-3  flex flex-col gap-2">
                      <label class="text-lg font-inter font-medium">New Username :</label>
                      <input class="border-2 border-[#9AA2B1] rounded-md w-64 py-1 px-3 placeholder:text-[#9AA2B1]" placeholder="username baru..." type="text"  id="Username" name="usernameNew"  autocomplete="off" />
                    </div>
                    <div class="my-3 flex flex-col gap-2">
                        <button class="py-2 px-6 bg-success rounded-xl shadow-xl justify-center text-kuro font-inter text-sm font-semibold w-24 duration-75 ease-in-out hover:-translate-y-1" type="submit" name="change">
                            UPDATE
                        </button>
                        <p style="display: none; color: #FF2709;" id="cek1">Please fill the form</p>
                        <p style="display: none; color: #FF2709;" id="cek3">User does not exist</p>
                    </div>
                    </form>
                </div>
            </div>
            <div class="my-auto p-6 rounded-lg shadow-lg bg-white flex flex-col gap-4">
                <div>
                    <p class="text-2xl font-inter font-semibold">Update Email: </p>
                </div>
                <div class="container">
                    <form class="flex flex-col gap-2" action="updateEmailConf.php"  method="POST">
                    <div class="mb-3 flex flex-col gap-2">
                        <label class="text-lg font-inter font-medium">Old Email :</label>
                        <input class="border-2 border-[#9AA2B1] rounded-md w-64 py-1 px-3 placeholder:text-[#9AA2B1]" placeholder="Email yang ingin diubah..." type="text"  id="Email" name="email"  autocomplete="off" />
                    </div>
                    <div class="mb-3 flex flex-col gap-2">
                        <label class="text-lg font-inter font-medium">New Email :</label>
                        <input class="border-2 border-[#9AA2B1] rounded-md w-64 py-1 px-3 placeholder:text-[#9AA2B1]" placeholder="Email baru..." type="text"  id="Email" name="emailNew"  autocomplete="off" />
                    </div>
                    <div class="my-3 flex flex-col gap-2">
                        <button class="py-2 px-6 bg-success rounded-xl justify-center shadow-xl text-kuro font-inter text-sm font-semibold w-24 duration-75 ease-in-out hover:-translate-y-1" type="submit" name="change">
                            UPDATE 
                        </button>
                        <p style="display: none; color: #FF2709;" id="cek2">Please fill the form</p>
                        <p style="display: none; color: #FF2709;" id="cek4">Email does not exist</p>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        let a = document.getElementById("cek1"); 
        let b = document.getElementById("cek2"); 
        let c = document.getElementById("cek3");
        let d = document.getElementById("cek4");
        if (window.location.href.indexOf("empty1") > -1) {
            a.style.display = "block";
        }
        if (window.location.href.indexOf("empty2") > -1) {
            b.style.display = "block";
        }
        if (window.location.href.indexOf("usernoexist") > -1) {
            c.style.display = "block";
        }
        if (window.location.href.indexOf("emailnoexist") > -1) {
            d.style.display = "block";
        }

    </script>
</body>
</html>