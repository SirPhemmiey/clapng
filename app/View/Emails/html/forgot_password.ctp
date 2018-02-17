<p>Please click on the link below to reset your password.</p>
<!-- <a href="<?php echo $this->webroot;?>/admin/forgotPassword<?= $key .'BXX'.$rand.'XXB'. $id ?>/">Click here to reset your account password</a> -->
<a href="<?php echo $this->webroot;?>/admin/forgotPassword<?php echo $key.$rand.$id ?>/">Click here to reset your account password</a>
<hr />
<p>Alternatively, you can also copy paste the below link into your browser:
</p>
<p>http://<?= $_SERVER['HTTP_HOST']; ?>/admin/forgotPassword/<?= $key.$rand.$id ?>/</p>
<!-- <p><a href="<?php echo $this->webroot;?>/admin/forgotPassword<?= $key.$rand.$id ?>"></a></p> -->
<p>This email was sent by admin@clap.com.ng.</p>