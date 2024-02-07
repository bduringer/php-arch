<form action="/login" method="post" >
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Seu e-mail">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Senha</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Sua senha">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php echo getFlash('message'); ?>