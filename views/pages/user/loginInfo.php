<li style="pointer-events: none;"><a href="#"><strong>Funkcijos:</strong></a></li>
<!--<li><a href="#">--><?php //echo $user['username']; ?><!--</a></li>-->
<!--<li><a href="#">--><?php //echo $user['email']; ?><!--</a></li>-->
<li><a href="#"><a href="index.php?page=blog_add">Rašyti blogą</a></a></li>


<?php if ($user['admin']): ?>
    <li role="separator" class="divider"></li>
    <li  style="pointer-events: none;"><a href="#"><strong>Administravimas:</strong></a></li>
    <li><a href="#"><a href="index.php?page=article_add">Pridėti naujieną</a></a></li>
    <li><a href="#"><a href="index.php?page=game_add">Pridėti mačą</a></a></li>
<?php endif; ?>

<li role="separator" class="divider"></li>
<li><a href="#"><a href="<?php echo USER_CONTROLLERS . 'UserLogoutController.php'; ?>">Atsijungti</a></a></li>
