
     <div class="content_dashboard">
         <div class="title">Admin / Client</div>
 

         <div class="searchProduct">
            <form action="" method="post">
               <input type="text" placeholder="nom">
               <input type="email" placeholder="email">
            </form>
         </div>

          <div class="produit_content">
               <table>
                  <tr>
                     <th>Nom</th>
                     <th>Prénom</th>
                     <th>Email</th>
                     <th>Tel</th>
                     <th>Image</th>
                     <th>Action</th>
                  </tr>
                  <tr>
                     <td>ali</td>
                     <td>ali</td>
                     <td>sth@gmail.com</td>
                     <td>0698765309</td>
                     <td><img src="images/clientLogo.png" alt="" width="40" height="40" srcset=""></td>
                     <td><a class="delete" href="?client&id_delCl"><img src="images/delete.png" width="30" height="30" alt="" srcset=""></a></td>
                  </tr>
                  <tr>
                     <td>hassan</td>
                     <td>hassan</td>
                     <td>kj@gmail.com</td>
                     <td>0698765302</td>
                     <td><img src="images/clientLogo.png" alt="" width="40" height="40" srcset=""></td>
                     <td><a class="delete" href="?client&id_delCl"><img src="images/delete.png" width="30" height="30" alt="" srcset=""></a></td>
                  </tr>
                  <tr>
                     <td>ahmed</td>
                     <td>ahmed</td>
                     <td>ols@gmail.com</td>
                     <td>0698764309</td>
                     <td><img src="images/clientLogo.png" alt="" width="40" height="40" srcset=""></td>
                     <td><a class="delete" href="?client&id_delCl"><img src="images/delete.png" width="30" height="30" alt="" srcset=""></a></td>
                  </tr>
                  <tr>
                     <td>mohmed</td>
                     <td>mohmed</td>
                     <td>pm@gmail.com</td>
                     <td>0698798309</td>
                     <td><img src="images/clientLogo.png" alt="" width="40" height="40" srcset=""></td>
                     <td><a class="delete" href="?client&id_delCl"><img src="images/delete.png" width="30" height="30" alt="" srcset=""></a></td>
                  </tr>
                  <tr>
                     <td>khalid</td>
                     <td>khalid</td>
                     <td>sm@gmail.com</td>
                     <td>0698723309</td>
                     <td><img src="images/clientLogo.png" alt="" width="40" height="40" srcset=""></td>
                     <td><a class="delete" href="?client&id_delCl"><img src="images/delete.png" width="30" height="30" alt="" srcset=""></a></td>
                  </tr>
                
                 
               </table>

               <!-- pagination -->

                <div class="pagination">
                   <nav>
                        <a href="?client&page=prev"   <?php if(isset($_GET["page"]) && $_GET["page"]=='prev'){ echo 'style="background-color:#D57E7E;color: white;"'; } ?>>Avant</a>
                        <a href="?client&page=1"  <?php if(isset($_GET["page"]) && $_GET["page"]==1){ echo 'style="background-color:#D57E7E;color: white;"'; }  elseif(!isset($_GET["page"]) && empty($_GET["page"])){ echo 'style="background-color:#D57E7E;color: white;"';}?>  >1</a>
                        <a href="?client&page=2"   <?php if(isset($_GET["page"]) && $_GET["page"]==2){ echo 'style="background-color:#D57E7E;color: white;"'; } ?>>2</a>
                        <a href="?client&page=3"   <?php if(isset($_GET["page"]) && $_GET["page"]==3){ echo 'style="background-color:#D57E7E;color: white;"'; } ?>>3</a>
                        <a href="?client&page=next"   <?php if(isset($_GET["page"]) && $_GET["page"]=='next'){ echo 'style="background-color:#D57E7E;color: white;"'; } ?>>Après</a>
                   </nav>
                </div>

          </div>
     </div>






