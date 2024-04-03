<div class="row">
	<div class="col-md-12">
    
    	<!------CONTROL TABS START------>
		<ul class="nav nav-tabs bordered">
			<li class="active">
            	<a href="#list" data-toggle="tab"><i class="entypo-menu"></i> 
					<?php echo ('Manage Marks');?>
                    	</a></li>
		</ul>
    	<!------CONTROL TABS END----->
        
	
            <!----TABLE LISTING STARTS-->
            <div class="tab-pane  <?php if(!isset($edit_data) && !isset($personal_profile) && !isset($academic_result) )echo 'active';?>" id="list">
				<center>
                <?php echo form_open(base_url() . 'index.php?student/marks');?>
                <table border="0" cellspacing="0" cellpadding="0" class="table table-bordered table-hover table-striped">
                	<tr>
                        <td><?php echo ('Select Exam');?></td>
                        <td><?php echo ('Select Subject');?></td>
                        <td>&nbsp;</td>
                	</tr>
                	<tr>
                        <td>
                        	<select name="exam_id" class="form-control"  style="float:left;">
                                <option value=""><?php echo ('Select an exam');?></option>
                                <?php 
                                $exams = $this->db->get('exam')->result_array();
                                foreach($exams as $row):
                                ?>
                                    <option value="<?php echo $row['exam_id'];?>"
                                        <?php if($exam_id == $row['exam_id'])echo 'selected';?>>
                                            <?php echo ('Class');?> <?php echo $row['name'];?></option>
                                <?php
                                endforeach;
                                ?>
                            </select>
                        </td>
                        <td>
                        	<!-----SELECT SUBJECT ACCORDING TO SELECTED CLASS-------->
                                <select name="subject_id" class="form-control" >
                                    <option value=""><?php echo ('Select Subject');?></option>
                                    <?php 
                                    $subjects	=	$this->crud_model->get_subjects_by_class($class_id); 
                                    foreach($subjects as $row2): ?>
                                    <option value="<?php echo $row2['subject_id'];?>"
                                        <?php if(isset($subject_id) && $subject_id == $row2['subject_id'])
                                                echo 'selected="selected"';?>><?php echo $row2['name'];?>
                                    </option>
                                    <?php endforeach;?>
                                    
                                    
                                </select> 
                        </td>
                        <td>
                         <input type="hidden" name="class_id" value="<?php echo $class_id;?>" />
                        	<input type="hidden" name="operation" value="selection" />
                    		<input type="submit" value="<?php echo ('Manage Marks');?>" class="btn btn-info" />
                        </td>
                	</tr>
                </table>
                </form>
                </center>
                
                
                <br /><br />
                
                
                <?php if($exam_id >0 && $class_id >0 && $subject_id >0 ):?>
                <?php 
						////CREATE THE MARK ENTRY ONLY IF NOT EXISTS////
						$students	=	$this->crud_model->get_students($class_id);
						foreach($students as $row):
							$verify_data	=	array(	'exam_id' => $exam_id ,
														'class_id' => $class_id ,
														'subject_id' => $subject_id , 
														'student_id' => $row['student_id']);
							$query = $this->db->get_where('mark' , $verify_data);
							
							if($query->num_rows() < 1)
								$this->db->insert('mark' , $verify_data);
						 endforeach;
				?>
                <table class="table table-bordered table-hover table-striped" >
                    <thead>
                        <tr>
                        <td><?php echo ('Student'); ?></td>
                        <td>(Test One)</td>
                        <td>(Test Two)</td>
                        <td>(Mid Exam)</td>
                        <td>(Final Exam)</td>
                        <td>(Total Out Of 100)</td>
                        <td><?php echo ('Comment'); ?></td>
                        </tr>
                    </thead>
                    <tbody>
                    	
                        <?php 
						$students	=	$this->db->get_where('student' , array('student_id' => $student_id))->result_array();
						foreach($students as $row):
						
							$verify_data	=	array(	'exam_id' => $exam_id ,
														'class_id' => $class_id ,
														'subject_id' => $subject_id , 
														'student_id' => $row['student_id']);
														
							$query = $this->db->get_where('mark' , $verify_data);							 
							$marks	=	$query->result_array();
							foreach($marks as $row2):
                                // Calculate total marks
                                $totalMarks = $row2['exam_one'] + $row2['exam_two'] + $row2['mid_exam'] + $row2['final_exam'];
							?>
                            <tr>
								<td>
									<?php echo $row['name'];?>
								</td>
								<td>
                                    <input type="number" value="<?php echo $row2['exam_one']; ?>" name="exam_one"
                                           class="form-control" min="0" max="10" readonly/>
                                </td>
                                <td>
                                    <input type="number" value="<?php echo $row2['exam_two']; ?>" name="exam_two"
                                           class="form-control" min="0" max="10" readonly/>
                                </td>
                                <td>
                                    <input type="number" value="<?php echo $row2['mid_exam']; ?>" name="mid_exam"
                                           class="form-control" min="0" max="30" readonly/>
                                </td>
                                <td>
                                    <input type="number" value="<?php echo $row2['final_exam']; ?>" name="final_exam"
                                           class="form-control" min="0" max="50" readonly/>
                                </td>
                                <td>
                                    <input type="number" value="<?php echo $totalMarks; ?>" name="mark_total"
                                           class="form-control" readonly/>
                                </td>
                                <td>
                                    <textarea name="comment" class="form-control" readonly><?php echo $row2['comment']; ?> </textarea>
                                </td>
							 </tr>
                         	<?php 
							endforeach;
						 endforeach;
						 ?>
                     </tbody>
                  </table>
            
            <?php endif;?>
			</div>
            <!----TABLE LISTING ENDS-->
            
		</div>
	</div>
</div>
<script>
    function generateComment(totalMark) {
        // Implement your comment logic here based on the total mark
        if (totalMark >= 90) {
            return 'Excellent';
        } else if (totalMark >= 80) {
            return 'Very Good';
        } else if (totalMark >= 70) {
            return 'Good';
        } else if (totalMark >= 60) {
            return 'Okay';
        } else {
            return 'Needs Improvement';
        }
    }

    document.addEventListener('input', function (e) {
        if (e.target.name === 'exam_one' || e.target.name === 'exam_two' || e.target.name === 'mid_exam' || e.target.name === 'final_exam') {
            calculateMarkTotal(e.target);
        }
    });

    function calculateMarkTotal(targetInput) {
        const row = targetInput.closest('tr');
        const examOne = parseFloat(row.querySelector('input[name="exam_one"]').value) || 0;
        const examTwo = parseFloat(row.querySelector('input[name="exam_two"]').value) || 0;
        const midExam = parseFloat(row.querySelector('input[name="mid_exam"]').value) || 0;
        const finalExam = parseFloat(row.querySelector('input[name="final_exam"]').value) || 0;

        const markTotal = examOne + examTwo + midExam + finalExam;
        const markTotalInput = row.querySelector('input[name="mark_total"]');
        markTotalInput.value = markTotal;

        // Generate and set the comment based on the mark_total
        const commentInput = row.querySelector('textarea[name="comment"]');
        commentInput.value = generateComment(markTotal);
        sortMarksAscending();
    }

    function sortMarksAscending() {
    const rows = document.querySelectorAll('tr[data-rankable]');
    const rankableRows = Array.from(rows);

    // Create an array to store mark_total values as integers
    const marks = rankableRows.map((row) => parseInt(row.querySelector('input[name="mark_total"]').value) || 0);

    marks.sort((a, b) => a - b); // Sort marks in ascending order

    // Update ranks based on the sorted marks
    rankableRows.forEach((row, index) => {
        row.querySelector('input[name="rank"]').value = index + 1;
    });
}
</script>
<script type="text/javascript">
  function show_subjects(class_id)
  {
      for(i=0;i<=100;i++)
      {

          try
          {
              document.getElementById('subject_id_'+i).style.display = 'none' ;
	  		  document.getElementById('subject_id_'+i).setAttribute("name" , "temp");
          }
          catch(err){}
      }
      document.getElementById('subject_id_'+class_id).style.display = 'block' ;
	  document.getElementById('subject_id_'+class_id).setAttribute("name" , "subject_id");
  }

</script> 