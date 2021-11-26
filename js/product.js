       
                function validate(){
                var pro_code = document.getElementById('pc').value;
                if (pro_code=="") {
                document.getElementById('pcerr').innerHTML = "please enter product code";
                return false;    
                }
                else
                {
                document.getElementById('pcerr').innerHTML = "";    
                } 
                var pro_name = document.getElementById('pn').value;
                if (pro_name=="") {
                document.getElementById('pnerr').innerHTML = "*please enter your product name";
                return false;   
                }
                else
                {
                document.getElementById('pnerr').innerHTML  = "";  
                }

                var quantity = document.getElementById('qty').value;
                if (quantity=="") {
                document.getElementById('qtyerr').innerHTML = "*please inter quantity";
                return false;    
                }
                else
                {
                document.getElementById('qtyerr').innerHTML = "";    
                }
                var pro_choice = document.getElementById('prch').value;
                if (pro_choice=="") {
                document.getElementById('prcherr').innerHTML = "*please enter choice";
                return false;   
                }
                else
                {
                document.getElementById('prcherr').innerHTML = "";
                }
                var pro_price = document.getElementById('pr').value;
                if (pro_price=="") {
                document.getElementById('prerr').innerHTML  = "*please enter price";
                return false;   
                }
                else
                {
                document.getElementById('prerr').innerHTML = "";   
                } 
                var inp = document.getElementById('fl');
                 if(inp.files.length == ""){
                  document.getElementById('flerr').innerHTML = "please slect file";
                 return false;
                 }
                 else
                 {
                 document.getElementById('fler').innerHTML = "";   
                 }
                 }
                
