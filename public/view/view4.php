<?php require_once("../../private/initialize.php");?>
<?php 
require_login();

$matnumber=$_SESSION['matnumber'];
$student_result=find_cg4_by_matnumber($matnumber);


?>
<?php include(SHARED_PATH . '/include_header.php');?>
<div class="container-fluid">
    <div class="row "> 
        <div class="col-md-6 col-lg-6 col-sm-6">
<div id="attributes">
	<table class="table table-striped table-bordered table-hover table-condensed">
        <tr class="text-center">
            <th>SecondSemester Year two</th>
        </tr>
    </table>
    <table class="table table-striped table-bordered table-hover table-condensed">
    <tr>
            <th>Course</th>
            <th>Score</th>
            <th>Grade</th>
            <th>Unit</th>
        </tr>
        <tr class="text-info"><td><?php echo $student_result['course1']?></td> <td><?php echo $student_result['score1']?></td><td><?php echo $student_result['grade1']?></td>
            <td><?php echo $student_result['unit1']?></td>
        </tr>

		<tr class="text-info"><td><?php echo $student_result['course2']?></td> <td><?php echo $student_result['score2']?></td><td><?php echo $student_result['grade2']?></td>
            <td><?php echo $student_result['unit2']?></td>
        </tr>

        <tr class="text-info"><td><?php echo $student_result['course3']?></td> <td><?php echo $student_result['score3']?></td><td><?php echo $student_result['grade3']?></td>
            <td><?php echo $student_result['unit3']?></td>
        </tr>

        <tr class="text-info"><td><?php echo $student_result['course4']?></td> <td><?php echo $student_result['score4']?></td><td><?php echo $student_result['grade4']?></td>
            <td><?php echo $student_result['unit4']?></td>
        </tr>

        <tr class="text-info"><td><?php echo $student_result['course5']?></td> <td><?php echo $student_result['score5']?></td><td><?php echo $student_result['grade5']?></td>
            <td><?php echo $student_result['unit5']?></td>
        </tr>

        <tr class="text-info"><td><?php echo $student_result['course6']?></td> <td><?php echo $student_result['score6']?></td><td><?php echo $student_result['grade6']?></td>
            <td><?php echo $student_result['unit6']?></td>
        </tr>

        <tr class="text-info"><td><?php echo $student_result['course7']?></td> <td><?php echo $student_result['score7']?></td><td><?php echo $student_result['grade7']?></td>
            <td><?php echo $student_result['unit7']?></td>
        </tr>

        <tr class="text-info"><td><?php echo $student_result['course8']?></td> <td><?php echo $student_result['score8']?></td><td><?php echo $student_result['grade8']?></td>
            <td><?php echo $student_result['unit8']?></td>
        </tr>

        <tr class="text-info"><td><?php echo $student_result['course9']?></td> <td><?php echo $student_result['score9']?></td><td><?php echo $student_result['grade9']?></td>
            <td><?php echo $student_result['unit9']?></td>
        </tr>

        <tr class="text-info"><td><?php echo $student_result['course10']?></td> <td><?php echo $student_result['score10']?></td><td><?php echo $student_result['grade10']?></td>
            <td><?php echo $student_result['unit10']?></td>
        </tr>

        <tr class="text-info"><td><?php echo $student_result['course11']?></td> <td><?php echo $student_result['score11']?></td><td><?php echo $student_result['grade11']?></td>
            <td><?php echo $student_result['unit11']?></td>
        </tr>

        <tr class="text-info"><td><?php echo $student_result['course12']?></td> <td><?php echo $student_result['score12']?></td><td><?php echo $student_result['grade12']?></td>
            <td><?php echo $student_result['unit12']?></td>
        </tr>

        <tr class="text-info"><td><?php echo $student_result['course13']?></td> <td><?php echo $student_result['score13']?></td><td><?php echo $student_result['grade13']?></td>
            <td><?php echo $student_result['unit13']?></td>
        </tr>

        <tr class="text-info"><td><?php echo $student_result['course14']?></td> <td><?php echo $student_result['score14']?></td><td><?php echo $student_result['grade14']?></td>
            <td><?php echo $student_result['unit14']?></td>
        </tr>

        <tr class="text-info"><td><?php echo $student_result['course15']?></td> <td><?php echo $student_result['score15']?></td><td><?php echo $student_result['grade15']?></td>
            <td><?php echo $student_result['unit15']?></td>
        </tr>

        <tr class="text-info"><td><?php echo $student_result['course16']?></td> <td><?php echo $student_result['score16']?></td><td><?php echo $student_result['grade16']?></td>
            <td><?php echo $student_result['unit16']?></td>
        </tr>

        <tr class="text-info"><td><?php echo $student_result['course17']?></td> <td><?php echo $student_result['score17']?></td><td><?php echo $student_result['grade17']?></td>
            <td><?php echo $student_result['unit17']?></td>
        </tr>

        <tr class="text-info"><td><?php echo $student_result['course18']?></td> <td><?php echo $student_result['score18']?></td><td><?php echo $student_result['grade18']?></td>
            <td><?php echo $student_result['unit18']?></td>
        </tr>

        <tr class="text-info"><td><?php echo $student_result['course19']?></td> <td><?php echo $student_result['score19']?></td><td><?php echo $student_result['grade19']?></td>
            <td><?php echo $student_result['unit19']?></td>
        </tr>

        <tr class="text-info"><td><?php echo $student_result['course20']?></td> <td><?php echo $student_result['score20']?></td><td><?php echo $student_result['grade20']?></td>
            <td><?php echo $student_result['unit20']?></td>
        </tr>
            
        
        
    
    </table>
</div>
</div>
</div>
</div>
        

<?php include(SHARED_PATH . '/include_footer.php');?>