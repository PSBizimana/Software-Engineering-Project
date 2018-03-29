<h2><?php echo $title;
//print_r($user);
?></h2>


<?php foreach ($user as $user_item): ?>

    <h3><?php echo $user_item['Username']; ?></h3>
    <div class="main">

        <p><?php echo $user_item['Password']; ?></p>

    </div>
    <p><a href="<?php echo site_url('user/'.$user_item['User_ID']); ?>">View user</a></p>

<?php endforeach; ?>
