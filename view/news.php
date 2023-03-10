

<?php


                  if (!empty($jsonstring)) {

                    $i = 0;
                    $cabecera = 0;
                    $x = 10; # max cards
                    $max = 50;
                    echo '<div class="carousel-inner">';
                      foreach ($jsonstring as $post) {
                        if ((!empty($post['image'])) && $max > $i) {
                            
                        }else{
                            
                        }


                          if((!empty($post['image'])) && ($i < $x)){
                                  
                                  $originalDate = $post['published_at'];
                                  $newDate = date("Y-m-d", strtotime($originalDate));
                                  $i = 1 + $i;

                                  
                                  
                              if ($cabecera != 1){

                                if($i == 1){
                                  echo '<div class="carousel-item active">';
                                }else{
                                  echo '<div class="carousel-item">';
                                }
                                  echo '<div class="card-group p-3 bg-success fade-in-image">';
                                  echo '<div class="col-md-4 border-light shadow-lg d-flex align-items-center">';
                                  echo '<img src="' . $post['image'] . '" class="card-img  ">';
                                  echo '</div>';
                                  echo '<div class="card border-light shadow-lg col p-4  d-flex align-content-start flex-wrap">';                                          

                                  echo '<div class="">';
                                  echo '<h4 class="card-title"><a class="text-decoration-none" href="' . $post['url'] . '" target="_blank" rel="noopener noreferrer">' . $post['title'] . '</a></h4>';
                                  echo '<h5"><b>'. $post['source'] .'</b></h5></br>';
                                  echo '<div class="card-text">'. $post['description'] .'</div>';
                                  echo '<hr>';
                                  echo '<a href="#" class="categories badge bg-primary text-decoration-none" categoryId='. $post['category'] .'>'. $post['category'] .'</a>';
                                  echo '<a href="#" class="badge bg-info text-decoration-none">'. $post['language'] .'</a>';
                                  
                                  echo '<div>Date Published: ' . $newDate . '</div>';       
                                  echo '</div>';
                                  echo '</div>';
                                  echo '</div>';
                                  echo '</div>';
                                  if($i == 3){
                                    $cabecera = 1;
                                    $i = $i - 1;

                                    echo '<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">';
                                    echo '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
                                    echo '<span class="sr-only">Previous</span>';
                                    echo '</a>';
                                    echo '<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">';
                                    echo '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
                                    echo '<span class="sr-only">Next</span>';
                                    echo '</a>';
                                    echo '</div>';
                                    
                                    echo '</div>'; // fin jumbotron
                                    echo '</div>'; // fin container
                                    echo '<div class="card-group p-3">';

                                  }

                                  
                              }else{
                                
                                  echo '<div class="col-md-3 p-2 d-flex align-content-start flex-wrap fade-in-image">';
                                  echo '<div class="card shadow-lg border-success h-100">';
                                  echo '<img src="' . $post['image'] . '" class="card-img-top">'; 
                                  echo '<div class="card-body">';
                                  echo '<h5 class="card-title"><a class="text-decoration-none" href="' . $post['url'] . '" target="_blank" rel="noopener noreferrer">' . $post['title'] . '</a></h5>';
                                  echo '<h6"><b>'. $post['source'] .'</b></h6></br>';
                                  echo '<p><a data-toggle="collapse" href="#description'. $i .'" role="button" aria-expanded="false" aria-controls="collapseExample">More...</a></p>';
                                  echo '<div class="collapse" id="description'. $i .'">';
                                  echo '<div class="card-text">'. $post['description'] .'</div>';
                                  echo '</div>';
                                  echo '<hr>';
                                  echo '<a href="#" class="categories badge bg-primary text-decoration-none " categoryId='. $post['category'] .'>'. $post['category'] .'</a>';
                                  echo '<a href="#" class="badge bg-info text-decoration-none">'. $post['language'] .'</a>';
                                  echo '<hr>';
                                  echo '<div class="card-footer">Date Published: ' . $newDate . '</div>';                                               
                                  echo '</div>';
                                  echo '</div>';
                                  echo '</div>';
                              //  
                              }

                          }


                      }
                      echo '</div>';
                      
              }

?>