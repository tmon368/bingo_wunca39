<?php

class BingoModel extends CI_Model {
    public function getOnlineGame(){
        $this->db->where('online',1);
        $query = $this->db->get('Bingo_Job');
        $game_id = 0;
        foreach ($query->result() as $row)
        {
            $game_id = $row->round;
        }
        return $game_id;
    }
    
    public function getNewSheetID($gameID){
        $sql = "SELECT (IfNull(max(bimgo_sheet),0)) + 1 as sheetID FROM players WHERE job_id ='$gameID' ";
        //echo $sql;
        $query = $this->db->query($sql);
        $sheetID = 0;
        foreach ($query->result() as $row)
        {
            $sheetID = $row->sheetID;
        }
        return $sheetID;
    }
    
    public function getBigoSheet($code_id,$username){
        $gameID = $this->getOnlineGame();
        //$sql = "SELECT * FROM players p JOIN Bingo_Job j on p.job_id = j.job_ID WHERE p.code_id = '$code_id' and j.Online = 1 ";
        $sql = "SELECT * FROM players WHERE code_id = '$code_id' and job_id='$gameID'";
        //echo "<br>".$sql;
        $query = $this->db->query($sql);
        $sheetID = '';
        //มีการกำหนด sheet ให้แล้ว
        if ($query->num_rows() > 0){
            foreach ($query->result() as $row)
            {
                $sheetID = $row->bimgo_sheet;
            }
        }else {
            //ยังไม่กำหนด sheet ให้
            $sheetID = $this->getNewSheetID($gameID);
            $sql = "INSERT INTO  players (`id`, `job_id`, `fname`, `code_id`, `bimgo_sheet`) VALUES (NULL,'$gameID','$username','$code_id','$sheetID')";
            $this->db->query($sql);
            //echo "<br>".$sql;
        }
        
        $sheetDetail = $this->getSheetDetailArray($sheetID);
        $result = array();
        $result["status"] = true;
        $result["round"] = $gameID;
        //$result["code_id"] = $code_id;
        //$result["username"] = $username;
        $result["data"] = $sheetDetail;
        
        return $result; 
    }
    
    public function getSheetDetailArray($sheetID){
        $this->db->where('sheet_id', $sheetID);
        $query = $this->db->get('bingo_sheet');
        $sheet = array();
        //echo "<br>";
        $i = 0;
        foreach ($query->result() as $row)
        {
            $sheetRow = array("position"=>$row->position, "row"=>$row->rows, "col"=>$row->cols,"data"=>$row->data_bi);
            $sheet[$i] = $sheetRow;
            $i++;
        }
        
        //print_r($sheet);
        return  $sheet;
        
    }
    
    public function getBingoValue(){
        //$gameID = $this->getOnlineGame();
        $this->db->select('value');
        $query = $this->db->get('bingo_value');
        $values = $query->result_array();
        return $values;
    }
    
    public function chkAll($userdata){
        $bingo_value = $this->getBingoValue();
        $iscase = $this->checkIsCase($userdata);
        print_r($iscase);
        //$this->chkCase1($userdata, $bingo_value);
        /*
            [0] 0,1,2,3,4
            [1] 5,6,7,8,9
            [2] 10,11,12,13,14
            [3] 15,16,17,18,19
            [4] 20,21,22,23,24
            [5] 0,5,10,15,20
            [6] 1,6,11,16,21
            [7] 2,7,12,17,22
            [8] 3,8,13,18,23
            [9] 4,9,14,19,24
            [10] 0,6,18,12,24
            [11] 4,8,12,16,20
        */
        
        return false;
    }
    
    public function chkCase1($userdata, $bingo_value){
        //print_r($userdata);
        //print_r($bingo_value);
    }
    
    public function checkIsCase ($userdata){
        $isBingoArr = array();
        $count = 0;
        $cases = array();
        //case0 : 0,1,2,3,4
        $cases[0] = array(0,1,2,3,4);
        //case1 : 5,6,7,8,9
        $cases[1] = array(5,6,7,8,9);
        //case2 : 10,11,12,13,14
        $cases[2] = array(10,11,12,13,14);
        //case3 : 15,16,17,18,19
        $cases[3] = array(15,16,17,18,19);
        //case4 : 20,21,22,23,24
        $cases[4] = array(20,21,22,23,24);
        //case5 : 0,5,10,15,20
        $cases[5] = array(0,5,10,15,20);
        //case6 : 1,6,11,16,21
        $cases[6] = array(1,6,11,16,21);
        //case7 : 2,7,12,17,22
        $cases[7] = array(2,7,12,17,22);
        //case8 : 3,8,13,18,23
        $cases[8] = array(3,8,13,18,23);
        //case9 : 4,9,14,19,24
        $cases[9] = array(4,9,14,19,24);
        //case10 : 0,6,18,12,24
        $cases[10] = array(0,6,18,12,24);
        //case11 : 4,8,12,16,20
        $cases[11] = array(4,8,12,16,20);
        
        foreach ($cases as $key =>$arrCase){
            $iscase = true;
            foreach ($arrCase as $keys=>$value){
                if(!in_array($value,$userdata)){
                    $iscase = false;
                }
            }
            if($iscase){
                $isBingoArr[$key] = true;
            }
            //echo "<br>====[$key]=[".$iscase."]=====<br>";
        }
        
        return $isBingoArr;
    }
        
        

}