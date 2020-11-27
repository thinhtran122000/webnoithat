<?php
    include_once('../Model/DataProvider.php');

    function get_cnt(){
        $sqlcnt = 'SELECT COUNT(*) as cnt FROM banner_slide_show';
        $cntresult = DataProvider::ExecuteQuery($sqlcnt);
        $cntdata = mysqli_fetch_assoc($cntresult);
        return $cntdata['cnt'];
    }

    function get_slide(){
        $sql = 'SELECT * FROM banner_slide_show';
        $result = DataProvider::ExecuteQuery($sql);
        return $result;
    }
?>