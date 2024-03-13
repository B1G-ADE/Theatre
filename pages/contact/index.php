<?php 
	session_start();
    include '../../components/header.php';
    include '../../components/navigation.php';
?>
<section class="absolute inset-0 h-screen w-screen grid grid-cols-2 gap-4 place-content-center" style="background-color:#1a1a1a">
            <div class="items-center">
                    <div class="col-span-1 text-white justify-end items-center flex">
                        <h1 class="text-7xl font-bold mb-6 my-auto text-end font-montserrat">Contact Us <br><span class="text-red-500">Here.</span></h1>
                    </div>
            </div>

            <div class="col-span-1 flex items-center justify-center">
                <form class="bg-black p-10 rounded-lg shadow-lg w-2/3 h-100" action="<?php ROOT_DIR ?>account/auth/register.php" method="post" style="background-color: #c6c6c6">
                    <h1 class="text-center text-2xl mb-6 text-white font-bold font-sans">REGISTER</h1>
                            <div>
                            <label class="text-white font-semibold block my-3 text-md" for="firstname">Username:</label>
                            <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="firstname" id="firstname" placeholder="Rob" />
                            </div>
                            <div>
                            <label class="text-white font-semibold block my-3 text-md" for="dob">Date of Birth</label>
                            <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="date" name="dob" id="surname" placeholder="" />
                            </div>	
                            <div>
                            <label class="text-white font-semibold block my-3 text-md" for="email">Email</label>
                            <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="email" id="email" placeholder="irob.banks@gmail.com" />
                            </div>
                            <div>
                            <label class="text-white font-semibold block my-3 text-md" for="psw">Password</label>
                            <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="psw" id="psw" placeholder="password" />
                            </div>
                                    <button type="submit" class="w-50 block mx-auto mt-6 bg-red-500 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans">Log In</button>
                </form>
            </div>   
</section>