<?php

class BingoSheet extends CI_Model {

        public $sheet_id;
        public $rows;
        public $cols;
        public $data_bi;

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
                        echo "<br/>";
                        $i++;
                }
        }

        public function getBigoSheet($playersID){
                $query = $this->db->get('entries', 10);
                return $query->result();
        }

}