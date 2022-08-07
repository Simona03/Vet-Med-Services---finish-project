
<?php 
 
// Load the database configuration file 
include_once 'config.php'; 
 
// Fetch records from database 
$query = $con->query("SELECT * FROM bookhours ORDER BY id ASC"); 
 
if($query->num_rows > 0){ 
    $delimiter = ","; 
    $filename = "ExportDB" . date('Y-m-d') . ".csv"; 
     
    // Create a file pointer, преди да покаже файла го отваря
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = array('id','Full Client Name','phone','email','Massage'); 
    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer, вкарваме данни от базата данни 
    while($row = $query->fetch_assoc()){ 
      
        $lineData = array($row['id'], $row['full_name'],  $row['phone'],$row['email'],$row['info']); 
        fputcsv($f, $lineData, $delimiter); 
    } 
     
    // Move back to beginning of file, като приключи с вмъкването на данни в таблица се връща в началото 
    fseek($f, 0); 
     
    // Set headers to download file rather than displayed, присвоява атрибутите във файла
    header('Content-Type: text/csv'); // завършващ формат
    header('Content-Disposition: attachment; filename="' . $filename . '";'); // да сложи име
     
    //output all remaining data on a file pointer 
    fpassthru($f); 
} 
exit; 
 
?>