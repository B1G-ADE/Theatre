<?php session_start(); ?>

<?php include '../../../components/header.php'; ?>
  
  <?php include '../../../components/navigation.php'; ?>
  <div class="px-3 md:lg:xl:px-40 border-t border-b py-20 bg-opacity-10";">
      <!--  <div class="grid gap-10 grid-cols-1 md:lg:xl:grid-cols-3 group mx-auto">
            <div class="max-w-sm border-red-800 border-2 rounded overflow-hidden shadow-lg p-10 flex flex-col items-center text-center cursor-pointer" style="background-color: #1a1a1a"; onclick="window.location.href='<?= ROOT_DIR ?>a/allUsers';">
                <svg xmlns="http://www.w3.org/2000/svg" height="283" viewBox="0 -960 960 960" width="283"><path d="M400-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM80-160v-112q0-33 17-62t47-44q51-26 115-44t141-18h14q6 0 12 2-8 18-13.5 37.5T404-360h-4q-71 0-127.5 18T180-306q-9 5-14.5 14t-5.5 20v32h252q6 21 16 41.5t22 38.5H80Zm560 40-12-60q-12-5-22.5-10.5T584-204l-58 18-40-68 46-40q-2-14-2-26t2-26l-46-40 40-68 58 18q11-8 21.5-13.5T628-460l12-60h80l12 60q12 5 22.5 11t21.5 15l58-20 40 70-46 40q2 12 2 25t-2 25l46 40-40 68-58-18q-11 8-21.5 13.5T732-180l-12 60h-80Zm40-120q33 0 56.5-23.5T760-320q0-33-23.5-56.5T680-400q-33 0-56.5 23.5T600-320q0 33 23.5 56.5T680-240ZM400-560q33 0 56.5-23.5T480-640q0-33-23.5-56.5T400-720q-33 0-56.5 23.5T320-640q0 33 23.5 56.5T400-560Zm0-80Zm12 400Z" fill="white"/></svg>
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2 text-white">Accounts</div>
                    </div>
            </div>
            <div class="max-w-sm border-red-800 border-2 rounded overflow-hidden shadow-lg p-10 flex flex-col items-center text-center cursor-pointer" style="background-color: #1a1a1a"; onclick="window.location.href='<?= ROOT_DIR ?>a/addBlog';">
                <svg xmlns="http://www.w3.org/2000/svg" height="283" viewBox="0 -960 960 960" width="283"><path d="M400-400h160v-80H400v80Zm0-120h320v-80H400v80Zm0-120h320v-80H400v80Zm-80 400q-33 0-56.5-23.5T240-320v-480q0-33 23.5-56.5T320-880h480q33 0 56.5 23.5T880-800v480q0 33-23.5 56.5T800-240H320Zm0-80h480v-480H320v480ZM160-80q-33 0-56.5-23.5T80-160v-560h80v560h560v80H160Zm160-720v480-480Z" fill="white"/></svg>
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2 text-white">Articles</div>
                    </div>
            </div>
            <div class="max-w-sm border-red-800 border-2 rounded overflow-hidden shadow-lg p-10 flex flex-col items-center text-center cursor-pointer" style="background-color: #1a1a1a"; onclick="window.location.href='<?= ROOT_DIR ?>a/pendingComments';">
            <svg xmlns="http://www.w3.org/2000/svg" height="283" viewBox="0 -960 960 960" width="283"><path d="M240-400h122l200-200q9-9 13.5-20.5T580-643q0-11-5-21.5T562-684l-36-38q-9-9-20-13.5t-23-4.5q-11 0-22.5 4.5T440-722L240-522v122Zm280-243-37-37 37 37ZM300-460v-38l101-101 20 18 18 20-101 101h-38Zm121-121 18 20-38-38 20 18Zm26 181h273v-80H527l-80 80ZM80-80v-720q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v480q0 33-23.5 56.5T800-240H240L80-80Zm126-240h594v-480H160v525l46-45Zm-46 0v-480 480Z" fill="white"/></svg>                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2 text-white">Comments</div>
                    </div>
            </div>
        </div>
     -->
    <div class="grid gap-10 grid-cols-1 md:lg:xl:grid-cols-3 group mx-auto">
  <div class="max-w-sm border-red-800 border-2 rounded overflow-hidden shadow-lg p-10 flex flex-col items-center text-center cursor-pointer" style="background-color: #1a1a1a;" onclick="window.location.href='<?= ROOT_DIR ?>a/allUsers';">
    <div class="px-6 py-4">
    <svg xmlns="http://www.w3.org/2000/svg" height="283" viewBox="0 -960 960 960" width="283"><path d="M400-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM80-160v-112q0-33 17-62t47-44q51-26 115-44t141-18h14q6 0 12 2-8 18-13.5 37.5T404-360h-4q-71 0-127.5 18T180-306q-9 5-14.5 14t-5.5 20v32h252q6 21 16 41.5t22 38.5H80Zm560 40-12-60q-12-5-22.5-10.5T584-204l-58 18-40-68 46-40q-2-14-2-26t2-26l-46-40 40-68 58 18q11-8 21.5-13.5T628-460l12-60h80l12 60q12 5 22.5 11t21.5 15l58-20 40 70-46 40q2 12 2 25t-2 25l46 40-40 68-58-18q-11 8-21.5 13.5T732-180l-12 60h-80Zm40-120q33 0 56.5-23.5T760-320q0-33-23.5-56.5T680-400q-33 0-56.5 23.5T600-320q0 33 23.5 56.5T680-240ZM400-560q33 0 56.5-23.5T480-640q0-33-23.5-56.5T400-720q-33 0-56.5 23.5T320-640q0 33 23.5 56.5T400-560Zm0-80Zm12 400Z" fill="white"/></svg>
      <div class="font-bold text-xl mb-2 text-white">Accounts</div>
    </div>
  </div>
  <div class="max-w-sm border-red-800 border-2 rounded overflow-hidden shadow-lg p-10 flex flex-col items-center text-center cursor-pointer" style="background-color: #1a1a1a;" onclick="window.location.href='<?= ROOT_DIR ?>a/addBlog';">
    <div class="px-6 py-4">
    <svg xmlns="http://www.w3.org/2000/svg" height="283" viewBox="0 -960 960 960" width="283"><path d="M400-400h160v-80H400v80Zm0-120h320v-80H400v80Zm0-120h320v-80H400v80Zm-80 400q-33 0-56.5-23.5T240-320v-480q0-33 23.5-56.5T320-880h480q33 0 56.5 23.5T880-800v480q0 33-23.5 56.5T800-240H320Zm0-80h480v-480H320v480ZM160-80q-33 0-56.5-23.5T80-160v-560h80v560h560v80H160Zm160-720v480-480Z" fill="white"/></svg>
      <div class="font-bold text-xl mb-2 text-white" >Articles</div>
    </div>
  </div>
  <div class="max-w-sm border-red-800 border-2 rounded overflow-hidden shadow-lg p-10 flex flex-col items-center text-center cursor-pointer" style="background-color: #1a1a1a;" onclick="window.location.href='<?= ROOT_DIR ?>a/pendingComments';">
    <div class="px-6 py-4">
    <svg xmlns="http://www.w3.org/2000/svg" height="283" viewBox="0 -960 960 960" width="283"><path d="M240-400h122l200-200q9-9 13.5-20.5T580-643q0-11-5-21.5T562-684l-36-38q-9-9-20-13.5t-23-4.5q-11 0-22.5 4.5T440-722L240-522v122Zm280-243-37-37 37 37ZM300-460v-38l101-101 20 18 18 20-101 101h-38Zm121-121 18 20-38-38 20 18Zm26 181h273v-80H527l-80 80ZM80-80v-720q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v480q0 33-23.5 56.5T800-240H240L80-80Zm126-240h594v-480H160v525l46-45Zm-46 0v-480 480Z" fill="white"/></svg>
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2 text-white" >Comments</div>
    </div>
  </div>
</div> 
</div>
  <?php include '../../../components/footer.php'; ?>

