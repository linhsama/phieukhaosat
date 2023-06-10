<?php 
    if(isset($_GET["page"])){
        switch($_GET["page"]){

            case "trang-chu":
                require "layouts/trang-chu.php";
                break;

            case "import-from-excel":
                require "import-from-excel/index.php";
                break;

            case "quan-ly-ket-qua-sinh-vien":
                require "quan-ly-ket-qua-sinh-vien/index.php";
                break; 
                case "quan-ly-ket-qua-giang-vien":
                    require "quan-ly-ket-qua-giang-vien/index.php";
                    break; 
            case "quan-ly-mau-phieu":
                require "quan-ly-mau-phieu/index.php";
                break; 
            case "quan-ly-dot-khao-sat":
                require "quan-ly-dot-khao-sat/index.php";
                break; 
            case "quan-ly-phieu-khao-sat":
                require "quan-ly-phieu-khao-sat/index.php";
                break; 
            case "quan-ly-ten-khao-sat":
                require "quan-ly-ten-khao-sat/index.php";
                break; 
            case "quan-ly-nhom-cau-hoi":
                require "quan-ly-nhom-cau-hoi/index.php";
                break; 
            case "quan-ly-cau-hoi":
                require "quan-ly-cau-hoi/index.php";
                break; 

                
            case "quan-ly-khoa":
                require "quan-ly-khoa/index.php";
                break; 
            case "quan-ly-nganh-hoc":
                require "quan-ly-nganh-hoc/index.php";
                break; 
            case "quan-ly-lop-hoc":
                require "quan-ly-lop-hoc/index.php";
                break; 
            case "quan-ly-khoa-hoc":
                require "quan-ly-khoa-hoc/index.php";
                break; 
            case "quan-ly-trinh-do":
                require "quan-ly-trinh-do/index.php";
                break; 
            case "quan-ly-nam-hoc":
                require "quan-ly-nam-hoc/index.php";
                break; 
            case "quan-ly-hoc-ky":
                require "quan-ly-hoc-ky/index.php";
                break; 


            case "quan-ly-sinh-vien":
                require "quan-ly-sinh-vien/index.php";
                break; 
          
            case "quan-ly-giang-vien":
                require "quan-ly-giang-vien/index.php";
                break; 
            case "quan-ly-phan-cong":
                require "quan-ly-phan-cong/index.php";
                break; 
            case "quan-ly-phan-nhom":
                require "quan-ly-phan-nhom/index.php";
                break; 
            case "quan-ly-phan-quyen":
                require "quan-ly-phan-quyen/index.php";
                break; 
            case "quan-ly-tai-nhom-cau-hoi":
                require "quan-ly-tai-nhom-cau-hoi/index.php";
                break; 

            case "error":
                require "layouts/error.php";
                break;
            
            default:
                echo "<script>location.href = 'index.php?page=error'</script>";
                break;
        }
    }else{
            echo "<script>location.href = 'index.php?page=dashboard'</script>";
        }

?>