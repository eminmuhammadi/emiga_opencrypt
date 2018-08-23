    <div class="form-signin">
      <div class="text-center mb-4">

      </div>

      <div class="form-label-group">
            <select class="custom-select my-1 mr-sm-2" id="type" required autofocus>
            <option value="encrypt">Шифровать</option>
            <option value="decrypt">Расшифровывать</option>
            </select>
      </div>

      <div class="form-label-group">
            <select class="custom-select my-1 mr-sm-2" id="method" required autofocus>
            <option value="AES-128-CBC">AES-128-CBC</option>
            <option value="AES-128-CFB">AES-128-CFB</option>
            <option value="AES-128-CFB1">AES-128-CFB1</option>
            <option value="AES-128-CFB8">AES-128-CFB8</option>
            <option value="AES-128-OFB">AES-128-OFB</option>
            <option value="AES-192-CFB">AES-192-CFB</option>
            <option value="AES-192-CFB1">AES-192-CFB1</option>
            <option value="AES-192-OFB">AES-192-OFB</option>
            <option value="AES-256-CBC">AES-256-CBC</option>
            <option value="AES-256-CFB">AES-256-CFB</option>
            <option value="AES-256-CFB1">AES-256-CFB1</option>
            <option value="AES-256-CFB8">AES-256-CFB8</option>
            <option value="AES-256-OFB">AES-256-OFB</option>
            <option value="AES128">AES128</option>
            <option value="AES192">AES192</option>
            <option value="AES256">AES256</option>
            <option value="BF">BF</option>
            <option value="BF-CBC">BF-CBC</option>
            <option value="BF-CFB">BF-CFB</option>
            <option value="BF-OFB">BF-OFB</option>
            <option value="CAST">CAST</option>
            <option value="CAST-cbc">CAST-cbc</option>
            <option value="aes-192-cbc">aes-192-cbc</option>
            <option value="aes-192-cfb8">aes-192-cfb8</option>
            <option value="blowfish">blowfish</option>
            <option value="cast5-cbc">cast5-cbc</option>
            <option value="cast5-cfb">cast5-cfb</option>
            <option value="cast5-ofb">cast5-ofb</option>  
            </select>
      </div>

      <div class="form-group">
        <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">Открытый ключ</span>
        </div>
        <input type="text" id="pkey" class="form-control" required autofocus>
        <div class="input-group-prepend">
         <button type="button" class="btn" data-toggle="modal" data-target="#help-public-key">?</button> 
        </div>
        </div>
      </div>


      <div class="form-group">
        <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">Секретный ключ</span>
        </div>
        <input type="text" id="skey" class="form-control" required autofocus>
        <div class="input-group-prepend">
         <button type="button" class="btn" data-toggle="modal" data-target="#help-secret-key">?</button> 
        </div>
        </div>
      </div>

      <div class="form-group">
        <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">Путь</span>
        </div>
        <input type="number" id="route" class="form-control" required autofocus>
        <div class="input-group-prepend">
         <button  type="button" class="btn" data-toggle="modal" data-target="#help-route" >?</button> 
        </div>
      </div>
      </div>


      <div class="form-group">

        <textarea id="text" class="form-control"></textarea>

      </div> 

      <button  onclick="calculate()" class="btn btn-lg btn-primary btn-block" type="submit">Рассчитывать</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy;<?php echo date("Y");?> EmiGa <a href="https://github.com/eminmuhammadi/opencrypt_emiga/">Посмотреть полный проект</a> </br> <a href="/app/en/">English</a> | <a href="/app/ru/">Русский</a> | <a href="/app/az/">Azərbaycanca</a></p>
    </div>


<!-- Help Modals -->
<div class="modal fade" id="help-route" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Помощь путь</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Путь может помочь вам шифровать каждую пару секретного ключа и открытого ключа. Каждый путь может помочь вам повторить криптор</p>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="help-secret-key" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Помощь секретный ключ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>В криптографии закрытый ключ (секретный ключ) представляет собой переменную, которая используется с алгоритмом для шифрования и дешифрования кода. Шифрование качества всегда следует фундаментальному правилу: алгоритм не должен храниться в секрете, но ключ делает. Частные ключи играют важную роль как в симметричной, так и в асимметричной криптографии.</p>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="help-public-key" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Помощь Открытый ключ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>В системе шифрования с открытым ключом любой человек может шифровать сообщение, используя открытый ключ получателя. Это зашифрованное сообщение может быть расшифровано только с помощью закрытого ключа получателя. Чтобы быть практичным, генерация открытого и закрытого ключа-пары должна быть экономически эффективной. Сила криптографической системы с открытым ключом основана на вычислительных усилиях (коэффициент работы в криптографии), необходимых для нахождения закрытого ключа из его парного открытого ключа</p>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">   
function calculate() {      

var type   =    document.getElementById('type').value;
var method =    document.getElementById('method').value;
var text   =    document.getElementById('text').value;
var pkey   =    document.getElementById('pkey').value;
var skey   =    document.getElementById('skey').value;
var route  =    document.getElementById('route').value;
if ((text == "") || (pkey == "") || (skey == "") || (route == "") ) {
alert("Please fill the blanks correct !!");
return false;
                  }
else  { 
location.href = '/app/ru/?type='+ type + '&algo='+ method +'&text=' + text +'&pkey=' + pkey +'&skey=' + skey +'&route=' + route ;
return false;
       }
                }

</script>
