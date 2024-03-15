<div class="relative">
    <!-- Mobile menu toggle -->
    <div class="flex justify-between items-center bg-black h-16 px-4 sm:hidden">
        <!-- Burger icon -->
        <button id="mobile-menu-button" class="text-white">
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
        <div>
            <a href="<?= ROOT_DIR ?>login">
                <span class="material-symbols-outlined text-white" style="width: 30px; height:30px;">
                    account_circle
                </span>
            </a>
        </div>
    </div>

    <!-- Dropdown menu -->
    <nav class="hidden bg-black sm:block">
        <div class="flex justify-between items-center h-16 px-4">
            <div class="flex">
                <div class="nav-item mx-4"><a href="<?= ROOT_DIR ?>home">HOME</a></div>
                <div class="nav-item mx-4"><a href="<?= ROOT_DIR ?>contact">CONTACT</a></div>
                <div class="nav-item mx-4"><a href="<?= ROOT_DIR ?>blogs">BLOG</a></div>
                <?php if (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1) { ?>
                    <!-- Display the ADMIN link only if logged in as an admin -->
                    <div class="nav-item mx-4 text-red underline"><a href="<?= ROOT_DIR ?>a/dashboard">ADMIN</a></div>
                <?php } ?>
            </div>
            <div>
                <a href="<?= ROOT_DIR ?>login">
                    <span class="material-symbols-outlined text-white" style="width: 30px; height:30px;">
                        account_circle
                    </span>
                </a>
            </div>
        </div>
    </nav>
</div>

<!-- Mobile menu -->
<div id="mobile-menu" class="hidden sm:hidden">
    <div class="px-2 pt-2 pb-3 space-y-1">
        <div class="nav-item mx-4"><a href="<?= ROOT_DIR ?>home">HOME</a></div>
        <div class="nav-item mx-4"><a href="<?= ROOT_DIR ?>contact">CONTACT</a></div>
        <div class="nav-item mx-4"><a href="<?= ROOT_DIR ?>blogs">BLOG</a></div>
        <?php if (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1) { ?>
            <!-- Display the ADMIN link only if logged in as an admin -->
            <div class="nav-item mx-4 text-red underline"><a href="<?= ROOT_DIR ?>a/dashboard">ADMIN</a></div>
        <?php } ?>
    </div>
</div>

<script>
    // Toggle mobile menu visibility
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>
