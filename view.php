<?php
include("viewConf.php");
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
    <title>View Table</title>
</head>
<body>
    <div class="h-screen py-4 bg-slate-50">
        <div class="container mx-auto p-4 flex flex-col justify-center items-center text-center ">
            <div id="table" class=" bg-white p-4 m-4 rounded-2xl shadow-xl">
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 ">
                        <thead class="text-sm text-gray-700 uppercase bg-warning text-center ">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    No
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Name 
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Age
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Submited Date
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if( is_array($fetchData) ){ $count= 1; foreach($fetchData as $data){?>
                            <tr class="bg-white border-b ">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap items-center justify-center text-center">
                                    <?php echo $count ?>
                                </th>
                                <td class="px-6 py-4">
                                    <?php echo $data['name'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $data['email'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $data['age'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $data['date'] ?>
                                </td>
                            </tr>
                            <?php
                            $count++;}} ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="py-2 px-6 rounded-xl shadow-xl font-inter font-normal text-lg mt-3 cursor-pointer bg-warning text-kuro transition-all ease-in-out duration-100 hover:-translate-y-1" onclick="window.location.href='input.php'">
                <p>back</p>
            </div>
        </div>
    </div>
</body>
</html>