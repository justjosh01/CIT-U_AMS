<?php

function upload_images($image){




	$var = '<span class="mailbox-attachment-icon has-img">
                  
                  <a href="#" class="d-block mb-4 h-100">
                         
                        <img id="'.$image['id'].'" src="'.URL_ROOT.UPLOADS.$image['name'].'" alt="" class="img-fluid box-shadow" width="100%"  >
                    </a>

                  <!-- The Modal -->
                  <div id="myModal" class="modal">
                    <span class="openx">&times;</span>
                    <img class="modal-contentx" id="img01">
                    <div id="caption"  ></div>
                  </div>

                  <script>
                  // Get the modal
                  var modal = document.getElementById("myModal");

                  // Get the image and insert it inside the modal - use its "alt" text as a caption
                  var img = document.getElementById("'.$image['id'].'");
                  var modalImg = document.getElementById("img01");
                  var captionText = document.getElementById("caption");
                  img.onclick = function(){
                      modal.style.display = "block";
                      modalImg.src = this.src;
                      captionText.innerHTML = this.alt;
                  }

                  // Get the <span> element that closes the modal
                  var span = document.getElementsByClassName("openx")[0];

                  // When the user clicks on <span> (x), close the modal
                  span.onclick = function() { 
                      modal.style.display = "none";
                  }
                  </script>

                  </span>';

    return $var;              
}