<nav class="navbar">
    <div class="container">
        <div class="row">
            
        </div>
    </div>
</nav>









<!-- <div class="row">
            <div class="col-xs-3"></div>
            <div class="col-xs-6">
                <a href="<?= $this->Url->build('/') ?>"><?= $this->Html->image('anchor-salon-logo.png', ['alt' => 'Anchor Salon Logo', 'class'=>'logo']); ?></a>
                <?php if($username){ echo 'Welcome '.$username; } ?>
            </div>
            <div class="col-xs-3"></div>
        </div>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <?= $this->Html->link('Home', ['controller'=>'pages', 'action'=>'display'], ['class'=>'nav-links']); ?>
                </li>
                <li class="nav-item">    
                    <?= $this->Html->link('About', ['controller'=>'pages', 'action'=>'about'], ['class'=>'nav-links']); ?>
                </li>
                <li class="nav-item">
                    <?= $this->Html->link('Contact', ['controller'=>'pages', 'action'=>'contact'], ['class'=>'nav-links']); ?>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if(!$username): ?>
                    <li class="nav-item">
                        <?= $this->Html->link('Login', ['controller'=>'users', 'action'=>'login'], ['class'=>'nav-links']); ?>
                    </li>
                    <li class="nav-item">
                        <?= $this->Html->link('Register', ['controller'=>'users', 'action'=>'register'], ['class'=>'nav-links']); ?>
                    </li>
                <?php elseif($username): ?>
                    <li class="nav-item">
                        <?= $this->Html->link('Logout', ['controller'=>'users', 'action'=>'logout'], ['class'=>'nav-links']); ?>
                    </li>
                <?php endif; ?>
            </ul>
        </div> -->