function myFunction() {
  try {
    //Some code here that might throw an exception
    // Example: accessing a non-existent file
    $file = fopen('nonexistent_file.txt', 'r');
    if ($file === false) {
        throw new Exception('File not found');
    }
    fclose($file);
  } catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
  }
}

myFunction();