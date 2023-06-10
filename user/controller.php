<?php 
    if(isset($_GET["page"])){
        switch($_GET["page"]){

            case "trang-chu":
                require "layouts/trang-chu.php";
                break;
            case "sinh-vien":
                require "sinh-vien/index.php";
                break;
            case "giang-vien":
                require "giang-vien/index.php";
                break;
            case "quan-ly-tai-khoan":
                require "quan-ly-tai-khoan/index.php";
                break;
            case "error":
                require "layouts/error.php";
                break;
            case "chi-tiet-sinh-vien":
                require "sinh-vien/chi-tiet-sinh-vien.php";
                break; 
            case "chi-tiet-giang-vien":
                require "giang-vien/chi-tiet-giang-vien.php";
                break; 
            default:
                echo "<script>location.href = 'index.php?page=error'</script>";
                break;
        }
    }else{
            echo "<script>location.href = 'index.php?page=trang-chu'</script>";
        }

?>