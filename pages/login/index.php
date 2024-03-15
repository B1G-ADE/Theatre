<?php 
    include '../../components/header.php';
    include '../../components/navigation.php';
?>
  <section class="hero absolute justify-center inset-0 flex flex-col h-screen w-screen">
    <div class="flex items-center min-h-screen bg-black justify-center" style =  "background-image: url(<?php ROOT_DIR ?>assets/images/theatreCurtains.png); background-size: contain; background-repeat: no-repeat; background-position: right bottom;">
        <div class = "md:w-12/12 w-2/3 h-2/3 flex items-center justify-center"style = "background-color: #1a1a1a;">
            <div class="max-w-md mx-auto my-auto items-center">
                <div class="text-center">
                    <h1 class="my-3 text-3xl font-semibold text-gray-700 dark:text-gray-200">Log in</h1>
                </div>
                <div class="m-7">
                    <form class = "m-10 space-y-28"action="<?=ROOT_DIR ?>authenticate"method="post">
                        <div class="mb-6">
                            <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Username</label>
                            <input type="text" name="username" id="username" placeholder="Username" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                        </div>
                        <div class="mb-6">
                            <div class="flex justify-between mb-2">
                                <label for="password" class="text-sm text-gray-600 dark:text-gray-400">Password</label>
                                <a href="#!" class="text-sm text-gray-400 focus:outline-none focus:text-indigo-500 hover:text-indigo-500 dark:hover:text-indigo-300"></a>
                            </div>
                            <input type="password" name="password" id="password" placeholder="Your Password" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                        </div>
                        <div class="mb-6">
                            <button type="submit" class="w-full px-3 py-4 text-white bg-red-500 rounded-md focus:bg-indigo-600 focus:outline-none" value="LOGIN">Sign In</button>
                        </div>
                        <p class="text-sm text-center text-gray-400">Don&#x27;t have an account? <a href="<?= ROOT_DIR ?>register" class="text-red-500 focus:outline-none focus:underline focus:text-indigo-500 dark:focus:border-red-500">Register Here</a>.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </section>
<!--<?php 
    include '../../components/footer.php';
?>-->