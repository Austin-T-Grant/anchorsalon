<nav class="top-nav">
    <div class="top-nav-title">
        <a href="<?= $this->Url->build('/') ?>"><?= $this->Html->image('anchor-salon-logo.png', ['alt' => 'Anchor Salon Logo', 'class'=>'logo']); ?></a>
        <?php
            if($username){
                echo 'Welcome '.$username;
            }
        ?>
    </div>
    <div class="top-nav-links">
        <?php if(!$username): ?>
            <a href=<?= $this->Url->build(['controller'=>'users', 'action'=>'login']); ?>>Login</a>
            <a href=<?= $this->Url->build(['controller'=>'users', 'action'=>'register']); ?>>Register</a>
        <?php endif; ?>
        <?php if($username): ?>
            <a href=<?= $this->Url->build(['controller'=>'users', 'action'=>'logout']); ?>>Logout</a>
        <?php endif; ?>
    </div>
</nav>