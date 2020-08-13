<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-8">
                <h3>AnchorSalon</h3>
                <p>This is some random content to give a brief summary of what this website is about.</p>
            </div>
            <div class="col-xs-4">
                <div class="col-xs-6">
                    <ul>
                        <li><h5>Pages</h5></li>
                        <li>
                            <?= $this->Html->link('Home', ['controller'=>'pages', 'action'=>'display'], ['class'=>'nav-links']); ?>
                        </li>
                        <li>
                            <?= $this->Html->link('About', ['controller'=>'pages', 'action'=>'about'], ['class'=>'nav-links']); ?>
                        </li>
                        <li>
                            <?= $this->Html->link('Contact', ['controller'=>'pages', 'action'=>'contact'], ['class'=>'nav-links']); ?>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-6">
                    <ul>
                        <li><h5>Users</h5></li>
                        <li>
                            <?= $this->Html->link('Login', ['controller'=>'users', 'action'=>'login'], ['class'=>'nav-links']); ?>
                        </li>
                        <li>
                            <?= $this->Html->link('Register', ['controller'=>'users', 'action'=>'register'], ['class'=>'nav-links']); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row copy">
            <div class="col-xs-12">
                <h6>© AnchorSalon | Created and developed by: Austin Grant | Email: agrantdeveloper@gmail.com | Whatsapp: +27-722881923</h6>
            </div>
        </div>
    </div>
</footer>