<?php
header("Content-Type:application/json");
include "bookFunctions.php";

if (!empty($_GET['key'])) {
    $key = comparekey($_GET['key']);
    if (!empty($key)) {
        if (!empty($_GET['f'])) {
            if ($_GET['f'] == 'xml') {
                if (!empty($_GET['i']) && !empty($_GET['c'])) {
                    $movie = authorcategoryxml($_GET['i']."&".$_GET['c']);
                }elseif (!empty($_GET['i']) && !empty($_GET['p'])) {
                    $movie = authoryearxml($_GET['i']."&".$_GET['p']);
                }elseif (!empty($_GET['s']) && !empty($_GET['p'])) {
                    $movie = syearxml($_GET['s']."&".$_GET['p']);
                }elseif (!empty($_GET['t'])) {
                    $movie = getAllDetailsxml($_GET['t']);
                } elseif (!empty($_GET['p'])) {
                    $movies = getBookByYearxml($_GET['p']);
                }elseif(!empty($_GET['a'])){
                    $movies = getBookByAthorxml($_GET['a']);
                }elseif(!empty($_GET['c'])){
                    $movies = getBookByCategoryxml($_GET['c']);
                }elseif(!empty($_GET['s'])){
                    $movies = searchxml($_GET['s']);
                }elseif(!empty($_GET['i'])){
                    $movies = authorxml($_GET['i']);
                }else {
                    deliver_response('400', 'Bad Request', null);
                }
            } elseif ($_GET['f'] == 'json') {
                if (!empty($_GET['i']) && !empty($_GET['c'])) {
                    $movie = authorcategory($_GET['i']."&".$_GET['c']);
                    if (empty($movie)) {
                        deliver_response('404', 'No Books Found', null);
                    } else {
                        deliver_response('200', 'Books found', addslashes(count($movie)), $movie);
                    }
                }elseif (!empty($_GET['i']) && !empty($_GET['p'])) {
                    $movie = authoryear($_GET['i']."&".$_GET['p']);
                    if (empty($movie)) {
                        deliver_response('404', 'No Books Found', null);
                    } else {
                        deliver_response('200', 'Books found', addslashes(count($movie)), $movie);
                    }
                }elseif (!empty($_GET['s']) && !empty($_GET['p'])) {
                    $movie = syear($_GET['s']."&".$_GET['p']);
                    if (empty($movie)) {
                        deliver_response('404', 'No Books Found', null);
                    } else {
                        deliver_response('200', 'Books found', addslashes(count($movie)), $movie);
                    }
                }elseif (!empty($_GET['t'])) {
                    $movie = getAllDetails($_GET['t']);
                    if (empty($movie)) {
                        deliver_response('404', 'No Books Found', null);
                    } else {
                        deliver_response('200', 'Books found', addslashes(count($movie)), $movie);
                    }
                } elseif (!empty($_GET['p'])) {
                    $movies = getBookByYear($_GET['p']);
                    if (empty($movies)) {
                        deliver_response('404', 'No Books Found', null);
                    } else {
                        deliver_response('200', 'Books found', addslashes(count($movies)), $movies);
                    }
                }elseif (!empty($_GET['a'])) {
                    $movies = getBookByAthor($_GET['a']);
                    if (empty($movies)) {
                        deliver_response('404', 'No Books Found', null);
                    } else {
                        deliver_response('200', 'Books found', addslashes(count($movies)), $movies);
                    }
                }elseif (!empty($_GET['c'])) {
                    $movies = getBookByCategory($_GET['c']);
                    if (empty($movies)) {
                        deliver_response('404', 'No Books Found', null);
                    } else {
                        deliver_response('200', 'Books found', addslashes(count($movies)), $movies);
                    }
                }elseif (!empty($_GET['s'])) {
                    $movies = search($_GET['s']);
                    if (empty($movies)) {
                        deliver_response('404', 'No Books Found', null);
                    } else {
                        deliver_response('200', 'Books found', addslashes(count($movies)), $movies);
                    }
                }elseif (!empty($_GET['i'])) {
                    $movies = author($_GET['i']);
                    if (empty($movies)) {
                        deliver_response('404', 'No Books Found', null);
                    } else {
                        deliver_response('200', 'Books found', addslashes(count($movies)), $movies);
                    }
                } else {
                    deliver_response('400', 'Bad Request', null);
                }
            } else {
                deliver_response('400', 'Bad Request', null);
            }
        } else {
            if (!empty($_GET['i']) && !empty($_GET['c'])) {
                    $movie = authorcategory($_GET['i']."&".$_GET['c']);
                    if (empty($movie)) {
                        deliver_response('404', 'No Books Found', null);
                    } else {
                        deliver_response('200', 'Books found', addslashes(count($movie)), $movie);
                    }
                }elseif (!empty($_GET['i']) && !empty($_GET['p'])) {
                    $movie = authoryear($_GET['i']."&".$_GET['p']);
                    if (empty($movie)) {
                        deliver_response('404', 'No Books Found', null);
                    } else {
                        deliver_response('200', 'Books found', addslashes(count($movie)), $movie);
                    }
                }elseif (!empty($_GET['s']) && !empty($_GET['p'])) {
                    $movie = syear($_GET['s']."&".$_GET['p']);
                    if (empty($movie)) {
                        deliver_response('404', 'No Books Found', null);
                    } else {
                        deliver_response('200', 'Books found', addslashes(count($movie)), $movie);
                    }
                }elseif (!empty($_GET['t'])) {
                $movie = getAllDetails($_GET['t']);

                if (empty($movie)) {
                    deliver_response('404', 'No Books Found', null);
                } else {
                    deliver_response('200', 'Books found', addslashes(count($movie)), $movie);
                }
            } elseif (!empty($_GET['p'])) {
                $movies = getBookByYear($_GET['p']);
                if (empty($movies)) {
                    deliver_response('404', 'No Books Found', null);
                } else {
                    deliver_response('200', 'Books found', addslashes(count($movies)), $movies);
                }
            }elseif (!empty($_GET['a'])) {
                    $movies = getBookByAthor($_GET['a']);
                    if (empty($movies)) {
                        deliver_response('404', 'No Books Found', null);
                    } else {
                        deliver_response('200', 'Books found', addslashes(count($movies)), $movies);
                    }
                }elseif (!empty($_GET['c'])) {
                    $movies = getBookByCategory($_GET['c']);
                    if (empty($movies)) {
                        deliver_response('200', 'No Books Found', null);
                    } else {
                        deliver_response('200', 'Books found', addslashes(count($movies)), $movies);
                    }
                }elseif (!empty($_GET['s'])) {
                    $movies = search($_GET['s']);
                    if (empty($movies)) {
                        deliver_response('404', 'No Books Found', null);
                    } else {
                        deliver_response('200', 'Books found', addslashes(count($movies)), $movies);
                    }
                }elseif (!empty($_GET['i'])) {
                    $movies = author($_GET['i']);
                    if (empty($movies)) {
                        deliver_response('404', 'No Books Found', null);
                    } else {
                        deliver_response('200', 'Books found', addslashes(count($movies)), $movies);
                    }
                } else {
                deliver_response('400', 'Bad Request', null);
            }
        }
    } else {
        deliver_response('400', 'Invalid API Key', null);
    }
} else {
    deliver_response('400', 'No API key provided', null);
}

function deliver_response($status, $statusMessage, $count, $data)
{
    header("HTTP/1.1 $status $statusMessage");
    $response['status'] = $status;
    $response['status_message'] = $statusMessage;
    $response['Count'] = $count;
    $response['data'] = $data;

    $json_response = json_encode($response, JSON_UNESCAPED_SLASHES);
    echo $json_response;
}
?>
    