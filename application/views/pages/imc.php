<!DOCTYPE html>
<html>
<head>
  <title>Calcul de l'IMC</title>
  <style>
    .imc-figure {
      width: 200px;
      height: 200px;
      border: 1px solid #ccc;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
    }

    .underweight {
      background-color: #FFD700;
    }

    .normal-weight {
      background-color: #2ECC71;
    }

    .overweight {
      background-color: #F39C12;
    }

    .obese {
      background-color: #E74C3C;
    }
  </style>
</head>
<body>
  <h1>Calcul de l'IMC</h1>

  <label for="poids">Poids (kg):</label>
  <input type="text" id="poids">

  <label for="taille">Taille (cm):</label>
  <input type="text" id="taille">

  <label for="sexe">Sexe:</label>
  <select id="sexe">
    <option value="homme">Homme</option>
    <option value="femme">Femme</option>
  </select>

  <button onclick="calculerIMC()">Calculer</button>

  <div id="resultat">
    <h2>Résultat de l'IMC</h2>
    <p>L'IMC est un indice qui permet d'évaluer la corpulence d'une personne en fonction de son poids, de sa taille et de son sexe. Voici comment interpréter les résultats :</p>
    <ul>
      <li>Hommes :</li>
      <ul>
        <li>Moins de 18,5 : Insuffisance pondérale</li>
        <li>De 18,5 à 24,9 : Poids normal</li>
        <li>De 25 à 29,9 : Surpoids</li>
        <li>30 ou plus : Obésité</li>
      </ul>
      <li>Femmes :</li>
      <ul>
        <li>Moins de 18,5 : Insuffisance pondérale</li>
        <li>De 18,5 à 24,9 : Poids normal</li>
        <li>De 25 à 29,9 : Surpoids</li>
        <li>30 ou plus : Obésité</li>
      </ul>
    </ul>
  </div>

  <script>
    function calculerIMC() {
      var poids = parseFloat(document.getElementById('poids').value);
      var taille = parseFloat(document.getElementById('taille').value);
      var sexe = document.getElementById('sexe').value;

      var tailleEnMetres = taille / 100;
      var imc = poids / (tailleEnMetres * tailleEnMetres);

      var resultatDiv = document.getElementById('resultat');
      resultatDiv.innerHTML = '';

      var figure = document.createElement('figure');
      figure.className = 'imc-figure';

      var imcText = document.createElement('figcaption');
      imcText.innerText = imc.toFixed(2);

      if (sexe === 'homme') {
        if (imc < 18.5) {
          figure.classList.add('underweight');
        } else if (imc >= 18.5 && imc < 25) {
          figure.classList.add('normal-weight');
        } else if (imc >= 25 && imc < 30) {
          figure.classList.add('overweight');
        } else {
          figure.classList.add('obese');
        }
      } else if (sexe === 'femme') {
        if (imc < 18.5) {
          figure.classList.add('underweight');
        } else if (imc >= 18.5 && imc < 24.9) {
          figure.classList.add('normal-weight');
        } else if (imc >= 24.9 && imc < 30) {
          figure.classList.add('overweight');
        } else {
          figure.classList.add('obese');
        }
      }

      figure.appendChild(imcText);
      resultatDiv.appendChild(figure);
    }
  </script>
</body>
</html>
