<?php
function pushWork($formName, $recipientEmail, $subject) {
	
    if (isset($_POST['form_name']) && $_POST['form_name'] === $formName) {
       
        $formData = $_POST;
        unset($formData['form_name']); 

        $message = "Form Data:\n\n";
        foreach ($formData as $key => $value) {
            $message .= htmlspecialchars($key) . ' : ' . htmlspecialchars($value) . "\n";
        }

        // Set email headers
		
        $headers = "From: info@distinctionpro.com\r\n";
        $headers .= "Reply-To: info@distinctionpro.com\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        // Send the email
		
        if (mail($recipientEmail, $subject, $message, $headers)) {
		
			$response = 1;
			
        } else {
			
			$response = 0;
        }
		
    } else {
		
        //echo 'Form name does not match or not set.';
		$response = 2;
		
    }
	
	return $response;
}

function handlePro($formName) {
		
			if (isset($_POST['form_name']) && $_POST['form_name'] === $formName) {
				
				$formData = $_POST;
				unset($formData['form_name']);
				
				foreach ($formData as $key => $value) {
					
					echo htmlspecialchars($key) . ': ' . htmlspecialchars($value) . '<br>';
					
				}
				
			} else {
				
				echo 'Form name does not match or not set.';
			}
		}

function alertus($msg){
	
	?>
	<script>
	
		alert("<?php echo $msg;?>");
		
		window.location = "./";
		
	</script>
	<?php
	
}

function getCurrentFileName() {
    // Get the path of the current script
    $scriptPath = $_SERVER['SCRIPT_NAME'] ?? $_SERVER['PHP_SELF'];
    
    // Extract the file name from the path
    $fileName = basename($scriptPath);
    
    return $fileName;
}
?>