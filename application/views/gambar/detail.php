<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>


<br>
<br>
<div class="col-md-6 offset-md-3">
  <div class="img">
     <img src="<?php echo base_url('gambar/'.$file_name);?>" alt="..." class="img-thumbnail">

  </div>
  <br>
  <hr style="height:1px; border:none; color:#000; background-color:#000;">
  <p>Komentar:</p>
  <p>Afiq: Wah keren kak</p>
  <hr>
  <br>
  <form method="post">
    <textarea id="summernote" name="editordata"></textarea>
  <br>
  <br>

     <button type="submit" class="btn btn-primary">Beri Komentar</button>
  </form>
  <br>
  <br>
  <script>
    $(document).ready(function() {
      $('#summernote').summernote();
    });
  </script>
</div>
