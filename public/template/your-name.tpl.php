<?php require 'partials/_top.tpl.php'; ?>
<div class="container">
<div class="center">
<?php foreach($keys as $key) : ?>
<h1 class="text-center text-warning"><?=$message ?> <span><?= $key ?></span></h1>
<?php endforeach ?>
<form action="" method="POST">
<input class="text-center p-3 mb-2 btn btn-outline-danger" type="submit" value="I don't like this name" name="submit">
</form>
</div>
</div>
<?php require 'partials/_bottom.tpl.php'; ?>