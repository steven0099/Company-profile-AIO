<header style="
    position: fixed; 
    width: <?= (session()->get('loggedIn')) ? 'calc(100% - 320px)' : '100%' ?>;
    left: <?= (session()->get('loggedIn')) ? '290px' : '0' ?>;
    top: 0; 
    background-color: #333; 
    padding: 10px 20px; 
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1); 
    z-index: 1000;
">
    <div class="header-container" style="display: flex; justify-content: space-between; align-items: center;">
        <!-- Leftmost title -->
        <div class="header-title" style="flex: 1;">
            <h1 style="color: white;"><?= esc($title ?? 'Welcome') ?></h1>
        </div>

        <!-- Rightmost navigation -->
        <nav class="header-nav">
            <ul style="list-style: none; display: flex; gap: 15px; margin: 0;">
                <li><a href="<?= base_url('/') ?>" style="text-decoration: none; color: white; padding: 10px;">Home</a></li>

                <?php if (session()->get('loggedIn')): ?>
                    <li><a href="<?= base_url('/admin') ?>" style="text-decoration: none; color: white; padding: 10px;">Admin Dashboard</a></li>
                    <li><a href="<?= base_url('/auth/logout') ?>" style="text-decoration: none; color: white; padding: 10px;">Logout</a></li>
                <?php else: ?>
                    <li><a href="<?= base_url('/auth/login') ?>" style="text-decoration: none; color: white; padding: 10px;">Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</header>
