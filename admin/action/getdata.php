<?php
session_start();
include('../../database.inc.php');

// paginaton 
$limit = 10;
$page = 0;
$output = '';
if (isset($_POST['page'])) {
    $page = $_POST['page'];
} else {
    $page = 1;
}

$start_from = ($page - 1) * $limit;

$searchQuery = " ";
if (isset($_POST['input'])) {
    $searchQuery = " and (reply like '%" . $_POST['input'] . "%' OR question like '%" . $_POST['input'] . "%') ";
} else {
    $searchQuery = " ";
}

$query = mysqli_query($con, "select * from chatbot_hints WHERE 1 " . $searchQuery . " ORDER by ID DESC LIMIT " . $start_from . ", " . $limit);

$output .= '<table id="tablee" class="table table-striped table-light table-hover" style="width:100%">
<tr>
    <th>ID</th>
    <th>Question</th>
    <th>Reply</th>
    <th>Action</th>
</tr>
';

if (mysqli_num_rows($query) > 0) {
    $html = '';
    $i = 1;
    while ($row = mysqli_fetch_assoc($query)) {

        $output .= '<tr  class="hintRemove_' . $row['id'] . '">
        <td>' . $row['id'] . '</td>
        <td>' . $row["question"] . '</td>
        <td>' . $row['reply'] . '</td>
        <td>  <input type="hidden" class="delete_id_value" id="delete_id_value" value="' . $row['id'] . '">   <a href="javascript:void(0)" class="deleteHint"><i class="fa fa-trash text-danger" aria-hidden="true"></i> </td>
        </tr>';
    }
} else {

    $output = '<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong>Opps!</strong> No Records Found
   
  </div>';
}

// pagination code 
$query = mysqli_query($con, "select * from chatbot_hints WHERE 1 " . $searchQuery . " ORDER by ID DESC");
$total_records = mysqli_num_rows($query);
$total_pages = ceil($total_records / $limit);

$output .= '<ul class="pagination">';

if ($page > 1) {
    $previous = $page - 1;
    $output .= '<li class="page-item"><span class="page-link">First Page</span></li>';
    $output .= '<li class="page-item" id="' . $previous . '"><span class="page-link"><i class="fa fa-arrow-left"></i></span></li>';
}

for ($i = 1; $i <= $total_pages; $i++) {
    $active_class = "";
    if ($i == $page) {
        $active_class = "active";
    }
    $output .= '<li class="page-item ' . $active_class . '" id="' . $i . '"><span class="page-link">' . $i . '</span></li>';
}

if ($page < $total_pages) {
    $page++;
    $output .= '<li class="page-item" id="' . $page . '"><span class="page-link"><i class="fa fa-arrow-right"></i></span></li>';

    $output .= '<li class="page-item" id="' . $total_pages . '"><span class="page-link">Last Page</span></li>';
}

$output .= '</ul>';
echo $output;
