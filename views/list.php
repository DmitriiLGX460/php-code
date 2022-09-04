<?php
/**@var array $params ...*/
?>

<?php
foreach ($params['users'] as $user):
?>
<h1>Имя: <?= $user['name'] . $user['sur_name'] ?></h1>

<?php
endforeach;
?>