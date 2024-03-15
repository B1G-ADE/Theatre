<?php 
	session_start();
    include '../../components/header.php';
    include '../../components/navigation.php';
?>
<section class="h-screen">
	<div class="h-full bg-black flex justify-center items-center py-10">
	<div class="md:w-12/12 w-2/3 h-2/3">
		<form class="bg-black p-10 rounded-lg shadow-lg min-w-full" action="<?php ROOT_DIR ?>account/auth/register.php" method="post" style="background-color: #1a1a1a">
			<h1 class="text-center text-2xl mb-6 text-white font-bold font-sans">REGISTER</h1>
					<div>
					<label class="text-white font-semibold block my-3 text-md" for="username">Username:</label>
					<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="username" id="username" placeholder="Rob" />
					</div>
					<div>
					<label class="text-white font-semibold block my-3 text-md" for="dob">Date of Birth</label>
					<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="date" name="dob" id="dob" placeholder="" />
      				</div>	
		  			<div>
					<label class="text-white font-semibold block my-3 text-md" for="email">Email</label>
					<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="email" id="email" placeholder="irob.banks@gmail.com" />
					</div>
					<div>
					<label class="text-white font-semibold block my-3 text-md" for="password">Password</label>
					<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="password" id="password" placeholder="password" />
      				</div>
							<button type="submit" class="w-50 block mx-auto mt-6 bg-red-500 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans">Log In</button>
		</form>
	</div>
	</div>
</section>

    
    
<?php include '../../components/footer.php'; ?>