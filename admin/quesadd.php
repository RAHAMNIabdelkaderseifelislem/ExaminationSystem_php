<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
	include_once ($filepath.'/../classes/Exam.php');
	$exm = new Exam();
?>
<style>
.adminpanel{width: 480px;color: #999;margin: 20px auto 0;padding: 30px;border: 1px solid #ddd;}	

</style>

<?php 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$addQue = $exm->addQuestions($_POST);
	}
	//Get Total
	$total = $exm->getTotalRows();
	$next = $total+1;

 ?>

<div class="main">
<h1>Admin Panel - Add Question</h1>

<?php 
if (isset($addQue)) {
	echo $addQue;
}

 ?>

<div class="adminpanel">
	
	<form action="" method="post">
		<table>
			<tr>
				<td>Question No</td>
				<td>:</td>
				<td><input type="number" value="<?php 
					if(isset($next)){
						echo $next;
					}

					 ?>"  name="quesNo"></td>
			</tr>

			<tr>
				<td>Question</td>
				<td>:</td>
				<td><input type="text"  name="ques" placeholder="Enter Question..." required></td>
			</tr>

			<tr>
				<td>Choice One</td>
				<td>:</td>
				<td><input type="text"  name="ans1" placeholder="Enter Question..." required></td>
			</tr>

			<tr>
				<td>Choice Two</td>
				<td>:</td>
				<td><input type="text"  name="ans2" placeholder="Enter Question..." required></td>
			</tr>

			<tr>
				<td>Choice Three</td>
				<td>:</td>
				<td><input type="text"  name="ans3" placeholder="Enter Question..." required></td>
			</tr>

			<tr>
				<td>Choice Four</td>
				<td>:</td>
				<td><input type="text"  name="ans4" placeholder="Enter Question..." required></td>
			</tr>

			<tr>
				<td>Correct No.</td>
				<td>:</td>
				<td><input type="number"  name="rightAns" required></td>
			</tr>

			<tr>
				
				<td colspan="3" align="center">
					<input type="submit" value="Add A Question">
				</td>
			</tr>

		</table>


	</form>

</div>

	
</div>
<?php include 'inc/footer.php'; ?>