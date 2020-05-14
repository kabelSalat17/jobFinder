<?php include 'inc/header.php'; ?>
    <div class="jumbotron">
        <h1>Find a Job now</h1>
        <form method="GET" action="index.php">
            <select name="category" class="form-control">
                <option value="0">Choose a category</option>
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category->id; ?>"><?php echo $category->name;?></option>
                <?php endforeach;?>
            </select>
            <br>
            <input type="submit" class="btn btn-secondary" value="SEARCH">
        </form>
    </div>
    <div class="jumbotron job">
        <div class="separator"></div>
    <h3 class="text-center"><?php echo $title;?></h3>
    <?php foreach($jobs as $job): ?>
        <div class="row job">
            <div class="col-md-10">
                <h4><?php echo $job->job_title; ?></h4>
                <p><?php echo $job->description; ?></p>     
            </div>
            <div class="col-md-2">
                <a class="btn btn-primary" href="job.php?id=<?php echo $job->id;?>">Details</a>
            </div>
        </div>  
    <?php endforeach; ?>    
    </div>
<?php include 'inc/footer.php'; ?>
