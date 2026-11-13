@extends('layout')
@section('content')
<table border="0" style="width:800px; margin:50px;">
  <tr>
    <td>
      <img src="img/student.jpg" width="175" height="175">
    </td>
    <td>
      <img src="img/teacher.png" width="175" height="175">
    </td>
  </tr>
  <tr>
    <td>
      <img src="img/library.png" width="175" height="175">
    </td>
    <td>
      <img src="img/administrator.png" width="175" height="175">
    </td>
  </tr>
</table>
@endsection
```[cite: 16]

4. Enregistrez le fichier avec **`Ctrl + S`**.

---

### Étape 4 : Configurer la route et lancer le serveur

1. Dans VS Code, ouvrez **`routes/web.php`**[cite: 16].
2. Assurez-vous que la route d'accueil pointe vers la vue `home`[cite: 16] :

```php
Route::get('/', function () {
    return view('home');
});
```[cite: 16]

3. Enregistrez le fichier avec **`Ctrl + S`**.
4. Dans le terminal de VS Code, lancez la commande[cite: 17] :

```powershell
php artisan serve
```[cite: 17]

5. Accédez à l'adresse **`[http://127.0.0.1:8000](http://127.0.0.1:8000)`** dans votre navigateur[cite: 17].

Dites-moi si le template avec le titre "School Management" et les 4 images s'affiche correctement !