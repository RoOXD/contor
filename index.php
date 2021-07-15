<html>
<form method="post">
        <input type="submit" value="+" name="sus" />
        <input type="submit" value="-" name="jos" />
</form>
<?php
    if (!isset($_COOKIE['count']))
    {
?>
Valoare contor: 0
<?php
    $cookie = 1;
    setcookie("count", $cookie);
    }
    else
    {
        if (isset($_POST['sus'])){
                $cookie = ++$_COOKIE['count'];
                setcookie("count", $cookie);
        }
         if (isset($_POST['jos'])){
                $cookie = --$_COOKIE['count'];
                setcookie("count", $cookie);
        }
?>
Valoare contor: <?= $_COOKIE['count'] ?>
<?php  }
?>
