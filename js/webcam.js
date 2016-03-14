/**
 * Ha d'escistir un canvas nomnat amb id canvas, un video amb id video, una finestra que s'obriga amb id dialog, ha d'nar acompanyat del css de webcam
 * <div id="dialog" title="Pren foto" style="display:none;">
    <div class="webcam">
        <video autoplay id="video"></video>
        <div class="photoArea"></div>
        
    </div>
    </div>
    <canvas id="canvas" width='140' height='190' hidden"></canvas>
    <img onclick="obrir_dialog()" id="foto" width="140" height="190" style="border: 2px solid gray; text-align: center; color:red;" value="Imatge" alt="Polsa per a prendre imatge"/>
    
    
    
    <style type="text/css">
        .webcam {
            width: 260px;
            height: 196px;
            position: relative;
            border: 1px solid #d3d3d3;
            float: left;
            top: 2px;
        }
 
        .webcam video {
            width: 100%;
            height: 100%;
            position: absolute;
        }
 
        .webcam .photoArea {
            border: 2px dashed red;
            width: 140px;
            height: 190px;
            position: relative;
            margin: 0 auto;
            
        }
 
        canvas, img {
            float: left;
        }
 
        .controls {
            clear: both;
        }
        

    </style>
 * 
 */

        var localMediaStream = null;
        var video = document.querySelector('#video');
        var canvas = document.querySelector('#canvas');
        var boto = document.querySelector('#boto');
        
 
        /*Funció per a fer proves de funcionament*/
        
        function upload() {
            var base64 = canvas.toDataURL('image/jpeg');
            $.ajax({
            	  type: "POST",
            	  url: "./php/b.php",
            	  data: { 
            	    base64: base64
            	  }
            	});
        }
 
        /*Final de upload()*/
        
        function FesPhoto() {
            if (localMediaStream) {
                /*var ctx = canvas.getContext('2d');
                ctx.drawImage(video, 180, 80, 280, 380, 0, 0, 140, 190);
                document.querySelector('img').src = canvas.toDataURL('image/jpeg');*/
                
                canvas.getContext('2d').drawImage(video, 148, 0, 344, 480, 0, 0, 140, 190); //Tret per regles de 3
                var data = canvas.toDataURL('image/png');
                foto.setAttribute('src', data);
                //boto.setAttribute('hidden', '');
                
                }
        }
        
        
        navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia;
        window.URL = window.URL || window.webkitURL;
     
        function CapturaVideo() {
            	navigator.getUserMedia({ video: true }, function (stream) {
                video.src = window.URL.createObjectURL(stream);
                localMediaStream = stream;
            }, function (e) {
                console.log(e);
            });
        }
 
        function AturaVideo() {
            video.pause();
            localMediaStream.stop();
        }
        
        function obrir_dialog() {
        	CapturaVideo();
      	$( "#dialog" ).dialog({
          modal: true,
          buttons: {
              "Fes foto": function() {
            	  FesPhoto();
            	  AturaVideo();                  
              },
              
              
              "Repetix foto": function() {
            	  CapturaVideo();
              }
          },
          close: function() {
        	  	AturaVideo();  
        }
      	
      	}
      	
      	);
    }