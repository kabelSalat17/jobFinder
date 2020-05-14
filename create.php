<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;

if(isset($_POST['submit'])){
	//if true create Data Array
	$data = array();
	$data['job_title'] = $_POST['job_title'];
	$data['company'] = $_POST['company'];
	$data['category_id'] = $_POST['category'];
	$data['description'] = $_POST['description'];
	$data['location'] = $_POST['location'];
	$data['salary'] = $_POST['salary'];
	$data['contact_user'] = $_POST['contact_user'];
	$data['contact_email'] = $_POST['contact_email'];

    //when job has been added
	if($job->create($data)){
		redirect('index.php', 'Your job has been added', 'success');
	} else {
		redirect('index.php', 'Opss...Something went wrong.Try again please.', 'error');
	}
}

$template = new Template('templates/job-create.php');

$template->categories = $job->getCategories();

echo $template;