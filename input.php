<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Action Selection</title>
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
</head>
<body>
  <div class="container min-h-screen min-w-full bg-slate-50 flex items-center justify-center p-8">
        <div class="min-h-fit flex flex-col gap-y-16">
            <div class=" text-center items-center">
                <h1 class="text-5xl font-bold">
                    Action Selection
                </h1>
                <p class="text-success italic text-sm font-normal pt-2 hidden" id="text">
                    Data has been changed ^^
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <a href="create.php">
                    <div class="container min-h-fit bg-white rounded-xl shadow-xl items-center justify-center text-center p-6 w-60 border-t-2 border-danger transition-all ease-in-out duration-100 hover:-translate-y-1">
                        <p class="text-lg font-semibold ">CREATE DATA</p>
                    </div>
                </a>
                <a href="view.php">
                    <div class="container min-h-fit bg-white rounded-xl shadow-xl items-center justify-center text-center p-6 w-60 border-t-2 border-warning transition-all ease-in-out duration-100 hover:-translate-y-1">
                        <p class="text-lg font-semibold ">VIEW DATA</p>
                    </div>
                </a>
                <a href="update.php">
                    <div class="container min-h-fit bg-white rounded-xl shadow-xl items-center justify-center text-center p-6 w-60 border-t-2 border-success transition-all ease-in-out duration-100 hover:-translate-y-1">
                        <p class="text-lg font-semibold ">UPDATE DATA</p>
                    </div>
                </a>
                <a href="delete.php">
                    <div class="container min-h-fit bg-white rounded-xl shadow-xl items-center justify-center text-center p-6 w-60 border-t-2 border-primary transition-all ease-in-out duration-100 hover:-translate-y-1">
                        <p class="text-lg font-semibold ">DELETE DATA</p>
                    </div>
                </a>
            </div>
        </div>
  </div>
  <script>
    let x = document.getElementById("text"); 
    if (window.location.href.indexOf("success") > -1) {
        x.style.display = "block";
      }
  </script>
</body>
</html>