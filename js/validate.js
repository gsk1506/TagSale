function validate(){
                var role = document.getElementById('rol').;
                if (role=="") {
                document.getElementById('rolerr').innerHTML = "please select role";
                return false;    
                }
                else
                {
                document.getElementById('rolerr'),innerHTML = "";    
                } 
                var name = document.getElementById('nm').value;
                if (name=="") {
                document.getElementById('nmerr').innerHTML = "*please enter your name";
                return false;   
                }
                else
                {
                document.getElementById('nmerr').innerHTML  = "";  
                }

                var email = document.getElementById('em').value;
                if (email=="") {
                document.getElementById('emerr').innerHTML = "*please inter your eamil";
                return false;    
                }
                else
                {
                document.getElementById('emerr').innerHTML = "";    
                }
                var password = document.getElementById('pass').value;
                if (password=="") {
                document.getElementById('passerr').innerHTML = "*please enter password";
                return false;   
                }
                else
                {
                document.getElementById('passerr').innerHTML = "";
                }
                var confirmPassword = document.getElementById('conpass').value;
                if (confirmPassword=="") {
                document.getElementById('conpasserr').innerHTML  = "*please enter conmform password";
                return false;   
                }
                else if (password != confirmPassword) {
                document.getElementById('conpasserr').innerHTML = "*password do not match";
                return false;   
                }
                else
                {
                document.getElementById('conpasserr').innerHTML = "";   
                }
                var age = document.getElementById('ag').value;
                if (age=="") {
                document.getElementById('agerr').innerHTML = "*please enter your age";
                return false;   
                }
                else{
                document.getElementById('agerr').innerHTML = "";  
                }
                var mobile = document.getElementById('ct').value;
                if (mobile==""){
                document.getElementById('cterr').innerHTML = "*please enter your contact no";
                return false;   
                }
                else
                {
                document.getElementById('cterr').innerHTML = "";    
                }   
                var address = document.getElementById('ad').value;
                if (address=="") {
                document.getElementById('aderr').innerHTML = "*please enter your address";
                return false;   
                }
                else
                {
                document.getElementById('aderr').innerHTML = "";    
                }
                }