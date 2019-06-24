<?php

class BingoSheet extends CI_Model {

        public $sheet_id;
        public $rows;
        public $cols;
        public $data_bi;
        
        public function newgamebingo(){
            //Bingo_Job
            $sql = "SELECT round FROM Bingo_Job  WHERE  Online  = 1";
            $query = $this->db->query($sql);
            $round = 0;
            foreach ($query->result() as $row)
            {
                $round = $row->round;
            }
            $round++;
            
            $sql = "UPDATE Bingo_Job set Online = 0  WHERE Online = 1";
            $this->db->query($sql);
            $sql = "INSERT INTO Bingo_Job(job_ID, name, show_name, bingo_size, round, Online) VALUES (null ,'WUNCA39','WUNCA39',5,$round,1)";
            $this->db->query($sql);
            $this->db->truncate('bingo_player');
            $this->db->truncate('bingo_value');
            //$this->db->truncate('players');
            
            //bingo_player
            //bingo_value
            //players
        }

        public function insert_sheet($arr,$sheet_size)
        {
                $this->db->truncate('bingo_sheet');

                $i=0;
                foreach ($arr as $value) {
                        $rows = 0;
                        $cals =0;
                        $j=0;
                        foreach ($value as $key2 => $value2) {
                                //echo "[$i,$j = $value2]";
                                $data_sheet = array('sheet_id' =>$i, 'position'=>$j , 'rows' =>$rows, 'cols' =>$cals, 'data_bi' =>$value2 );
                                $this->db->insert('bingo_sheet', $data_sheet);
                                $cals++;
                                if($cals % $sheet_size == 0){
                                        $cals = 0;
                                        $rows++;
                                }
                                $j++;
                        }
                        //echo "<br/>";
                        $i++;
                }
        }

        public function getBigoSheet($playersID){
                $query = $this->db->get('entries', 10);
                return $query->result();
        }

}