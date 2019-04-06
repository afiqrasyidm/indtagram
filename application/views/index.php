

<div class="container" style="margin-top:30px">
  <div class="row">

    <div class="col-md-6 offset-md-3">
				<br>
    <?php foreach ($datas_gambar as $data_gambar): ?>

        <div class="img">
          <p> Diupload oleh:    <p><?php echo $data_gambar['email']; ?></p> </p>
                <a href="<?php echo site_url('gambar/detail/'.$data_gambar['gambar_id']); ?>"> <img src="<?php echo base_url('gambar/'.$data_gambar['file_name']);?>" alt="..." class="img-thumbnail"> </a>

            <br>
  			</div>
        <br>
        <br>
        <hr style="height:1px;border:none;color:#333;background-color:#333;" />
        <br>
        <br>

    <?php endforeach; ?>

    </div>
  </div>
</div>
