<?php

                     $query = "SELECT* from events where status=1 and del=0 order by id desc LIMIT 1 ";
                                $result = mysqli_query($conn, $query);//runs the connection to dsatabase and then run the query
                                $previousreturn = mysqli_num_rows($result);
                        // 
                if($previousreturn ){
                        
                                while ($row = mysqli_fetch_assoc($result)){ 
                                        $previousptitle = $row["title"];
                                        $previousimg = $row["img"];
                                        $previouspdate = $row["pdate"];
                                        $previousptime = $row["ptime"];
                                        $previousmsg = $row["msg"];
                                        $previousid = $row["id"];
                                      }
                                      } 


                                          $query = "SELECT* from events where status=2 and del=0 order by id desc LIMIT 1 ";
                                $result = mysqli_query($conn, $query);//runs the connection to dsatabase and then run the query
                                $currentreturn = mysqli_num_rows($result);
                        // 
                if($currentreturn ){
                        
                                while ($row = mysqli_fetch_assoc($result)){ 
                                        $currentptitle = $row["title"];
                                        $currentpimg = $row["img"];
                                        $currentpdate = $row["pdate"];
                                        $currentptime = $row["ptime"];
                                        $currentpmsg = $row["msg"];
                                        $currentid = $row["id"];
                                      }
                                      } 

                                          $query = "SELECT* from events where status=3 and del=0 order by id desc LIMIT 1 ";
                                $result = mysqli_query($conn, $query);//runs the connection to dsatabase and then run the query
                                $nextreturn = mysqli_num_rows($result);
                        // 
                if($nextreturn ){
                        
                                while ($row = mysqli_fetch_assoc($result)){ 
                                        $nextptitle = $row["title"];
                                        $nextpimg = $row["img"];
                                        $nextpdate = $row["pdate"];
                                        $nextptime = $row["ptime"];
                                        $nextmsg = $row["msg"];
                                         
                                        $id = $row["id"];
                                      }
                                      }



















                              ?>