
<?php
    if(isset($msg)){
        echo '<span style="color:blue;font-weight:bold">' .$msg. '</span>';
    }
?>
<form autocomplete="off" action="<?php echo BASE_URL ?>login/authentication_login" method="post">
    <label for="">User name</label> <input type="text"  required="1" name="username">
    <label for="">Password</label> <input type="text" required="1" name="passwd" >
    <button type="submit" >Đăng nhập</button>
</form>