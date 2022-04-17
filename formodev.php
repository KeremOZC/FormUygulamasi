<!DOCTYPE html>
<html lang="en">
<head>
  <title>Başvuru Formu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Başvuru Formu</h2>
  <form action="odevform.php" method="POST">
    <div class="mb-3 mt-3">
      <label for="text">Ad ve Soyad:</label>
      <input type="text" name="ad" class="form-control"  placeholder="Adınızı ve Soyadınızı Giriniz" required>
    </div>
	<div class="input-group">
    <span class="input-group-text">@</span>
    <input type="text" name="kul" class="form-control" placeholder="Kullanıcı Adınızı Giriniz">
  </div>
  <div class="mb-3 mt-3">
      <label for="email">E-posta:</label>
      <input type="email" name="eposta" class="form-control" id="eposta" placeholder="*******@gmail.com" >
    </div>
    <div class="mb-3">
      <label for="sel1" class="form-label">Sınıfınız:</label>
    <select class="form-select" id="sel1" name="sinif" >
      <option selected>12-A</option>
      <option>12-B</option>
      <option>12-C</option>
      <option>12-D</option>
    </select>
    </div>
	<div class="mb-3 mt-3">
      <label for="text">Telefon Numaranız:</label>
      <input type="tel" class="form-control" maxlength="10" name="numara" placeholder="+90 000 000 0000" required>
    </div>
	<div class="mb-3 mt-3">
      <label for="comment">Fikirleriniz ve Görüşleriniz:</label>
      <textarea class="form-control" rows="5" id="comment" name="alan"required></textarea>
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="tık" required name="remember">Ön Bilgilendirme Sözleşmesini okudum ve kabul ediyorum!
      </label>
    </div>
    <button type="submit" class="btn btn-primary" name="Gonder">Gönder</button>
	<button type="reset" class="btn btn-primary">Temizle</button>
  </form>
</div>
</body>
</html>
