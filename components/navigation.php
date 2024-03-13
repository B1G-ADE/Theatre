<div class="relative">
    <nav class="flex bg-black h-26 items-center justify-between text-white relative z-10">
        <div class="flex items-center mx-auto" style="transform: translateX(10%);">
            <div class="nav-item mx-4"><a href="<?= ROOT_DIR ?>home">HOME</a></div>
            <div class="nav-item mx-4"><a href="<?= ROOT_DIR ?>contact">CONTACT</a></div>
            <div class="nav-item mx-4"><a href="<?= ROOT_DIR ?>blogs">BLOG</a></div>
            <?php if (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1) { ?>
                <!-- Display the ADMIN link only if logged in as an admin -->
                <div class="nav-item mx-4 text-red underline"><a href="<?= ROOT_DIR ?>a/dashboard">ADMIN</a></div>
            <?php } ?>
        </div>
        <div class="flex items-center">
            <div class="nav-item mx-4">
                <a href="<?= ROOT_DIR ?>login">
                    <span class="material-symbols-outlined" style="width: 38px; height:38px;">
                        account_circle
                    </span>
                </a>
            </div>
        </div>
    </nav>
</div>