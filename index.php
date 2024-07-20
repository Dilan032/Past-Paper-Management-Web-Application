<body>
    <?php include 'components/head.php'; ?>
    <?php include 'components/navBar.php'; ?>
    <?php include 'components/loginForm.php'; ?>
    <?php include 'connection/dbConnection.php'; ?>


    <!-- main image -->
    <div class="container mb-4 mt-4">
        <img src="images/main2.jpg" class="img-fluid mx-auto d-block img-thumbnail"  alt="main image" width="800px">
    </div>
    
    
    <div class="container text-center">
        <!-- home details section -->
        <section class="mb-3">
            <h3>About</h3>
            <p>Here you can get all HND Past Papers, Model Papers and Answer Sheets of SLIATE.</p>
        </section>

        <!-- cose category section -->
        <div class="row fw-bold">
                <div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-4">
                <a href="allSubjectPage.php">
                    <div class="cose-category-bg">
                        <img src="images/paper.png" alt="icon" width="40px" class="mb-4">
                        <br>
                        HNDIT
                    </div>
                </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-4">
                <a href="allSubjectPage.php">
                    <div class="cose-category-bg">
                        <img src="images/paper.png" alt="icon" width="40px" class="mb-4">
                        <br>
                        HNDA
                    </div>  
                </a>                 
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-4">
                <a href="allSubjectPage.php">
                    <div class="cose-category-bg">
                        <img src="images/paper.png" alt="icon" width="40px" class="mb-4">
                        <br>
                        HNDE
                    </div> 
                </a> 
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-4">
                <a href="allSubjectPage.php">
                    <div class="cose-category-bg">
                        <img src="images/paper.png" alt="icon" width="40px" class="mb-4">
                        <br>
                        HNDM
                    </div>
                </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-4">
                <a href="allSubjectPage.php">
                    <div class="cose-category-bg">
                        <img src="images/paper.png" alt="icon" width="40px" class="mb-4">
                        <br>
                        HNDTHM
                    </div>
                </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-4">
                <a href="allSubjectPage.php">
                    <div class="cose-category-bg">
                        <img src="images/paper.png" alt="icon" width="40px" class="mb-4">
                        <br>
                        HNDBA
                    </div>
                </a>
                </div>
                
            </div>    

    </div>


    <?php include 'components/footer.php'; ?>
</body>
</html>