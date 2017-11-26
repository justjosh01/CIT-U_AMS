<?php

while ($row = mysqli_fetch_array($data['result']) ){
echo $row['name'];
}