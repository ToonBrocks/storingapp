<!doctype html>
<html lang="nl">

<head>
    <title>StoringApp / Meldingen / Nieuw</title>
    <?php require_once '../head.php'; ?>
</head>

<body>

    <?php require_once '../header.php'; ?>

    <div class="container">
        <h1>Nieuwe melding</h1>

        <form action="../backend/meldingenController.php" method="POST">
        
            <div class="form-group">
                <label for="attractie">Naam attractie:</label>
                <input type="text" name="attractie" id="attractie" class="form-input">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <select name="group" id="group">
                    <option value=""> - Kies een type - </option>
                    <option value="A">Type A</option>
                    <option value="B">Type B</option>
                    <option value="C">Type C</option>
                </select>
            </div>
            <div class="form-group">
                <label for="capaciteit">Capaciteit p/uur:</label>
                <input type="number" min="0" name="capaciteit" id="capaciteit" class="form-input">
            </div>
            <div class="form-group">
                <label for="prio">Prio:</label>
                <input type="checkbox" name="prio" id="prio">
                <label for="prio">Melding met prioriteit</label>
            </div>
            <div class="form-group">
                <label for="melder">Naam melder:</label>
                <input type="text" name="melder" id="melder" class="form-input">
            </div>
            <div class="form-group">
                <label for="info">Overige info</label>
                <textarea name="info" id="info" cols="73" rows="4"></textarea>
            </div>
            
            <input type="submit" value="Verstuur melding">

        </form>
    </div>  

</body>

</html>
