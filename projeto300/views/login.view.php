<div class="mt-6 grid grid-cols-2 gap-2">
  <div class="border border-stone-700 rounded p-4">
    <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Login</h1>
    <form class="p-4 space-y-4" method="POST">
      <div class="flex flex-col">
        <label class="text-stone-400 mb-1">Email</label>
        <input type="email" name="email"
          class="border-stone-800 border-2  rounded-md bg-stone-900  text-sm focus:outline-none px-2 py-1">
      </div>
      <div class="flex flex-col">
        <label class="text-stone-400 ml-2 mb-1">Senha</label>
        <input type="password" name="senha"
          class="border-stone-800 border-2  rounded-md bg-stone-900  text-sm focus:outline-none px-2 py-1">
      </div>
      <button type="submit" class="border-stone-800 bg-stone-900 px-2 py-1 rounded-md border-2 hover:bg-stone-800">Logar</button>
    </form>
  </div>

  <div class="border border-stone-700 rounded p-4">
    <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Registro</h1>
    <form action="/registrar" method="POST" class="p-4 space-y-4">

    <?php 
        if(strlen($mensagem) > 0):
    ?>
    <div class="border-green-800 bg-green-900 text-green-400 px-4 py-1 rounded-md border-2">
            <?= $mensagem ?>
    </div>
    
    <?php endif; ?>
    <?php
    if (isset($_SESSION['validacao'])): ?>
        <div class="border-red-800 bg-red-900 text-stone-400 px-4 py-1 
        rounded-md border-2 text-sm font-bold">
          <ul>
            <li>Erro de validação</li>
            <?php foreach ($_SESSION['validacao'] as $validacao): ?>
              <li><?= $validacao ?></li>
            <?php endforeach; 
              unset($_SESSION['validacao']);
            ?>
          </ul>
        </div>
      <?php endif; ?>

      <div class="flex flex-col">
        <label class="text-stone-400 mb-1">Nome</label>
        <input type="text" name="nome" 
          class="border-stone-800 border-2  rounded-md bg-stone-900  text-sm focus:outline-none px-2 py-1">
      </div>

      <div class="flex flex-col">
        <label class="text-stone-400 mb-1">Email</label>
        <input type="text" name="email" 
          class="border-stone-800 border-2  rounded-md bg-stone-900  text-sm focus:outline-none px-2 py-1">
      </div>
      <div class="flex flex-col">
        <label class="text-stone-400 mb-1">Confirme seu email</label>
        <input type="text" name="email_confirmacao" 
          class="border-stone-800 border-2  rounded-md bg-stone-900  text-sm focus:outline-none px-2 py-1">
      </div>
      <div class="flex flex-col">
        <label class="text-stone-400 ml-2 mb-1">Senha</label>
        <input type="password" name="senha" 
          class="border-stone-800 border-2  rounded-md bg-stone-900  text-sm focus:outline-none px-2 py-1">
      </div>

      <button type="submit" class="border-stone-800 bg-stone-900 px-2 py-1 rounded-md border-2 hover:bg-stone-800">Registrar</button>
      <button type="reset" class="border-stone-800 bg-stone-900 px-2 py-1 rounded-md border-2 hover:bg-stone-800">Cancelar</button>
    </form>


  </div>
</div>