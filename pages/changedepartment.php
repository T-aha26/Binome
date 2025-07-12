<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire-Department</title>
        <link rel="stylesheet" href="../assets/bootstrap-5.3.5-dist/css/bootstrap.min.css">
    <script src="../assets/bootstrap-5.3.5-dist/js/bootstrap.bundle.min.js"></script>

</head>
<body class ="bg-light">
    <div class = "container mt-5">  
     <div class = "card-header bg-dark text-white">
    <h4 class = "mb-0">Choisissez un département et une date </h4>
    </div>
    <div class = "card-body">

    <form action="#" method ="POST">
        <div class = "mb-3">
    <label for="département" class="form-label text-dark">Départements</label>
    <select class ="form-select text-dark" id="departement" name="departement" required>

        <option value="Customer Service"></option>
        <option value="Development"></option>
        <option value="Finance"></option>
        <option value="Human Ressources"></option>
        <option value="Marketing"></option>
        <option value="Production"></option>
        <option value="Quality Management "></option>
        <option value="Research"></option>
        <option value="Sales"></option>
    </select>
        </div>
         <div class ="mb-3">
            <label for="dateDebut" class="form-label">Date de début </label>
            <input type="date" class="form-control" id="dateDebut" name="dateDebut" required>
         </div>
    
        <div class ="text-end">
    <button type="submit" class="btn btn-success">ok</button>
        </div>
    </form>

    </div>
    </div>
    </div>
    <a href="../index.php" class="btn btn-secondary mt-3">Retour</a>
</body>
</html>