<?php

use MyProject\Core\URL;

require_once 'views/HomeShop/Header.php';
require_once 'views/HomeShop/Menu.php';
require_once 'views/HomeShop/Slide.php';
?>
    <div class="content">
        <div class="left">
            <?php
            require_once 'views/HomeShop/left/danhsachsp.php';
            ?>
        </div>
        <div class="right">
            <div class="forgot">
                <?php if (isset($_SESSION['errorps'])): ?>
                    <div class="ui segment">
                        <?php echo $_SESSION['errorps']; ?>
                    </div>
                <?php endif; ?>
                <div align="center" style="color:#C00;">ĐỔI MẬT KHẨU</div>
                <form class="ui form" method="POST" action="<?php \MyProject\Core\URL::uri('forgot'); ?>">
                    <div class="field">
                        <div class="field">
                            <label for="email">Email</label>
                            <input id="email" type="email" name="email" placeholder="email" required>
                        </div>
                    </div>
                    <button class="ui button" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php
require_once 'views/HomeShop/Footer.php';
?>
