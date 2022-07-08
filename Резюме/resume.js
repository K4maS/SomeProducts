var galery = ["chsultanov.jpg", "my_photo.jpg", "list_image_mint20.png"];
            img.src = galery[0];
            var x = 0;
           
            forward_btn.onclick = function(){
            x ++;
            if (x >= galery.length){
                x = 0;   
            }
            img.src = galery[x];
            }
            back_btn.onclick =function(){
            x --;  
            if (x< 0){
            x = galery.length-1;
            }
            img.src = galery[x];
            }