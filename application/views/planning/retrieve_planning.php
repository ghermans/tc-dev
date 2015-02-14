<?php
 foreach ($plist as $row) {
$jsondata[] = array('id' =>  $row['id'],
                   'title' => $row['title'] ,
                   'start' => $row['pdate'],
                            );
}
echo json_encode($jsondata);
?>  