<?php
include 'header.php';
    ?>
    <script>
var buten = document.getElementById("tabell");
Func();

function Func() {
  
    buten.classList.add("active2");
}
    </script>
    
  <div _ngcontent-sc50=""  class="container eventbarContainer">
  <div class="GrayGameDiv FoldedGray"></div>
        <div class="redTriangle FoldedTriangle"></div>   
	      

    
            
            <br>
            
            
            
                        <?php
                        
getTeams($conn);
                        

?>
            </tbody>           
</table>
	  </div>
	</div>
</div>
        
        
            

	    
	  </div>
</div>
   <?php
   include 'footer.php';
   ?>
 

</body>


</html>