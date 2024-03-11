<?php require 'partials/head.php' ?>

<body>
   <div class=" bg-gradient">
      <!-- navbar  -->
      <?php require 'partials/nav.php' ?>
      <div class="container mt-5">
         <div class="jumbotron text-center">
            <h1>My First Bootstrap Page</h1>
            <p>Resize this responsive page to see the effect!</p>
         </div>
         <div class="row p-3 mt-5">
            <div class="col-3 ">
               <div class="box ">
                  <ul style=" background-color:#072a4d;" class="list-group mt-5 mb-5">
                     <li class=" p-3 list-group-item" style=" background-color:#072a4d;">
                        <a class=" text-white" style="text-decoration-line: none; cursor: pointer;" href="#">
                           First item
                        </a>
                     </li>
                     <li class=" p-3 list-group-item" style=" background-color:#072a4d;">

                        <a class=" text-white" style="text-decoration-line: none; cursor: pointer;" href="#">
                           First item
                        </a>
                     </li>
                     <li class=" p-3 list-group-item" style=" background-color:#072a4d;">

                        <a class=" text-white" style="text-decoration-line: none; cursor: pointer;" href="#">
                           First item
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-9">
               <div class="box ">

                  <table class="table table-bordered mt-5 mb-5 ">
                     <thead>
                        <tr>
                           <th class="text-white" style="background-color: #072a4d;">Firstname</th>
                           <th class="text-white" style="background-color: #072a4d;">Lastname</th>
                           <th class="text-white" style="background-color: #072a4d;">Email</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td class="text-white" style="background-color: #072a4d;">John</td>
                           <td class="text-white" style="background-color: #072a4d;">Doe</td>
                           <td class="text-white" style="background-color: #072a4d;">john@example.com</td>
                        </tr>
                        <tr>
                           <td class="text-white" style="background-color: #072a4d;">Mary</td>
                           <td class="text-white" style="background-color: #072a4d;">Moe</td>
                           <td class="text-white" style="background-color: #072a4d;">mary@example.com</td>
                        </tr>
                        <tr>
                           <td style="background-color: #072a4d;" class="text-white">July</td>
                           <td style="background-color: #072a4d;" class="text-white">Dooley</td>
                           <td style="background-color: #072a4d;" class="text-white">july@example.com</td>
                        </tr>
                     </tbody>
                  </table>

               </div>

            </div>
         </div>
      </div>
   </div>
</body>
<?php require 'partials/foot.php' ?>