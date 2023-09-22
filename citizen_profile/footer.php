<div class="footer-wrap pd-20 mb-20 card-box">
    DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
</div>
</div>
</div>
<!-- js -->
<script src="vendors/scripts/core.js"></script>
<script src="vendors/scripts/script.min.js"></script>
<script src="vendors/scripts/process.js"></script>
<script src="vendors/scripts/layout-settings.js"></script>
<script> 
     function logout() { 
         Swal.fire({ 
             title: 'Logout', 
             text: "Are you sure want to logout?", 
             icon: 'question', 
             showClass: { 
                 popup: 'animated fadeInDown faster' 
             }, 
             hideClass: { 
                 popup: 'animated zoomOut faster' 
             }, 
             showCancelButton: true, 
             confirmButtonColor: '#3085d6', 
             cancelButtonColor: '#d33', 
             confirmButtonText: 'Yes!' 
         }).then((result) => { 
             if (result.isConfirmed) { 
                 Swal.fire({ 
                     title: "Logging out...", 
                     timer: 1500, 
                     timerProgressBar: true, 
                     showConfirmButton: false, 
                     allowOutsideClick: false, 
                     allowEscapeKey: false, 
                     didClose: () => { 
                         window.location.replace('../php/logout.php'); 
                     } 
                 }); 
                 Swal.showLoading(); 
             } 
  
         }); 
     } 
 </script>
 
</body>

</html>