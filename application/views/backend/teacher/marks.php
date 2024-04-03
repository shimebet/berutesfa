<div class="row">
    <div class="col-md-12">

        <!-- CONTROL TABS START -->
        <ul class="nav nav-tabs bordered">
            <li class="active">
                <a href="#list" data-toggle="tab"><i class="entypo-menu"></i>
                    <?php echo ('Manage Marks'); ?>
                </a>
            </li>
        </ul>
        <!-- CONTROL TABS END -->


        <!-- TABLE LISTING STARTS -->
        <div class="tab-pane  <?php if (!isset($edit_data) && !isset($personal_profile) && !isset($academic_result)) echo 'active'; ?>" id="list">
            <center>
                <?php echo form_open(base_url() . 'index.php?teacher/marks'); ?>
                <table border="0" cellspacing="0" cellpadding="0" class="table table-bordered table-hover table-striped">
                    <tr>
                        <td><?php echo ('Select exam'); ?></td>
                        <td><?php echo ('Select class'); ?></td>
                        <td><?php echo ('Select subject'); ?></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <select name="exam_id" class="form-control" style="float:left;">
                                <option value=""><?php echo ('Select an exam'); ?></option>
                                <?php
                                $exams = $this->db->get('exam')->result_array();
                                foreach ($exams as $row) :
                                ?>
                                    <option value="<?php echo $row['exam_id']; ?>"
                                        <?php if ($exam_id == $row['exam_id']) echo 'selected'; ?>>
                                        <?php echo ('Class'); ?> <?php echo $row['name']; ?></option>
                                <?php
                                endforeach;
                                ?>
                            </select>
                        </td>
                        <td>
                            <select name="class_id" class="form-control" onchange="show_subjects(this.value)" style="float:left;">
                                <option value=""><?php echo ('Select a class'); ?></option>
                                <?php
                                $classes = $this->db->get('class')->result_array();
                                foreach ($classes as $row) :
                                ?>
                                    <option value="<?php echo $row['class_id']; ?>"
                                        <?php if ($class_id == $row['class_id']) echo 'selected'; ?>>
                                        Class <?php echo $row['name']; ?></option>
                                <?php
                                endforeach;
                                ?>
                            </select>
                        </td>
                        <td>
                            <!-- SELECT SUBJECT ACCORDING TO SELECTED CLASS -->
                            <?php
                            $classes = $this->crud_model->get_classes();
                            foreach ($classes as $row) :
                            ?>

                                <select name="<?php if ($class_id == $row['class_id']) echo 'subject_id'; else echo 'temp'; ?>"
                                        id="subject_id_<?php echo $row['class_id']; ?>"
                                        style="display:<?php if ($class_id == $row['class_id']) echo 'block'; else echo 'none'; ?>;"
                                        class="form-control" style="float:left;">

                                    <option value="">Subject of class <?php echo $row['name']; ?></option>

                                    <?php
                                    $subjects = $this->crud_model->get_subjects_by_class($row['class_id']);
                                    foreach ($subjects as $row2) :
                                    ?>
                                        <option value="<?php echo $row2['subject_id']; ?>"
                                            <?php if (isset($subject_id) && $subject_id == $row2['subject_id'])
                                                echo 'selected="selected"'; ?>><?php echo $row2['name']; ?>
                                        </option>
                                    <?php endforeach; ?>


                                </select>
                            <?php endforeach; ?>


                            <select name="temp" id="subject_id_0"
                                    style="display:<?php if (isset($subject_id) && $subject_id > 0) echo 'none'; else echo 'block'; ?>;"
                                    class="form-control" style="float:left;">
                                <option value="">Select a class first</option>
                            </select>
                        </td>
                        <td>
                            <input type="hidden" name="operation" value="selection"/>
                            <input type="submit" value="<?php echo ('Manage marks'); ?>" class="btn btn-info"/>
                        </td>
                    </tr>
                </table>
                </form>
            </center>


            <br/><br/>

            <?php if ($exam_id > 0 && $class_id > 0 && $subject_id > 0) : ?>
                <?php
                ////CREATE THE MARK ENTRY ONLY IF NOT EXISTS////
                $students = $this->crud_model->get_students($class_id);
                foreach ($students as $row) :
                    $verify_data = array('exam_id' => $exam_id,
                        'class_id' => $class_id,
                        'subject_id' => $subject_id,
                        'student_id' => $row['student_id']);
                    $query = $this->db->get_where('mark', $verify_data);

                    if ($query->num_rows() < 1)
                        $this->db->insert('mark', $verify_data);
                endforeach;
                ?>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                        <td><?php echo ('Student'); ?></td>
                        <td>(Test One)</td>
                        <td>(Test Two)</td>
                        <td>(Mid Exam)</td>
                        <td>(Final Exam)</td>
                        <td>(Total Out Of 100)</td>
                        <td><?php echo ('Comment'); ?></td>
                        
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    $students = $this->crud_model->get_students($class_id);
                    foreach ($students as $row) :
                        $verify_data = array('exam_id' => $exam_id,
                            'class_id' => $class_id,
                            'subject_id' => $subject_id,
                            'student_id' => $row['student_id']);
                        $query = $this->db->get_where('mark', $verify_data);
                        $marks = $query->result_array();
                        foreach ($marks as $row2) :
                            // Calculate total marks
                            $totalMarks = $row2['exam_one'] + $row2['exam_two'] + $row2['mid_exam'] + $row2['final_exam'];
                            ?>
                            <?php echo form_open(base_url() . 'index.php?teacher/marks'); ?>
                            <tr>
                                <td>
                                    <?php echo $row['name']; ?>
                                </td>
                                <td>
                                    <input type="number" value="<?php echo $row2['exam_one']; ?>" name="exam_one"
                                           class="form-control" min="0" max="10"/>
                                </td>
                                <td>
                                    <input type="number" value="<?php echo $row2['exam_two']; ?>" name="exam_two"
                                           class="form-control" min="0" max="10"/>
                                </td>
                                <td>
                                    <input type="number" value="<?php echo $row2['mid_exam']; ?>" name="mid_exam"
                                           class="form-control" min="0" max="30"/>
                                </td>
                                <td>
                                    <input type="number" value="<?php echo $row2['final_exam']; ?>" name="final_exam"
                                           class="form-control" min="0" max="50"/>
                                </td>
                                <td>
                                    <input type="number" value="<?php echo $totalMarks; ?>" name="mark_total"
                                           class="form-control" readonly/>
                                </td>
                                <td>
                                    <textarea name="comment" class="form-control"><?php echo $row2['comment']; ?></textarea>
                                </td>
                                <td>
                                    <input type="hidden" name="mark_id" value="<?php echo $row2['mark_id']; ?>"/>
                                    <input type="hidden" name="exam_id" value="<?php echo $exam_id; ?>"/>
                                    <input type="hidden" name="class_id" value="<?php echo $class_id; ?>"/>
                                    <input type="hidden" name="subject_id" value="<?php echo $subject_id; ?>"/>
                                    <input type="hidden" name="operation" value="update"/>
                                    <button type="submit" class="btn btn-primary"> Save</button>
                                </td>
                            </tr>
                            </form>
                        <?php
                        endforeach;
                    endforeach;
                    ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
        <!-- TABLE LISTING ENDS -->
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
    function show_subjects(class_id) {
        for (i = 0; i <= 100; i++) {

            try {
                document.getElementById('subject_id_' + i).style.display = 'none';
                document.getElementById('subject_id_' + i).setAttribute("name", "temp");
            } catch (err) {
            }
        }
        document.getElementById('subject_id_' + class_id).style.display = 'block';
        document.getElementById('subject_id_' + class_id).setAttribute("name", "subject_id");
    }
</script>
