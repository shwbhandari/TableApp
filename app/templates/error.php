<?php $this->layout('_layout'); ?>

<?php $this->start('hero') ?>
    <a href="#" class="inline-flex items-center text-white bg-gray-800 rounded-full p-1 pr-2 sm:text-base lg:text-sm xl:text-base hover:text-gray-200">
        <span class="px-3 py-0.5 text-white text-xs font-semibold leading-5 uppercase tracking-wide bg-red-500 rounded-full">Error</span>
        <span class="ml-4 text-sm">PHP Quickstart</span>
        <svg class="ml-2 w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
        </svg>
    </a>

    <h1 class="mt-4 text-4xl tracking-tight font-extrabold text-white sm:mt-5 sm:leading-none lg:mt-6 lg:text-5xl xl:text-6xl">
        <span class="text-red-500 md:block">Oops!</span>
        <span class="md:block"><?php echo $error ?></span>
    </h1>

    <p class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">Raised on line <?php echo $line ?> of <?php echo $file ?>.</p>
<?php $this->stop() ?>

<?php $this->start('body') ?>
    <div class="mb-16 w-full lg:grid lg:grid-cols-12 lg:gap-x-5">
        <aside class="py-6 px-2 sm:px-6 lg:py-0 lg:px-0 lg:col-span-3">
            <nav class="space-y-1">
                <a href="#cookies" class="bg-gray-50 text-indigo-700 hover:text-indigo-700 hover:bg-white group rounded-md px-3 py-2 flex items-center text-sm font-medium" aria-current="page">
                    <svg class="text-indigo-500 group-hover:text-indigo-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                    </svg>
                    <span class="truncate">
                        Cookies
                    </span>
                </a>
            </nav>
        </aside>

        <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
            <?php if (in_array($_SERVER['SERVER_NAME'], ['localhost', '127.0.0.1', '0.0.0.0'])): ?>
                <div class="mb-8 w-full">
                    <div class="rounded-md bg-yellow-50 p-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-yellow-800">Local Development Tip</h3>
                                <div class="mt-1 text-sm text-yellow-700">
                                    <p>You appear to be running this quickstart on your local machine. Please ensure you are being consistent in your use of localhost and/or 127.0.0.1, as this is the most common pitfall for new developers hitting errors. Make sure the Quickstart and Auth0 are configured to use the same address to avoid authentication errors, and that you're using the same address in your browser to ensure cookies can be set properly.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <div id="cookies">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="bg-white">
                        <div class="px-4 py-5 sm:px-6 bg-gray-100">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Cookies</h3>

                            <?php if (count($cookies)): ?>
                                <p class="mt-1 text-sm text-gray-500">The contents of PHP's $_COOKIE global.</p>
                            <?php endif; ?>
                        </div>

                        <div class="px-4 py-5 sm:px-6 grid grid-cols-6 gap-6">
                            <?php if (count($cookies)): ?>
                                <?php foreach($cookies as $key => $data): ?>
                                    <?php $row = uniqid(); ?>

                                    <?php if(is_string($data)): ?>
                                        <div class="col-span-6">
                                            <label for="<?php echo $row ?>" class="block text-sm font-medium text-gray-700"><?php echo $key ?></label>
                                            <input value="<?php echo htmlspecialchars($data) ?>" type="text" readonly="true" name="<?php echo $row ?>" id="<?php echo $row ?>" class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        </div>
                                    <?php endif ?>

                                    <?php if(is_array($data)): ?>
                                        <div class="col-span-6">
                                            <label for="<?php echo $row ?>" class="block text-sm font-medium text-gray-700"><?php echo $key ?></label>
                                            <textarea name="<?php echo $row ?>" id="<?php echo $row ?>" class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"><?php echo htmlspecialchars(print_r($data, true)) ?></textarea>
                                        </div>
                                    <?php endif ?>
                                <?php endforeach ?>
                            <?php else: ?>
                                <p class="text-sm text-gray-500">Nothing to show.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $this->stop() ?>
