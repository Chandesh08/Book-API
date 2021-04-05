<?php
class getdeleteevent
{
    public function getAllRecords($conn) {
        $query = "SELECT * FROM books";
        $result = $conn->query($query) or die("Error in query1".$conn->error);
        return $result;
    }

    public function deleteRecordById($conn,$recordId) {
        $query = "DELETE FROM books WHERE book_id='$recordId'";
        $result = $conn->query($query) or die("Error in query2".$conn->error);
        return $result;
    }
}