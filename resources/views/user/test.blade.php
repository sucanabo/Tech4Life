<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Javascript Project</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
  <div class="text-center mt-5">
    <div class="mb-5">
      <img class="img-thumbnail" src="off.jpg">
    </div>
    <button class="btn btn-primary">Bật đèn</button>
  </div>
  
  <script>
    let statusLight = false
    const img = document.querySelector('img')
    const btn = document.querySelector('button')

    btn.addEventListener('click', toggleBulb)
    
    function toggleBulb() {
      if (statusLight) {
        // Đèn đang bật
        // Tắt đèn đi, chuyển chữ thành bật đèn
        img.src = 'off.jpg'
        btn.innerText = 'Bật đèn'
        statusLight = false
      } else {
        // Đèn đang tắt
        // Bật đèn lên, chuyển chữ thành tắt đèn
        img.src = 'on.jpg'
        btn.innerText = 'Tắt đèn'
        statusLight = true
      }
    }
  </script>
</body>
</html>