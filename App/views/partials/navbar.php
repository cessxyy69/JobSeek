<?php
use Framework\Session;
?>

<!-- Nav -->
<header class="bg-blue-900 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-3xl font-semibold">
            <a href="/" class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 30 27" fill="none" stroke="#f0fdfa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="10" cy="8" r="5"/>
                    <path d="M2 21a8 8 0 0 1 13.292-6"/>
                    <circle cx="18" cy="18" r="3"/>
                    <path d="m22 22-1.5-1.5"/>
                </svg>
                <span>JobSeek</span>
            </a>
        </h1>
        <nav class="space-x-4">
            <?php if(Session::get('user')) : ?>
                <div class="flex justify-between items-center gap-4">
                    <div> Welcome, <?= Session::get('user')['name'] ?> </div>
                    <form method="POST" action="/auth/logout">
                        <button type="submit" class="text-white inline hover:underline">Logout</button>
                    </form>
                    <a
                    href="/listings/create"
                    class="bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 rounded hover:shadow-md transition duration-300"><i class="fa fa-edit"></i> Post a Job</a>
                </div>
                
            <?php else: ?>
                <a href="/auth/login" class="text-white hover:underline">Login</a>
                <a href="/auth/register" class="text-white hover:underline">Register</a>
                
            <?php endif; ?>
            
            
        </nav>
    </div>
</header>