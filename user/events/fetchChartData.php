<?php
include "../conn.php";

$optid = $_GET['id'];

$query = "SELECT 
`options`.`value`,
COUNT(`voterecord`.`policy_id`) AS `voteCount` 
FROM `options` 
left JOIN `voterecord` ON `voterecord`.`option_id`=`options`.`id` and `voterecord`.`policy_id`=`options`.`policy_id` and `voterecord`.`vote`=1
where `options`.`policy_id`=$optid
GROUP BY `options`.`value`";

$result = $conn->query($query);
$data= [];
if ($result->num_rows>0){
    $rowu = $result->num_rows; 
    while($rows=$result->fetch_all()){	
        for ($i=0; $i < $rowu; $i++) {
            $data[] = $rows[$i];
        }
    }
}
$data=array_reverse($data);
print json_encode($data);
        