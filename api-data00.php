<?php
     
            $search = $_POST["category"];
           // print_r($search);
           //  $search = "business";
                    $queryString = http_build_query([
                        'access_key' => '0290ca8c586868f5d64f623b0fed4dd2',
                     //   'keywords' => 'Wall street -wolf', // the word "wolf" will be
                       'categories' => $search,
                        'sort' => 'popularity',
                        'countries' => 'us, gb, ca, mx',
                        'languages' => 'en, es',
                        'limit' => 100,
                       // 'source' => 'cnn, bbc, fox',
                       // 'published_at' => '2023-02-06',
                    ]);
                    
                    $ch = curl_init(sprintf('%s?%s', 'http://api.mediastack.com/v1/news', $queryString));
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    
                    $json = curl_exec($ch);
                    
                    curl_close($ch);
                    
                    $apiResult = json_decode($json, true);
                    $jsonstring = $apiResult['data'];


                  include 'news.php';
                   
?>