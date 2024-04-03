<?php 
$child_of_parent = $this->db->get_where('student' , array(
    'student_id' => $student_id
))->result_array();
foreach ($child_of_parent as $row):
?>
<hr />
<div class="label label-primary pull-right" style="font-size: 14px;">
    <i class="entypo-user"></i> <?php echo $row['name'];?>
</div>
<br><br>
<div class="row">
    <div class="col-md-12">

        <div class="tabs-vertical-env">

            <ul class="nav tabs-vertical">
                <?php 
                $exams = $this->db->get('exam')->result_array();
                foreach ($exams as $row2):
                ?>
                <li class="">
                    <a href="#<?php echo $row2['exam_id'];?>" data-toggle="tab">
                        <?php echo $row2['name'];?>  <small>( <?php echo $row2['date'];?> )</small>
                    </a>
                </li>
                <?php endforeach;?>
            </ul>

            <div class="tab-content">

            <?php 
            foreach ($exams as $exam):
                $this->db->where('exam_id' , $exam['exam_id']);
                $this->db->where('student_id' , $student_id);
                $marks = $this->db->get('mark')->result_array();
                
                // Calculate the total marks for the student
                $totalMarks = 0;
                foreach ($marks as $mark) {
                    $totalMarks += $mark['exam_one'] + $mark['exam_two'] + $mark['mid_exam'] + $mark['final_exam'];
                }
            ?>
                <div class="tab-pane" id="<?php echo $exam['exam_id'];?>">
                    <table class="table table-bordered table-hover table-striped responsive">
                        <thead>
                            <tr>
                                <th width="15%"><?php echo ('Class');?></th>
                                <th><?php echo ('Subject');?></th>
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
                        <?php foreach ($marks as $mark):
                            // You can use the precalculated $totalMarks here
                            ?>
                            <tr>
                                <td>
                                    <?php echo $this->db->get_where('class' , array(
                                        'class_id' => $mark['class_id']
                                    ))->row()->name;?>
                                </td>
                                <td>
                                    <?php echo $this->db->get_where('subject' , array(
                                        'subject_id' => $mark['subject_id']
                                    ))->row()->name;?>
                                </td>
                                <td>
                                    <?php echo $row['name'];?>
                                </td>
                                <td>
                                    <input type="number" value="<?php echo $mark['exam_one']; ?>" name="exam_one"
                                           class="form-control" min="0" max="10" readonly/>
                                </td>
                                <td>
                                    <input type="number" value="<?php echo $mark['exam_two']; ?>" name "exam_two"
                                           class="form-control" min="0" max="10" readonly/>
                                </td>
                                <td>
                                    <input type="number" value="<?php echo $mark['mid_exam']; ?>" name="mid_exam"
                                           class="form-control" min="0" max="30" readonly/>
                                </td>
                                <td>
                                    <input type="number" value="<?php echo $mark['final_exam']; ?>" name="final_exam"
                                           class="form-control" min="0" max="50" readonly/>
                                </td>
                                <td>
                                    <input type="number" value="<?php echo $totalMarks; ?>" name="mark_total"
                                           class="form-control" readonly/>
                                </td>
                                <td>
                                    <textarea name="comment" class="form-control" readonly><?php echo $mark['comment']; ?> </textarea>
                                </td>
                             </tr>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            <?php endforeach;?>

            </div>

        </div>  

    </div>
</div>
<?php endforeach;?>
