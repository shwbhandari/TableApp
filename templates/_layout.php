<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="//unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Table App</title>

    <style>
        .text-auth0 {
            color: #635dff;
        }

        .bg-auth0 {
            background-color: #635dff;
        }

        textarea {
            min-height: 15em;
        }
    </style>
</head>

<body class="home">
    <div class="relative bg-gray-900 overflow-hidden">
        <div class="hidden sm:block sm:absolute sm:inset-0" aria-hidden="true">
            <svg class="absolute bottom-0 right-0 transform translate-x-1/2 mb-48 text-gray-700 lg:top-0 lg:mt-28 lg:mb-0 xl:transform-none xl:translate-x-0" width="364" height="384" viewBox="0 0 364 384" fill="none">
                <defs>
                    <pattern id="eab71dd9-9d7a-47bd-8044-256344ee00d0" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="364" height="384" fill="url(#eab71dd9-9d7a-47bd-8044-256344ee00d0)" />
            </svg>
        </div>
        <div class="relative pt-6 pb-16 sm:pb-24">
            <div>
                <nav class="relative max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6" aria-label="Global">
                    <div class="flex items-center flex-1">
                        <div class="flex items-center justify-between w-full md:w-auto">
                            <a href="#">
                                <span class="sr-only">TableCreaterApp</span>
                               
                            </a>
                        </div>
                        <div class="hidden space-x-10 md:flex md:ml-10">
                            <a href="#" class="font-medium text-white hover:text-gray-300">Dashboard</a>
                        </div>
                    </div>
                    <div class="hidden md:flex">
                        <?php if(! isset($session)): ?>
                            <a href="<?php echo $router->getUri('/login', '') ?>" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700">Log in</a>
                        <?php else: ?>
                            <a href="<?php echo $router->getUri('/logout', '') ?>" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700">Log out</a>
                        <?php endif ?>
                    </div>
                </nav>
            </div>

            <main class="mt-16 sm:mt-24">
                <div class="px-4 sm:px-6 sm:text-center md:max-w-7xl md:mx-auto lg:col-span-6 lg:text-left lg:flex lg:items-center">
                    <div>
                        <?php echo $this->section('hero')?>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <main class="mt-4 md:mt-16">
        <div class="px-4 sm:px-6 sm:text-center md:max-w-7xl md:mx-auto lg:col-span-6 lg:text-left lg:flex lg:items-center">
            <?php echo $this->section('body')?>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
