    <div class="form-signin">
      <div class="text-center mb-4">

      </div>

      <div class="form-label-group">
            <select class="custom-select my-1 mr-sm-2" id="type" required autofocus>
            <option value="encrypt">Encrypt</option>
            <option value="decrypt">Decrypt</option>
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
          <span class="input-group-text" id="inputGroupPrepend">Public Key</span>
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
          <span class="input-group-text" id="inputGroupPrepend">Secret Key</span>
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
          <span class="input-group-text" id="inputGroupPrepend">Route</span>
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

      <button  onclick="calculate()" class="btn btn-lg btn-primary btn-block" type="submit">Calculate</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy;<?php echo date("Y");?> EmiGa <a href="https://github.com/eminmuhammadi/opencrypt_emiga/">See full project</a> </br> <a href="/app/en/">English</a> | <a href="/app/ru/">Русский</a> | <a href="/app/az/">Azərbaycanca</a></p>
    </div>


<!-- Help Modals -->
<div class="modal fade" id="help-route" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Help Route</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Route is a <code>float</code> value . Route can help you crypt each pair of secret key and public key.Every route can help you repeat cryptor</p>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="help-secret-key" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Help Secret Key</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>In cryptography, a private key (secret key) is a variable that is used with an algorithm to encrypt and decrypt code. Quality encryption always follows a fundamental rule: the algorithm doesn't need to be kept secret, but the key does. Private keys play important roles in both symmetric and asymmetric cryptography.</p>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="help-public-key" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Help Public Key</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>In a public key encryption system, any person can encrypt a message using the receiver's public key. That encrypted message can only be decrypted with the receiver's private key. To be practical, the generation of a public and private key -pair must be computationally economical. The strength of a public key cryptography system relies on the computational effort (work factor in cryptography) required to find the private key from its paired public key</p>
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
location.href = '/app/en/?type='+ type + '&algo='+ method +'&text=' + text +'&pkey=' + pkey +'&skey=' + skey +'&route=' + route ;
return false;
       }
                }

</script>
