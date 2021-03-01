<?php include('db.php') ?>
<html >
    <head>
        <meta charset="utf-8">
        <title>ex-dischi-musicali</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/vue"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header>
            <div class="container">
                <img src="img/logo.png" alt="logo" />
            </div>
        </header>
        <div id="app">
            <!-- sezione tools -->
           <div class="tools">
          
                <select v-model="select">
                    <option >Work in progress</option>
                </select>
             
           </div> 
           <!-- sezione dischi -->
            <div class="cds-container container">
            <!-- Disco ad esempio -->
                  <?php
                      foreach($db as $disco){  ?>
                <div class="cd">    
                    <img src="<?php echo $disco["img"] ?>" alt="">
                    <h3><?php echo $disco["title"] ?></h3>
                    <span class="author"><?php echo $disco["author"] ?></span>
                    <span class="year"><?php echo $disco["data"] ?></span>
                </div>
                <?php }?>
                
            </div>
        </div>
    
        

        <script src="js/scipt.js" charset="utf-8"></script>
    </body>
</html>