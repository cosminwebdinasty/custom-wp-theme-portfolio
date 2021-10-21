
<div class="container-fluid hidden-xs fdesktop" style="background-color:#26262a;">

        <div class="container">
 
        </div>
</div>
   
<div class="container-fluid hidden-xs cdesktop" style="background-color: #212124; margin:0; padding:0;">
    <footer >
        <div class="row text-center">
            <div class="col-md-12 white pt-3 text-cener">
                <p>Copyright &copy; 2021</p>
            </div>
        </div>
    </footer>
</div>

<script src="https://use.fontawesome.com/1744f3f671.js"></script>
<script>
'use strict'
            
//Page cursors

document.getElementsByTagName("body")[0].addEventListener("mousemove", function(n) {
        t.style.left = n.clientX + "px", 
		t.style.top = n.clientY + "px", 
		e.style.left = n.clientX + "px", 
		e.style.top = n.clientY + "px", 
		i.style.left = n.clientX + "px", 
		i.style.top = n.clientY + "px"
    });
    var t = document.getElementById("cursor"),
        e = document.getElementById("cursor2"),
        i = document.getElementById("cursor3");
    function n(t) {
        e.classList.add("hover"), i.classList.add("hover")
    }
    function s(t) {
        e.classList.remove("hover"), i.classList.remove("hover")
    }
    s();
    for (var r = document.querySelectorAll(".hover-target"), a = r.length - 1; a >= 0; a--) {
        o(r[a])
    }
    function o(t) {
        t.addEventListener("mouseover", n), t.addEventListener("mouseout", s)
    }        
</script>


<?php wp_footer(); ?>
</body>
</html>


