<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@3.5.1/dist/full.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Online Payment Portal</title>
</head>
<body>
  <header></header>

  <main class="bg-white">
    <div class="text-center  font-bold  my-10">
    <h2 class="bg-slate-300 text-xl mb-3">Payment Portal</h2>
    <p>NID: </p>
    <h3>Your Payable Amount: </h3>
    </div>

    <div class="border-2 border-slate-600 rounded-xl mx-10 md:mx-40 grid grid-cols-2 gap-10">
      <div class="shadow-xl m-3 rounded-[10px] hover:border-2">
        <a href="#"><img src="../logo/mastercard.png" alt=""></a>
      </div>
      <div class="shadow-xl m-3 rounded-[10px] hover:border-2">
        <a href="#"><img src="../logo/visa.jpg" alt=""></a>
      </div>
      <div class="shadow-xl m-3 rounded-[10px] hover:border-2">
        <a href="#"><img src="../logo/bkash.png" alt=""></a>
      </div>
      <div class="shadow-xl m-3 rounded-[10px] hover:border-2">
        <a href="#"><img src="../logo/nagad.png" alt=""></a>
      </div>
      <div class="shadow-xl m-3 rounded-[10px] hover:border-2">
        <a href="#"><img src="../logo/ncc-bank.jpg" alt=""></a>
      </div>
      <div class="shadow-xl m-3 rounded-[10px] hover:border-2">
        <a href="#"><img src="../logo/mastercard.png" alt=""></a>
      </div>
    </div>
    
    <!-- You can open the modal using ID.showModal() method -->
<button class="btn" onclick="my_modal_4.showModal()">open modal</button>
<dialog id="my_modal_4" class="modal">
  <form method="dialog" class="modal-box w-11/12 max-w-5xl bg-slate-100 text-slate-900">
    <h3 class="font-bold text-lg">Payment Portal</h3>

    <div class="text-center  font-bold  my-10 mx-auto">
    <p>NID: </p>
    <h3>Your Payable Amount: </h3>
    </div>

    <div class="flex justify-center">
    <div class="border-2 border-slate-600 rounded-xl  md:mx-40 grid grid-cols-2 gap-10 w-80">
      <div class="bg-white shadow-xl m-3 rounded-[10px] hover:border-2">
        <a href="#"><img src="../logo/mastercard.png" alt=""></a>
      </div>
      <div class="bg-white shadow-xl m-3 rounded-[10px] hover:border-2">
        <a href="#"><img src="../logo/visa.jpg" alt=""></a>
      </div>
      <div class="bg-white shadow-xl m-3 rounded-[10px] hover:border-2">
        <a href="#"><img src="../logo/bkash.png" alt=""></a>
      </div>
      <div class="bg-white shadow-xl m-3 rounded-[10px] hover:border-2">
        <a href="#"><img src="../logo/nagad.png" alt=""></a>
      </div>
      <div class="bg-white shadow-xl m-3 rounded-[10px] hover:border-2">
        <a href="#"><img src="../logo/ncc-bank.jpg" alt=""></a>
      </div>
      <div class="bg-white shadow-xl m-3 rounded-[10px] hover:border-2">
        <a href="#"><img src="../logo/mastercard.png" alt=""></a>
      </div>
    </div>
    </div>
    <div class="modal-action">
      <button class="btn">Close</button>
    </div>
  </form>
</dialog>


  </main>

  <footer></footer>
</body>
</html>