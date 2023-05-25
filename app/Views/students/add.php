<?php

$this->extend('layout/main');
$this->section('body');

?>

<form action="/students/store" method="POST">
<h1>Add Student</h1>
<div class="mb-3">
  <label for="studentName" class="form-label"></label>
  <input type="text"  placeholder="Student Name" aria-label="Student Name" class="form-control" name="studentName">
</div>
<div class="mb-3">
  <label for="studentNum" class="form-label">Student Number</label>
  <input type="text"  class="form-control" name="studentNum" value="<?= $studentNumber; ?>" readonly>
</div>
<div class="mb-3">
  <label for="studentSection" class="form-label"></label>
  <input type="text" placeholder="Student Section" aria-label="Student Section" class="form-control" name="studentSection" >
</div>
<div class="mb-3">
  <label for="studentCourse" class="form-label"></label>
  <input type="text" placeholder="Student Course" aria-label="Student Course" class="form-control" name="studentCourse" >
</div>
<div class="mb-3">
  <label for="studentBatch" class="form-label"></label>
  <input type="text" placeholder="Stdent Batch" aria-label="Stdent Batch" class="form-control" name="studentBatch" >
</div>
<div class="mb-3">
  <label for="studentLevel" class="form-label"></label>
  <input type="text" placeholder="Student Grade Level" aria-label="Student Grade Level" class="form-control" name="studentLevel" >
</div>
<button type="submit" class="btn btn-success">submit</button>
</form>




<?php $this->endSection(); ?>