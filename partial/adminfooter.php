
<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2017 &copy; Online Quiz Admin. </div>
</div>

<!--end-Footer-part-->

<script src="lib/js/excanvas.min.js"></script> 
<script src="lib/js/jquery.min.js"></script> 
<script src="lib/js/jquery.ui.custom.js"></script> 
<script src="lib/js/bootstrap.min.js"></script> 
<script src="lib/js/jquery.peity.min.js"></script> 
<script src="lib/js/fullcalendar.min.js"></script> 
<script src="lib/js/matrix.js"></script> 
<script src="lib/js/jquery.gritter.min.js"></script> 
<script src="lib/js/matrix.interface.js"></script> 
<script src="lib/js/jquery.validate.js"></script> 
<script src="lib/js/matrix.form_validation.js"></script> 
<script src="lib/js/jquery.wizard.js"></script> 
<script src="lib/js/jquery.uniform.js"></script> 
<script src="lib/js/select2.min.js"></script> 
<script src="lib/js/matrix.popover.js"></script> 
<script src="lib/js/jquery.dataTables.min.js"></script> 
<script src="lib/js/matrix.tables.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.17.1/axios.min.js"></script>
<script src="lib/js/vue.js"></script>
<script src="lib/js/event-js.js"></script>

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
