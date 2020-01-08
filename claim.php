 <?php
 
                            if (isset($_POST['claim']))
                                        {
                                            
                                        
                                            $name = $_POST['namec'];
                                            $invoice = $_POST['invoice'];
                                            $cell = $_POST['telc'];
                                            
                                            $subject = "Claim Warranty";
                                            $To = "astleanjum3@gmail.com";
                                            $txt = "From: ".$name."\Invoice No.: ".$invoice."\nPhone No: ".$cell;
                                           
                                            $send = mail ($To, $subject, $txt);
                                            if ($send) {
                                                echo '<script language="javascript">';
                                                echo 'alert("Message successfully sent\nWill reply you shortly")';
                                                echo '</script>';
                                                
                                            }
                                            else {
                                                echo "mail failed";
                                            }
                                            
                                           $URL="index.html";
                                            echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
                                            }
                                        
                                        
      ?>