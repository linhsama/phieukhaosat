<?php
    session_start();
    $href = $_SERVER["HTTP_REFERER"];
    if(strlen(strpos($href, "&status")) > 0){
        $href = explode("&status", $href)[0];
    }
    require "../../models/getModel.php";
    
    if (isset($_GET["req"])){
        switch($_GET["req"]){
            case "add":
                $status = 0;
                $id_phieu = $_POST["id_phieu"];
                $kq_ks = $_POST["kq_ks"];
                $kq_is_text = $_POST["kq_is_text"];
                $kq = "";
                foreach ($kq_ks as $item) {
                    $subArray = implode('|', $item);
                    $kq .= $subArray . "|";
                }

                foreach ($kq_is_text as $item) {
                    $kq .= $item . "|";
                }
               
                $status .= $phieukhaosat->phieukhaosat__Update_Kq_KS($id_phieu, rtrim($kq, "|"));

                if($status != "0" ){
                    header("location: $href&status=success");
                }else{
                    header("location: $href&status=failed");
                }
                break; 

           
        }
    }
?>