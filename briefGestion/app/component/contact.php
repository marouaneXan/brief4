
     <div class="content_dashboard">
         <div class="title">Admin / Contact</div>

         <div class="searchProduct">
            <form action="" method="post">
               <input type="email" placeholder="email">
            </form>
         </div>
 
          <div class="produit_content">
               <table>
                  <tr>
                     <th>Email</th>
                     <th>Message</th>
                     <th>Date</th>
                     <th>Action</th>
                  </tr>
                  <tr>
                     <td>nom</td>
                     <td class="message">this a message this a message this a message this a message this a message this a message this a message this a message </td>
                     <td>favouri</td>
                     <td><a class="supprimer" href="?contact&id_delM"><img src="images/delete.png" width="30" height="30" alt="" srcset=""></a></td>
                  </tr>
                  <tr>
                     <td>nom</td>
                     <td class="message">this a message this a message this a message this a message this a message this a message this a message this a message </td>
                     <td>favouri</td>
                     <td><a class="supprimer" href="?contact&id_delM"><img src="images/delete.png" width="30" height="30" alt="" srcset=""></a></td>
                  </tr>
                  <tr>
                     <td>nom</td>
                     <td class="message">this a message this a message this a message this a message this a message this a message this a message this a message </td>
                     <td>favouri</td>
                     <td><a class="supprimer" href="?contact&id_delM"><img src="images/delete.png" width="30" height="30" alt="" srcset=""></a></td>
                  </tr>
                  <tr>
                     <td>nom</td>
                     <td class="message">this a message this a message this a message this a message this a message this a message this a message this a message </td>
                     <td>favouri</td>
                     <td><a class="supprimer" href="?contact&id_delM"><img src="images/delete.png" width="30" height="30" alt="" srcset=""></a></td>
                  </tr>
                  <tr>
                     <td>nom</td>
                     <td class="message">this a message this a message this a message this a message this a message this a message this a message this a message </td>
                     <td>favouri</td>
                     <td><a class="supprimer" href="?contact&id_delM"><img src="images/delete.png" width="30" height="30" alt="" srcset=""></a></td>
                  </tr>
                  <tr>
                     <td>nom</td>
                     <td class="message">this a message this a message this a message this a message this a message this a message this a message this a message </td>
                     <td>favouri</td>
                     <td><a class="supprimer" href="?contact&id_delM"><img src="images/delete.png" width="30" height="30" alt="" srcset=""></a></td>
                  </tr>
                
                 
               </table>

               <!-- pagination -->

                <div class="pagination">
                   <nav>
                        <a href="?contact&page=prev"   <?php if(isset($_GET["page"]) && $_GET["page"]=='prev'){ echo 'style="background-color:#D57E7E;color: white;"'; } ?>>Avant</a>
                        <a href="?contact&page=1"  <?php if(isset($_GET["page"]) && $_GET["page"]==1){ echo 'style="background-color:#D57E7E;color: white;"'; }  elseif(!isset($_GET["page"]) && empty($_GET["page"])){ echo 'style="background-color:#D57E7E;color: white;"';}?> >1</a>
                        <a href="?contact&page=2"   <?php if(isset($_GET["page"]) && $_GET["page"]==2){ echo 'style="background-color:#D57E7E;color: white;"'; } ?>>2</a>
                        <a href="?contact&page=3"   <?php if(isset($_GET["page"]) && $_GET["page"]==3){ echo 'style="background-color:#D57E7E;color: white;"'; } ?>>3</a>
                        <a href="?contact&page=next"   <?php if(isset($_GET["page"]) && $_GET["page"]=='next'){ echo 'style="background-color:#D57E7E;color: white;"'; } ?>>Après</a>
                   </nav>
                </div>

                <br><br><br><br>

          </div>
     </div>





