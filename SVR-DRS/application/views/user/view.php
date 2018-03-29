  <table>
    <?php
    if(isset($user_item['Profile_Pic']))
    {
      $pic = $user_item['Profile_Pic'];
    }
    else
    {
      $pic = 'DefaultPic.jpg';
    }
    echo "<tr><td><div>"; ?>
    <a href="<?php echo site_url('upload'); ?>"> <?php
    echo ' <img src="'.base_url().'uploads/'.$pic.'" alt="'.$pic.'" width="300px" height="auto">';
    echo '</div></a></td><td><div><h2>User ID: '.$user_item['User_ID'].'</h2></br>';
    echo '<h3>Username: '.$user_item['Username'].'</br>';
    echo 'Email: '.$user_item['Email'].'</h3></br>';
    echo '</div></td></tr>';
    ?>

  </table>
