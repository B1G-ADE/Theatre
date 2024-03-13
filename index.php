<?php 
    session_start();
    include 'components/header.php';
    include 'account/auth/dbConfig.php';
?>
<?php include 'components/navigation.php'; ?>
<div class="">
    <section class="hero bg-black flex justify-center absolute justify-center inset-0 flex flex-col h-screen w-screen">
        <div class="flex items-center h-screen relative w-full">
            <div class="flex-1 text-white text-nowrap">
                <h1 class="text-7xl font-bold mb-6 text-end font-montserrat">Unveiling <span class="text-red-500">Dreams</span>, <br> On Stage and Beyond</h1>
            </div>
            <div class="flex-1 flex bg-auto h-screen ml-auto" style="background-image: url('assets/images/samuraiGuy.jpg'); background-size: contain; background-repeat: no-repeat; background-position: right bottom;">
            </div>
        </div>
    </section>
</div>

  

<!-- advert component - 3 boxes -->
<!--<?php include 'components/latest.php'; ?>-->
<!-- Upcoming shows -->
<?php include 'components/blogSection.php'; ?>
<?php include 'components/upcomingShows.php'; ?>
<?php include 'components/footer.php'; ?>