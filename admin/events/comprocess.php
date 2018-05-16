<?php

                    include "../conn.php";
                    $com = $_POST['comparison'];
                    
                    $insert = "INSERT INTO comparison(value)VALUES('$com')";
                    $result = $conn->query($insert);

                         if ($result){
                            ?>           

                            <header class="doc-header">

                            <div class="user-widget top-right">
                            <div class="input-block">
                                <label for="giveTitle">Enter Idea</label>
                                <input id="giveTitle" type="text" name="title">
                            </div> 
                     
                            <div class="input-block">
                                <label for="writeDetails">Write to describe...</label>
                                <textarea id="writeDetails" name="details"></textarea>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-lg"><i class="fa fa-hashtag"></i>POST </button>
                            </div>
                            </div>
                            </header>
                            



                            <?php
                            
                         }
                         else{
                            echo "Please try again" .$conn->error;
                         }
                    ?>