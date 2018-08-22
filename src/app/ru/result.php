<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/opencrypt_emiga.php');
$do = opencrypt_emiga( $text , $type );
?>
    <div class="form-signin">
      <div class="text-center mb-4">
                   
      </div>
      <div class="form-group">
        <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">Открытый ключ</span>
        </div>
        <input disabled="On" type="text" id="pkey" value="<?php echo $_GET['pkey'];?>" class="form-control">
        </div>
      </div>


      <div class="form-group">
        <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">Секретный ключ</span>
        </div>
        <input disabled="On" type="text" id="skey" value="<?php echo $_GET['skey'];?>" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">Путь</span>
        </div>
        <input disabled="On" type="number" value="<?php echo $_GET['route'];?>" id="route" class="form-control">
      </div>
      </div>


      <div class="form-group">
      	
        <textarea style="height:auto;" readonly id="text" class="form-control"><?php echo $do;?></textarea>
       
      </div> 

       <button style="margin-top:-16.5px;background-color:grey;color:white;" 
       	onclick="copy_text();" type="button" class="btn btn-sm btn-secondary btn-block">Копировать</button></br> 
		<script>
		function copy_text() {
  		var copyText = document.getElementById("text");
  		copyText.select();
  		document.execCommand("copy");
		}
		</script>
      <button  onclick="window.history.go(-1); return false;" class="btn btn-lg btn-primary btn-block" type="submit">Иди назад</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy;<?php echo date("Y");?> EmiGa <a href="https://github.com/eminmuhammadi/opencrypt_emiga/">Посмотреть полный проект</a> </br> <a href="/app/en/">English</a> | <a href="/app/ru/">Русский</a> | <a href="/app/az/">Azərbaycanca</a></p>
    </div>

