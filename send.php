 <?php
 
                                if (isset($_POST['submit']))
                                        {
                                            
                                        
                                            $name = $_POST['name'];
                                            $email = $_POST['email'];
                                            $service = $_POST['service'];
                                            $address = $_POST['address'];
                                            $cell = $_POST['cell'];
                                            
                                            $subject = "Survey Request";
                                            $To = "astleanjum3@gmail.com";
                                            $txt = "From: ".$name."\nEmail: ".$email."\n\nService: ".$service."\nAddress: ".$address."\nPhone No: ".$cell;
                                           
                                            $send = mail ($To, $subject, $txt);
                                            if ($send) {
                                                echo '<script language="javascript">';
                                                echo 'alert("Request successfully sent\nWill reply you shortly")';
                                                echo '</script>';
                                                
                                            }
                                            else {
                                                echo "mail failed";
                                            }
                                            
                                           $URL="index.html";
                                            echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
                                            }


                                        
                                        
      ?>