<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>RPG-concept</title>
    <link rel="stylesheet" href="../css/reset.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="shortcut icon" href="../images/Iconcubic-Dnd-Dice-D12.ico" type="images/x-icon">
    
</head>
<body>
    <header>
        <h1>Welcome to RPG initator</h1>
            <nav id="nav">
                <a href="#">Mj</a>
                <a href="#">PJ</a>
                <a href="#">Maps</a>
            </nav>
        
    </header>
    <main>
        <section id="screen">
            <?php 
            include('donnees.php');
            ?>
            <form enctype="multipart/form-data" action="index.php"  method='post'>
            <input name="parcourir" type="file"><button type='submit'>confirmer</button>
            </form>
        </section>
        <section id="group">
            ici le groupe de joueur
        </section>
        <section id="perso">
            ici la fiche du perso
        </section>
    </main>
</body>
</html>