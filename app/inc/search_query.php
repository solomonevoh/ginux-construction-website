<?php
if (isset($_POST['SearchQuery'])){
$searchInput = $_POST['SearchQuery'];

//clean sent query
$cleanedSearch = htmlspecialchars($searchInput);

	//split searched string into array.
	$searchedFor = explode(' ', $cleanedSearch);

	//query database
	$sql = "SELECT * FROM help_subcat WHERE MATCH (sub_title, content) AGAINST ('$cleanedSearch')";
	// SELECT * FROM help_sub WHERE MATCH (content) AGAINST ('How to reset password' IN BOOLEAN MODE));
	//Loop through array.
	// foreach ($searchedFor as $keyword)
	// {
	// 	$i++;

		//if search item equals one word.
	// 	if($i == 1){
	// 	$sql .= " sub_title LIKE '%".$cleanedSearch."%' OR content LIKE '%".$keyword."%' ";
	// }
		// else
		//
		// $sql .= " OR content LIKE '%".$cleanedSearch."%' ";
		//}

}

	include ("conn.php"); //database connection.

 /*Query to get content when user starts typing into search tab*/

		$query = mysqli_query ($conn, $sql);
		$numrows = mysqli_num_rows($query);
		$id=0;
		if ($numrows > 0){

		while($rows = mysqli_fetch_array($query)){
				$id++;
							$title = $rows['sub_title'];
							$content = $rows['content'];

							echo '
							<div class="accordion" id="accordion'.$id.'">
							<div class="accordion-group">
							<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion '.$id.'" href="#collapseInner'.$id.'">
							<span class ="NewTitle lead" style="color: #4274D4 !important;"><span class="fa  fa-circle" style="font-size: 10px;"></span> '.$title.'</a>
							</div>
							<div id="collapseInner'.$id.'" class="accordion-body collapse">
							<div class="accordion-inner"> '.$content.'
							<input type="hidden" class="totalSearch" value="'.$numrows.'" name="id" />


							</div>
							</div>
							</div>

							</div>
							</div>


								</div>
							</div>';
							}



				}

				else {
					echo '<span class="text-muted">No result found for <i><b>'.$searchInput.'</b></i></span>';
				}
	exit();

?>
