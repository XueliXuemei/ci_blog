<p class='sidebar-title'><?php echo $title; ?></p>
<?php 
if ($total['proses']=='0'){ $proses = '<i class="text-danger">Pending</i>'; }elseif($total['proses']=='1'){ $proses = '<i class="text-warning">Proses</i>'; }elseif($total['proses']=='2'){ $proses = '<i class="text-info">Konfirmasi</i>'; }else{ $proses = '<i class="text-success">Packing </i>'; }
  echo "<div class='col-md-8'>
        <dl class='dl-horizontal'>
            <dt>Nama</dt>       <dd>$rows[nama_lengkap]</dd>
            <dt>No Telpon/Hp</dt>       <dd>$rows[no_hp]</dd>
            <dt>Email</dt>       <dd>$rows[email]</dd>
            <dt>Kota</dt>               <dd>$rows[nama_kota]</dd>
            <dt>Alamat Lengkap</dt>     <dd>$rows[alamat_lengkap]</dd>
        </dl>
    </div>

    <div class='col-md-4'>
        <center>
        Total Tagihan 
        <h4 style='margin:0px;'>Rp ".rupiah($total['total']+$total['ongkir'])."<br> <br> 
          <span style='text-transform:uppercase'>$total[kurir]</span> ($total[service])
        </h4>
        Status : <i>$proses</i>   
        </center>
    </div>

      <table class='table table-striped table-condensed '>
          <thead>
            <tr bgcolor='#e3e3e3'>
              <th width='47%'>Nama Produk</th>
              <th>Harga</th>
              <th>Qty</th>
              <th>Berat</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>";

          $no = 1;
          $diskon_total = 0;
          foreach ($record->result_array() as $row){
          $sub_total = (($row['harga_jual']-$row['diskon'])*$row['jumlah']);
          if ($row['diskon']!='0'){ $diskon = "<del style='color:red'>".rupiah($row['harga_jual'])."</del>"; }else{ $diskon = ""; }
          if (trim($row['gambar'])==''){ $foto_produk = 'no-image.png'; }else{ $foto_produk = $row['gambar']; }
          $diskon_total = $diskon_total+$row['diskon']*$row['jumlah'];
          echo "<tr>
                    <td class='valign'><a href='".base_url()."produk/detail/$row[produk_seo]'>$row[nama_produk]</a></td>
                    <td class='valign'>".rupiah($row['harga_jual']-$row['diskon'])." $diskon</td>
                    <td class='valign'>$row[jumlah]</td>
                    <td class='valign'>".($row['berat']*$row['jumlah'])." Gram</td>
                    <td class='valign'>Rp ".rupiah($sub_total)."</td>
                </tr>";
            $no++;
          }
          
          echo "<tr class='success'>
                  <td colspan='4'><b>Subtotal </b> <i class='pull-right'>(".terbilang($total['total'])." Rupiah)</i></td>
                  <td><b>Rp ".rupiah($total['total'])."</b></td>
                </tr>

                <tr class='success'>
                  <td colspan='4'><b>Berat</b> <i class='pull-right'>(".terbilang($total['total_berat'])." Gram)</i></td>
                  <td><b>$total[total_berat] Gram</b></td>
                </tr>

        </tbody>
      </table><br>

      Silahkan mentransferkan uang dengan total <b>Rp ".rupiah($total['total']+$total['ongkir'])."</b> ke salah satu pilihan bank di bawah ini : <br> 
      <table class='table table-hover table-condensed table-bordered'>
        <thead>
          <tr bgcolor='#e3e3e3'>
            <th width='20px'>No</th>
            <th>Nama Bank</th>
            <th>No Rekening</th>
            <th>Atas Nama</th>
          </tr>
        </thead>
        <tbody>";

            $noo = 1;
            $rekening = $this->model_app->view('rb_rekening');
            foreach ($rekening->result_array() as $row){
            echo "<tr><td>$noo</td>
                      <td>$row[nama_bank]</td>
                      <td>$row[no_rekening]</td>
                      <td>$row[pemilik_rekening]</td>
                  </tr>";
              $noo++;
            }

        echo "</tbody>
      </table>";
