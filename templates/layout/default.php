<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */


?>
<!DOCTYPE html>
<html>
    <?= $this->element('default/header'); ?>
<body>
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
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
