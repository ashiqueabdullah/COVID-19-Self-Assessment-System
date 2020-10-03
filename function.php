<?php 
    include_once "databased.php";

    class mainClass{

            private $db;
            function __construct(){
                $this->db=new databased();
            }

            function valueSave($data){
                $age=$data['age'];
                $tempa=$data['tempa'];
                if(!empty($data['gender'])){
                    $gender=$data['gender'];
                }else{
                    return 0;
                }
                if(!empty($data['symptom_list'])){
                    $symptom_list=$data['symptom_list'];
                }else{
                    return 0;
                }
                if(!empty($data['additional_symptom_list'])){
                    $additional_symptom_list=$data['additional_symptom_list'];
                    
                }else{
                    return 0;
                }
                
            
                $score=0;
                $i=0;
                $result="Negative";
                $date=date("m.d.y");

                if($tempa> 37.5){
                    $score=$score+2;
                }

                if(!empty($symptom_list)){
                    foreach($symptom_list as $select){
                        $i++; 
                    }
                    if($i>=2){
                        $score=$score+3+($i-1);
                    }else{
                        $score=$score+3;
                    }
                }


                if(!empty($additional_symptom_list)){
                    foreach($additional_symptom_list as $select){
                        $score=$score+2; 
                    }
                }
                
                if($score<5){
                    $result="Negative";
                }else if($score>=5){
                    $result="Positive";
                }else if($score > 5){
                    $result="Positive";
                }else if($score>7){
                    $result="Positive";
                }

                $sql="INSERT INTO `covid`(`Age`, `Sex`, `Temperature`, `Assessment_Date`, `Assessment_Score`, `Result`)
                 VALUES ('$age','$gender','$tempa','$date','$score','$result')";
                $getscore=$this->db->insert($sql);


                if($score<5){
                    return $score;
                }else if($score>=5){
                    return $score;
                }else if($score > 5){
                    return $score;
                }else if($score>7){
                    return $score;
                }

            }
    }
    
?>