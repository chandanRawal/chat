
						
						
						<?php
						
						echo $row2['name'].":"."&nbsp;&nbsp;&nbsp;";
						echo $row['input'];	
						$c = strtotime($row['time']);
						echo "(".date('h:m:s',$c).")"."<br>";	
                        
						?>