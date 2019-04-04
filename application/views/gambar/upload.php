<link rel = "stylesheet" type = "text/css" href ="<?php echo base_url('assets/css/upload.css');?>">
<script src="upload.js"> </script>
<div>
    <?php echo $error;?>

  	<?php echo form_open_multipart('gambar/upload');?>

    <input type="file" name="gambar" multiple>
    <p>Drag your files here or click in this area.</p>
    <button type="submit">Upload</button>
  </form>
</div>
