<!-- FRONTEND per interfaccia utente -->

<?php include __DIR__ . '/partials/head.php' ?>

<body>

  <div id="app" class="container my-5 ">
    <h1 class="text-center">TO DO LIST</h1>

    <div class="container-fluid">

      <ul class="list-group my-5">
        <li class="list-group-item">An item</li>
        <li class="list-group-item">A second item</li>
        <li class="list-group-item">A third item</li>
        <li class="list-group-item">A fourth item</li>
        <li class="list-group-item">And a fifth one</li>
      </ul>

      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Scrivi un nuovo task">
        <button class="btn btn-primary" type="button" id="button-addon2">Button</button>
      </div>


    </div>

  </div>
  
  <!-- JS -->
  <script src="script.js"></script>
</body>
</html>