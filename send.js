const forme=document.querySelector("form");
const btn=document.querySelector(".submit");
const error=document.querySelector(".error");

 
forme.onsubmit=(e)=>{
   e.preventDefault();
           }
 
 
 btn.onclick=()=>{
    
    let xhr="";
    if(window.XMLHttpRequest){
        xhr=new XMLHttpRequest();
    }
    else{
    xhr=new ActiveXObject("Microsoft.XMLHTTP");
    }
      
      xhr.onreadystatechange=()=>{
         if(xhr.readyState===XMLHttpRequest.DONE){
              if(xhr.status===200){
                     
                     let data=xhr.responseText;
                     
                     if(data == "success"){
                     
                           error.style.backgroundColor="#D6F1C6";
                           error.style.color="white";
                           error.style.color="1px solid #1fae51";
                           error.textContent=data;
                           error.style.display="block";
                           btn.textContent="sent successfully";
                           btn.style.fontSize="15px";
                         
                          
                         }
                     else{
                         error.textContent=data;
                         error.style.display="block";
                         btn.innerHTML="Try again";
                         btn.style.fontSize="0.8em";
                         }
                }    //STATUS ===200
             } //DONE
                     else{
                     btn.innerHTML="sending message";
                     btn.style.color="white";
                     }//DONE
                           
         }
           
     xhr.open("POST","email-send.php",true);
     let formdata=new FormData(forme);
     xhr.send(formdata);
    }