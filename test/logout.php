<?php
            setcookie('username', 'admin', time() - 60*3);
            header("Location: index.php");
            die;