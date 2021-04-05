<?php
DEFINE('DB_USER', 'root');
DEFINE('DB_PASSWORD', '');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'bookapi');
//verify your database name
function getAllDetails($title)
{
    //connection object $conn holds the connection to the Database
    ($conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)) or die('Could not connect to MySQL: ' . mysqli_connect_error());
    $title = strtolower($title);

    $query = "select * from books where book_title='" . $title . "'";
    $result = mysqli_query($conn, $query);
    $movie_details = null;

    if ($result)
    {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            $movie_details['title'] = $row['book_title'];
            $movie_details['authors'] = $row['authors'];
            $movie_details['publisher'] = $row['publisher'];
            $movie_details['publication_year'] = $row['publication_year'];
            $movie_details['description'] = $row['description'];
            $movie_details['language'] = $row['language'];
            $movie_details['isbn'] = $row['isbn'];
            $movie_details['best_seller'] = $row['best_seller'];
            $movie_details['category'] = $row['category'];
            $movie_details['cover_photo'] = $row['cover_photo'];
            $movie_details['rating'] = $row['rating'];
            $movie_details['pdf'] = $row['pdf'];
        }
        return $movie_details;
    }
}

function getBookByYear($year)
{
    //connection object $conn holds the connection to the Database
    ($conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)) or die('Could not connect to MySQL: ' . mysqli_connect_error());

    $query = "select * from books where publication_year='" . $year . "'";
    $result = mysqli_query($conn, $query);
    $movie_details = null;

    if ($result)
    {
        $data = [];
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            $data[] = $row;
            $movie_details['title'] = $row['book_title'];
            $movie_details['authors'] = $row['authors'];
            $movie_details['publisher'] = $row['publisher'];
            $movie_details['publication_year'] = $row['publication_year'];
            $movie_details['description'] = $row['description'];
            $movie_details['language'] = $row['language'];
            $movie_details['isbn'] = $row['isbn'];
            $movie_details['best_seller'] = $row['best_seller'];
            $movie_details['category'] = $row['category'];
            $movie_details['cover_photo'] = $row['cover_photo'];
            $movie_details['rating'] = $row['rating'];
            $movie_details['pdf'] = $row['pdf'];
        }
        return $data;
    }
}

function getAllDetailsxml($title)
{
    //connection object $conn holds the connection to the Database
    ($conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)) or die('Could not connect to MySQL: ' . mysqli_connect_error());
    $title = strtolower($title);

    $query = "select * from books where book_title='" . $title . "'";
    $result = mysqli_query($conn, $query);
    $doc = new DomDocument('1.0', 'UTF-8');
    // create root node
    $root = $doc->createElement('books');
    $root = $doc->appendChild($root);
    if ($result)
    {
        $count1 = mysqli_num_rows($result);
            $child = $doc->createElement("count");
                $child = $root->appendChild($child);
                $value1 = $doc->createTextNode($count1);
                $value1 = $child->appendChild($value1);
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            $occ = $doc->createElement('book');
            $occ = $root->appendChild($occ);
            foreach ($row as $key => $value)
            {
                $child = $doc->createElement($key);
                $child = $occ->appendChild($child);
                $value1 = $doc->createTextNode($value);
                $value1 = $child->appendChild($value1);
            }

        }
        $doc->preserveWhiteSpace = false;
        $doc->formatOutput = true;
        $xml_string = $doc->saveXML();
        echo $xml_string;

    }
}

function getBookByYearxml($year)
{
    //connection object $conn holds the connection to the Database
    ($conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)) or die('Could not connect to MySQL: ' . mysqli_connect_error());

    $query = "select * from books where publication_year='" . $year . "'";
    $result = mysqli_query($conn, $query);
    $doc = new DomDocument('1.0', 'UTF-8');
    // create root node
    $root = $doc->createElement('books');
    $root = $doc->appendChild($root);
    if ($result)
    {
$count1 = mysqli_num_rows($result);
            $child = $doc->createElement("count");
                $child = $root->appendChild($child);
                $value1 = $doc->createTextNode($count1);
                $value1 = $child->appendChild($value1);
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            $occ = $doc->createElement('book');
            $occ = $root->appendChild($occ);
            foreach ($row as $key => $value)
            {
                $child = $doc->createElement($key);
                $child = $occ->appendChild($child);
                $value1 = $doc->createTextNode($value);
                $value1 = $child->appendChild($value1);
            }

        }
        $doc->preserveWhiteSpace = false;
        $doc->formatOutput = true;
        $xml_string = $doc->saveXML();
        echo $xml_string;

    }
}

function comparekey($key)
{
    //connection object $conn holds the connection to the Database
    ($conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)) or die('Could not connect to MySQL: ' . mysqli_connect_error());
    $query = "select * from apikeys";
    $result = mysqli_query($conn, $query);
    $movie_details = null;
    if ($result)
    {
        while ($row = mysqli_fetch_array($result))
        {
            if ($row["key_num"] == $key)
            {
                $movie_details['key'] = $row['key_num'];
            }
        }
        return $movie_details;
    }
}

function getBookByAthor($author)
{
    //connection object $conn holds the connection to the Database
    ($conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)) or die('Could not connect to MySQL: ' . mysqli_connect_error());
    $author = strtolower($author);

    $query = "select * from books where authors='" . $author . "'";
    $result = mysqli_query($conn, $query);
    $movie_details = null;

    if ($result)
    {
        $data = [];
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            $data[] = $row;
            $movie_details['title'] = $row['book_title'];
            $movie_details['authors'] = $row['authors'];
            $movie_details['publisher'] = $row['publisher'];
            $movie_details['publication_year'] = $row['publication_year'];
            $movie_details['description'] = $row['description'];
            $movie_details['language'] = $row['language'];
            $movie_details['isbn'] = $row['isbn'];
            $movie_details['best_seller'] = $row['best_seller'];
            $movie_details['category'] = $row['category'];
            $movie_details['cover_photo'] = $row['cover_photo'];
            $movie_details['rating'] = $row['rating'];
            $movie_details['pdf'] = $row['pdf'];
        }
        return $data;
    }
}

function getBookByAthorxml($author)
{
    //connection object $conn holds the connection to the Database
    ($conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)) or die('Could not connect to MySQL: ' . mysqli_connect_error());

    $query = "select * from books where authors='" . $author . "'";
    $result = mysqli_query($conn, $query);

    $doc = new DomDocument('1.0', 'UTF-8');
    // create root node
    $root = $doc->createElement('books');
    $root = $doc->appendChild($root);
    if ($result)
    {
$count1 = mysqli_num_rows($result);
            $child = $doc->createElement("count");
                $child = $root->appendChild($child);
                $value1 = $doc->createTextNode($count1);
                $value1 = $child->appendChild($value1);
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            $occ = $doc->createElement('book');
            $occ = $root->appendChild($occ);
            foreach ($row as $key => $value)
            {
                $child = $doc->createElement($key);
                $child = $occ->appendChild($child);
                $value1 = $doc->createTextNode($value);
                $value1 = $child->appendChild($value1);
            }

        }
        $doc->preserveWhiteSpace = false;
        $doc->formatOutput = true;
        $xml_string = $doc->saveXML();
        echo $xml_string;

    }
}

function getBookByCategory($category)
{
    //connection object $conn holds the connection to the Database
    ($conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)) or die('Could not connect to MySQL: ' . mysqli_connect_error());
    $category = strtolower($category);

    $query = "select * from books where category LIKE '%" . $category . "%'";
    $result = mysqli_query($conn, $query);
    $movie_details = null;

    if ($result)
    {
        $data = [];
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            $data[] = $row;
            $movie_details['title'] = $row['book_title'];
            $movie_details['authors'] = $row['authors'];
            $movie_details['publisher'] = $row['publisher'];
            $movie_details['publication_year'] = $row['publication_year'];
            $movie_details['description'] = $row['description'];
            $movie_details['language'] = $row['language'];
            $movie_details['isbn'] = $row['isbn'];
            $movie_details['best_seller'] = $row['best_seller'];
            $movie_details['category'] = $row['category'];
            $movie_details['cover_photo'] = $row['cover_photo'];
            $movie_details['rating'] = $row['rating'];
            $movie_details['pdf'] = $row['pdf'];
        }
        return $data;
    }
}

function getBookByCategoryxml($category)
{
    ($conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)) or die('Could not connect to MySQL: ' . mysqli_connect_error());

    $query = "select * from books where category LIKE '%" . $category . "%'";
    $result = mysqli_query($conn, $query);
    $doc = new DomDocument('1.0', 'UTF-8');
    // create root node
    $root = $doc->createElement('books');
    $root = $doc->appendChild($root);
    if ($result)
    {
        $count1 = mysqli_num_rows($result);
            $child = $doc->createElement("count");
                $child = $root->appendChild($child);
                $value1 = $doc->createTextNode($count1);
                $value1 = $child->appendChild($value1);
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            $occ = $doc->createElement('book');
            $occ = $root->appendChild($occ);
            foreach ($row as $key => $value)
            {
                $child = $doc->createElement($key);
                $child = $occ->appendChild($child);
                $value1 = $doc->createTextNode($value);
                $value1 = $child->appendChild($value1);
            }

        }
        $doc->preserveWhiteSpace = false;
        $doc->formatOutput = true;
        $xml_string = $doc->saveXML();
        echo $xml_string;

    }
}

function searchxml($search)
{
    ($conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)) or die('Could not connect to MySQL: ' . mysqli_connect_error());

    $query = "select * from books where book_title LIKE '%" . $search . "%'";
    $result = mysqli_query($conn, $query);
    $doc = new DomDocument('1.0', 'UTF-8');
    // create root node
    $root = $doc->createElement('books');
    $root = $doc->appendChild($root);
    if ($result)
    {
        $count1 = mysqli_num_rows($result);
            $child = $doc->createElement("count");
                $child = $root->appendChild($child);
                $value1 = $doc->createTextNode($count1);
                $value1 = $child->appendChild($value1);
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            $occ = $doc->createElement('book');
            $occ = $root->appendChild($occ);
            foreach ($row as $key => $value)
            {
                $child = $doc->createElement($key);
                $child = $occ->appendChild($child);
                $value1 = $doc->createTextNode($value);
                $value1 = $child->appendChild($value1);
            }

        }
        $doc->preserveWhiteSpace = false;
        $doc->formatOutput = true;
        $xml_string = $doc->saveXML();
        echo $xml_string;

    }
}
function authorxml($search)
{
    ($conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)) or die('Could not connect to MySQL: ' . mysqli_connect_error());

    $query = "select * from books where authors LIKE '%" . $search . "%'";
    $result = mysqli_query($conn, $query);
    $doc = new DomDocument('1.0', 'UTF-8');
    // create root node
    $root = $doc->createElement('books');
    $root = $doc->appendChild($root);
    if ($result)
    {
        $count1 = mysqli_num_rows($result);
            $child = $doc->createElement("count");
                $child = $root->appendChild($child);
                $value1 = $doc->createTextNode($count1);
                $value1 = $child->appendChild($value1);
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            $occ = $doc->createElement('book');
            $occ = $root->appendChild($occ);
            foreach ($row as $key => $value)
            {
                $child = $doc->createElement($key);
                $child = $occ->appendChild($child);
                $value1 = $doc->createTextNode($value);
                $value1 = $child->appendChild($value1);

            }

        }
        $doc->preserveWhiteSpace = false;
        $doc->formatOutput = true;
        $xml_string = $doc->saveXML();
        echo $xml_string;

    }
}
function search($search)
{
    //connection object $conn holds the connection to the Database
    ($conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)) or die('Could not connect to MySQL: ' . mysqli_connect_error());
    $search = strtolower($search);

    $query = "select * from books where book_title LIKE '%" . $search . "%'";
    $result = mysqli_query($conn, $query);
    $movie_details = null;

    if ($result)
    {
        $data = [];
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            $data[] = $row;
            $movie_details['title'] = $row['book_title'];
            $movie_details['authors'] = $row['authors'];
            $movie_details['publisher'] = $row['publisher'];
            $movie_details['publication_year'] = $row['publication_year'];
            $movie_details['description'] = $row['description'];
            $movie_details['language'] = $row['language'];
            $movie_details['isbn'] = $row['isbn'];
            $movie_details['best_seller'] = $row['best_seller'];
            $movie_details['category'] = $row['category'];
            $movie_details['cover_photo'] = $row['cover_photo'];
            $movie_details['rating'] = $row['rating'];
            $movie_details['pdf'] = $row['pdf'];
        }
        return $data;
    }
}
function author($search)
{
    //connection object $conn holds the connection to the Database
    ($conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)) or die('Could not connect to MySQL: ' . mysqli_connect_error());
    $search = strtolower($search);

    $query = "select * from books where authors LIKE '%" . $search . "%'";
    $result = mysqli_query($conn, $query);
    $movie_details = null;

    if ($result)
    {
        $data = [];
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            $data[] = $row;
            $movie_details['title'] = $row['book_title'];
            $movie_details['authors'] = $row['authors'];
            $movie_details['publisher'] = $row['publisher'];
            $movie_details['publication_year'] = $row['publication_year'];
            $movie_details['description'] = $row['description'];
            $movie_details['language'] = $row['language'];
            $movie_details['isbn'] = $row['isbn'];
            $movie_details['best_seller'] = $row['best_seller'];
            $movie_details['category'] = $row['category'];
            $movie_details['cover_photo'] = $row['cover_photo'];
            $movie_details['rating'] = $row['rating'];
            $movie_details['pdf'] = $row['pdf'];
        }
        return $data;
    }
}
function authorcategoryxml($name)
{
    $pieces = explode("&", $name);
    ($conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)) or die('Could not connect to MySQL: ' . mysqli_connect_error());

    $query = "select * from books where authors LIKE '%" . $pieces[0] . "%' and category LIKE '%" . $pieces[1] . "%'";
    $result = mysqli_query($conn, $query);
    $doc = new DomDocument('1.0', 'UTF-8');
    // create root node
    $root = $doc->createElement('books');
    $root = $doc->appendChild($root);
    if ($result)
    {
$count1 = mysqli_num_rows($result);
            $child = $doc->createElement("count");
                $child = $root->appendChild($child);
                $value1 = $doc->createTextNode($count1);
                $value1 = $child->appendChild($value1);
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            $occ = $doc->createElement('book');
            $occ = $root->appendChild($occ);
            foreach ($row as $key => $value)
            {
                $child = $doc->createElement($key);
                $child = $occ->appendChild($child);
                $value1 = $doc->createTextNode($value);
                $value1 = $child->appendChild($value1);
            }

        }
        $doc->preserveWhiteSpace = false;
        $doc->formatOutput = true;
        $xml_string = $doc->saveXML();
        echo $xml_string;

    }
}
function authorcategory($name)
{
    $pieces = explode("&", $name);
    //connection object $conn holds the connection to the Database
    ($conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)) or die('Could not connect to MySQL: ' . mysqli_connect_error());

    $query = "select * from books where authors LIKE '%" . $pieces[0] . "%' and category LIKE '%" . $pieces[1] . "%'";
    $result = mysqli_query($conn, $query);
    $movie_details = null;

    if ($result)
    {
        $data = [];
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            $data[] = $row;
            $movie_details['title'] = $row['book_title'];
            $movie_details['authors'] = $row['authors'];
            $movie_details['publisher'] = $row['publisher'];
            $movie_details['publication_year'] = $row['publication_year'];
            $movie_details['description'] = $row['description'];
            $movie_details['language'] = $row['language'];
            $movie_details['isbn'] = $row['isbn'];
            $movie_details['best_seller'] = $row['best_seller'];
            $movie_details['category'] = $row['category'];
            $movie_details['cover_photo'] = $row['cover_photo'];
            $movie_details['rating'] = $row['rating'];
            $movie_details['pdf'] = $row['pdf'];
        }
        return $data;
    }
}
function authoryearxml($name)
{
    $pieces = explode("&", $name);
    ($conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)) or die('Could not connect to MySQL: ' . mysqli_connect_error());

    $query = "select * from books where authors LIKE '%" . $pieces[0] . "%' and publication_year= '" . $pieces[1] . "'";
    $result = mysqli_query($conn, $query);
    $doc = new DomDocument('1.0', 'UTF-8');
    // create root node
    $root = $doc->createElement('books');
    $root = $doc->appendChild($root);
    if ($result)
    {
$count1 = mysqli_num_rows($result);
            $child = $doc->createElement("count");
                $child = $root->appendChild($child);
                $value1 = $doc->createTextNode($count1);
                $value1 = $child->appendChild($value1);
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            $occ = $doc->createElement('book');
            $occ = $root->appendChild($occ);
            foreach ($row as $key => $value)
            {
                $child = $doc->createElement($key);
                $child = $occ->appendChild($child);
                $value1 = $doc->createTextNode($value);
                $value1 = $child->appendChild($value1);
            }

        }
        $doc->preserveWhiteSpace = false;
        $doc->formatOutput = true;
        $xml_string = $doc->saveXML();
        echo $xml_string;

    }
}
function syearxml($name)
{
    $pieces = explode("&", $name);
    ($conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)) or die('Could not connect to MySQL: ' . mysqli_connect_error());

    $query = "select * from books where book_title like'%" . $pieces[0] . "%' and publication_year= '" . $pieces[1] . "'";
    $result = mysqli_query($conn, $query);
    $doc = new DomDocument('1.0', 'UTF-8');
    // create root node
    $root = $doc->createElement('books');
    $root = $doc->appendChild($root);
    if ($result)
    {
$count1 = mysqli_num_rows($result);
            $child = $doc->createElement("count");
                $child = $root->appendChild($child);
                $value1 = $doc->createTextNode($count1);
                $value1 = $child->appendChild($value1);
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            $occ = $doc->createElement('book');
            $occ = $root->appendChild($occ);
            foreach ($row as $key => $value)
            {
                $child = $doc->createElement($key);
                $child = $occ->appendChild($child);
                $value1 = $doc->createTextNode($value);
                $value1 = $child->appendChild($value1);
            }

        }
        $doc->preserveWhiteSpace = false;
        $doc->formatOutput = true;
        $xml_string = $doc->saveXML();
        echo $xml_string;

    }
}
function authoryear($name)
{
    $pieces = explode("&", $name);
    //connection object $conn holds the connection to the Database
    ($conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)) or die('Could not connect to MySQL: ' . mysqli_connect_error());

    $query = "select * from books where authors LIKE '%" . $pieces[0] . "%' and publication_year= '" . $pieces[1] . "'";
    $result = mysqli_query($conn, $query);
    $movie_details = null;

    if ($result)
    {
        $data = [];
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            $data[] = $row;
            $movie_details['title'] = $row['book_title'];
            $movie_details['authors'] = $row['authors'];
            $movie_details['publisher'] = $row['publisher'];
            $movie_details['publication_year'] = $row['publication_year'];
            $movie_details['description'] = $row['description'];
            $movie_details['language'] = $row['language'];
            $movie_details['isbn'] = $row['isbn'];
            $movie_details['best_seller'] = $row['best_seller'];
            $movie_details['category'] = $row['category'];
            $movie_details['cover_photo'] = $row['cover_photo'];
            $movie_details['rating'] = $row['rating'];
            $movie_details['pdf'] = $row['pdf'];
        }
        return $data;
    }
}
function syear($name)
{
    $pieces = explode("&", $name);
    //connection object $conn holds the connection to the Database
    ($conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)) or die('Could not connect to MySQL: ' . mysqli_connect_error());

    $query = "select * from books where book_title like'%" . $pieces[0] . "%' and publication_year= '" . $pieces[1] . "'";
    $result = mysqli_query($conn, $query);
    $movie_details = null;

    if ($result)
    {
        $data = [];
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            $data[] = $row;
            $movie_details['title'] = $row['book_title'];
            $movie_details['authors'] = $row['authors'];
            $movie_details['publisher'] = $row['publisher'];
            $movie_details['publication_year'] = $row['publication_year'];
            $movie_details['description'] = $row['description'];
            $movie_details['language'] = $row['language'];
            $movie_details['isbn'] = $row['isbn'];
            $movie_details['best_seller'] = $row['best_seller'];
            $movie_details['category'] = $row['category'];
            $movie_details['cover_photo'] = $row['cover_photo'];
            $movie_details['rating'] = $row['rating'];
            $movie_details['pdf'] = $row['pdf'];
        }
        return $data;
    }
}

?>
